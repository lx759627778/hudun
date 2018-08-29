const app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    imgwidth: '',
    imgheight: ''
  },
  onLoad: function (){
    
  },
  setImageWidth: function (e) {
    var _this = this;
    var imgwidth = e.detail.width,    //获取图片真实宽度  
      imgheight = e.detail.height
    _this.setData({
      imgwidth: imgwidth, 
      imgheight: imgheight
    })
    imgheight = e.detail.height
  },
  callPhone: function (event){
    wx.makePhoneCall({
      phoneNumber: event.currentTarget.id
    })
  },
  viewOrder: function (){
    wx.navigateTo({
      url: '../order/order'
    })
  }
})
