const app = getApp()
var md5 = require('../../utils/util.js')
Page({
  data: {
    orderArr:[],
    timestamp: ''
  },
  onLoad: function (options) {
    var that = this
    wx.request({
      url: app.globalData.requestUrl + '/ver2/getMiniOrderList/' + app.globalData.openid + '/125',
      header:{
        "Content-Type":"application/x-www-form-urlencoded",
        "Cookie":"my_cookie=1234"
      },
      success: function (res){
        console.log(res)
        var arr = res.data.responseData
        var arr1 = []
        for (var i = 0; i < arr.length;i++){
          if (arr[i].order_status == 1){
            arr1.push(arr[i])
          } else if (arr[i].order_status == 3){
            arr1.unshift(arr[i])
          }
        }
        if (arr1[0].order_status == 3){
          for (var i = 0; i < arr1.length; i++){
            if (arr1[i].order_status == 1){
              arr1[i].order_status = 9
            }
          }
        }
        if (arr.length>0){
          that.setData({
            orderArr: arr1
          })
        }
      }
    })
  },
  payNow: function (e){
    var that = this
    var currentOrder = that.data.orderArr[e.currentTarget.id]
    wx.showLoading({
      title: '生成订单',
    })
    wx.request({
      url: app.globalData.requestUrl + '/ver2/getUnixTime',
      method: 'POST',
      header: {
        "Content-Type": "application/x-www-form-urlencoded",
        "Cookie": "my_cookie=1234"
      },
      success: function (res) {
        console.log(res)
        that.setData({
          timestamp: res.data.msg
        })
        var token = md5.md5('mini' + res.data.msg).substr(0, 10).toLocaleLowerCase()
        wx.request({
          url: app.globalData.requestUrl + '/ver2/mini/paywithWeixin/' + currentOrder.product + '/' + currentOrder.product_price + '/1.0.1/' + app.globalData.openid + '/125/' + app.globalData.openid + '/' + that.data.timestamp + '/' + token + '/' + app.globalData.openid + '/' + currentOrder.order_num,
          method: 'POST',
          header: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Cookie": "my_cookie=1234"
          },
          success: function (res) {
            wx.hideLoading()
            console.log(res)
            wx.requestPayment({
              'timeStamp': res.data.responseData.timeStamp.toString(),
              'nonceStr': res.data.responseData.noncestr,
              'package': res.data.responseData.package,
              'signType': 'MD5',
              'paySign': res.data.responseData.paySign,
              'success': function (res) {
                console.log(res)
              },
              'fail': function (res) {
              }
            })
          }
        })
      }
    })
  }
})