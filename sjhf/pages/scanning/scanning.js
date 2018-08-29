const app = getApp()　
Page({

  /**
   * 页面的初始数据
   */
  data: {
    model:'',
    brand:''
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.setData({
      model: app.globalData.model,
      brand: app.globalData.brand
    })
  },
  toScan: function (){
    wx.redirectTo({
      url: '../mobileinfo/mobileinfo'
    })
  }
})