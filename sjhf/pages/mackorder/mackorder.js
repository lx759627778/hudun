Page({
  /**
   * 页面的初始数据
   */
  data: {
    title: '',
    isIos: '',
    checked: '',
    imgUrl:''
  },
  onLoad: function (options){
    this.setData({
      title: options.title,
      isIos: options.isIos,
      checked: options.checked,
      imgUrl:options.imgUrl,
      price: options.price
    }) 
    wx.setNavigationBarTitle({
      title: this.data.title
    })
  },
  payNow: function (){
    var str = '?isIos=' + this.data.isIos + '&checked=' + this.data.checked + '&title=' + this.data.title + '&imgUrl=' + this.data.imgUrl + '&price=' + this.data.price
    wx.navigateTo({
      url: '../wirteInfo/wirteInfo'+str
    })
  }
  
})