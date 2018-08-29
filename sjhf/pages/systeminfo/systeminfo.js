var timer;
const app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    brand: '',
    model: '',
    version: '',
    system: '',
    pixelRatio: '',
    isIos:''
  },
  onLoad: function (){
    var that = this
    wx.getSystemInfo({
      success: function(res) {
        var model = res.model.split('<')[0]
          that.setData({
            brand: res.brand,
            model: model,
            version: res.version,
            system: res.system,
            pixelRatio: res.pixelRatio
          })
          var system = app.globalData.system
          if (system == 'iOS') {
            that.setData({
              isIos:0
            })
          } else {
            that.setData({
              isIos: 1
            })
          }
      }
    })
   timer = setTimeout(function(){
      wx.showModal({
        title: '查看恢复帮助',
        content: '前往获取专家咨询服务吧。',
        showCancel: false,
        confirmColor: '#46A3F4',
        success: function (res) {
          if (res.confirm) {
            wx.switchTab({
              url: '../index/index'
            })
            clearTimeout('timer')
          } 
        }
      })
    },2000)
  },
  toIndex: function (){
    wx.switchTab({
      url: '../index/index',
    })
  }
})