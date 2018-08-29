const app = getApp()
var md5 = require('../../utils/util.js')
Page({

  /**
   * 页面的初始数据
   */
  data: {
    title: '短信恢复',
    isIos: '0',
    checked: '2',
    imgUrl: '../../images/icon_weixin.png',
    price: '156',
    imgcodeUrl:'',
    timestamp:'',
    userphone: '',
    canpay:false,
    focus:false,
    orderNum: ''
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.setData({
      title: options.title,
      isIos: options.isIos,
      checked: options.checked,
      imgUrl: options.imgUrl,
      price: options.price
    })
    wx.setNavigationBarTitle({
      title: this.data.title
    })
  },
  getImageCode: function (){
    var that = this
    wx.request({
      url: app.globalData.requestUrl + '/ver2/verify',
      method: 'POST',
      responseType: 'arraybuffer',
      success: function (res) {
        var objFile = new Blob([res.data], { type: "image/png" })
        var reader = new FileReader();
        reader.onload = function (file) {
          var arrayBuffer = file.currentTarget.result;
          var base64 = wx.arrayBufferToBase64(arrayBuffer)
          that.setData({
            imgcodeUrl: 'data:image/png;base64,' + base64
          })
        }
        reader.readAsArrayBuffer(objFile)
      }
    })
  },
  checkphone: function (e){
    var that = this
    var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
    var phone = e.detail.value
    if (myreg.test(phone)){
      wx.showModal({
        title: '请确认手机号',
        content: phone,
        success: function (res){
          if(res.confirm){
            that.setData({
              userphone: phone,
              canpay:true
            })
          }else{
            that.setData({
              userphone: '',
              canpay: false
            })
          }
        }
      })
    } else if (e.detail.value.length>0){
      wx.showLoading({
        title: '手机号错误',
      })
      that.setData({
        userphone: e.detail.value,
        canpay: false
      })
      setTimeout(function () {
        wx.hideLoading()
      }, 1000)
    }else{
      that.setData({
        userphone: '',
        canpay: false
      })
    }
  },
  payNow: function (){
    if (this.data.canpay) {
      wx.showLoading({
        title: '生成订单',
      })
      var that = this
      wx.request({
        url: app.globalData.requestUrl + '/ver2/getUnixTime',
        header: {
          "Content-Type": "application/x-www-form-urlencoded",
          "Cookie": "my_cookie=1234"
        },
        method: 'POST',
        success: function (res) {
          that.setData({
            timestamp: res.data.msg
          })
          var token = md5.md5('mini' + res.data.msg).substr(0, 10).toLocaleLowerCase()
          wx.request({
            url: app.globalData.requestUrl + '/ver2/bindMobile/' + that.data.userphone + '/' + app.globalData.openid + '/' + app.globalData.openid + '/125',
            header: {
              "Content-Type": "application/x-www-form-urlencoded",
              "Cookie": "my_cookie=1234"
            },
            success: function (res){
              console.log(res)
              if (res.data.msg == 'success' || res.data.msg == 'existed'){
                wx.request({
                  url: app.globalData.requestUrl + '/ver2/mini/paywithWeixin/recover数据恢复精灵-' + that.data.title + '/' + that.data.price + '/1.0.1/' + that.data.userphone + '/125/' + app.globalData.openid + '/' + that.data.timestamp + '/' + token + '/' + app.globalData.openid,
                  method: 'POST',
                  header: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Cookie": "my_cookie=1234"
                  },
                  success: function (res) {
                    wx.hideLoading()
                    that.setData({
                      orderNum: res.data.responseData.order_num
                    })
                    app.sensors.track('AppOrderPay', {
                      productOrderID: that.data.orderNum,
                      productName: 'recover数据恢复精灵-' + that.data.title,
                      prodctType: that.data.title,
                      productService: '预约服务',
                      productPrice: Number(that.data.price),
                      payMethod: '微信'
                    });
                    wx.requestPayment({
                      'timeStamp': res.data.responseData.timeStamp.toString(),
                      'nonceStr': res.data.responseData.noncestr,
                      'package': res.data.responseData.package,
                      'signType': 'MD5',
                      'paySign': res.data.responseData.paySign,
                      'success': function (res) {
                        app.globalData.auth=1;
                        wx.switchTab({
                          url: "../help/help"
                        })
                        app.sensors.track('AppOrderPaySuccess', {
                          productOrderID: that.data.orderNum,
                          productName: 'recover数据恢复精灵-' + that.data.title,
                          prodctType: that.data.title,
                          productService: '预约服务',
                          productPrice: Number(that.data.price),
                          payMethod: '微信',
                          payStatus: '支付成功'
                        });
                      },
                      'fail': function (res) {
                        app.sensors.track('AppOrderPaySuccess', {
                          productOrderID: that.data.orderNum,
                          productName: 'recover数据恢复精灵-' + that.data.title,
                          prodctType: that.data.title,
                          productService: '预约服务',
                          productPrice: Number(that.data.price),
                          payMethod: '微信',
                          payStatus: '支付失败'
                        });
                      }
                    })
                  }
                })
              }
            }
          })
        }
      })
    }else{
      this.setData({
        focus:true
      })
    }
  }
})