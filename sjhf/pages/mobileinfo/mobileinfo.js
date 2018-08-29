var timer;
const app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    
  },
  onReady: function(){
    timer = setTimeout(function () {
      wx.redirectTo({
        url: '../systeminfo/systeminfo',
      })
    },2000)
  }
})
