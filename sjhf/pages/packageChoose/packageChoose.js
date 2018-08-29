const app = getApp()
Page({
  data: {
    title:'套餐选择',
    imgUrl:'../../images/icon_weixin.png',
    checked:2,
    price: 156,
    isIos: 0
  },
  onLoad: function (options) {
    // 页面初始化 options为页面跳转所带来的参数  
    this.setData({
      title: options.title,
      imgUrl: options.imgUrl,
      isIos: options.isIos
    })  
    wx.setNavigationBarTitle({
      title: this.data.title
    })

  },
  checkpackage: function (res){
    var _index = res.currentTarget.id
      this.setData({
        checked: _index,
        price: res.currentTarget.dataset.price
      })
  },
  order: function () {
    var str = '?isIos=' + this.data.isIos + '&checked=' + this.data.checked + '&title=' + this.data.title + '&imgUrl=' + this.data.imgUrl + '&price=' + this.data.price
    wx.navigateTo({
      url: '../wirteInfo/wirteInfo' + str,
    })
  }
})