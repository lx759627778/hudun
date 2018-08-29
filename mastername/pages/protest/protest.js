// pages/protest/protest.js
const app = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    Wechatnumber:""
  },
  //事件处理函数
  copyTBL: function (e) {
    var self = this;
    wx.setClipboardData({
      data: self.data.Wechatnumber,
      success: function (res) {
        wx.showToast({
          title: '复制成功',
          icon: 'success',
          duration: 2000
        })
      }
    });
  },
  popclose: function (e) {
    console.log("关闭弹出");
    wx.switchTab({
      url: '../index/index',
    })
  },



  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var nubarr = [
      "13701648649", "13391067528", "16602187370"
    ];
    var daynub = DateMinus();
    this.setData({
      Wechatnumber: nubarr[daynub]
    })
  },

})

//三天循环
function DateMinus() {
  var sdate = '2018-08-11';
  sdate = new Date(sdate.replace(/-/g, "/"));
  var now = new Date();
  var days = now.getTime() - sdate.getTime();
  var day = parseInt(days / (1000 * 60 * 60 * 24));
  return day%3;
}