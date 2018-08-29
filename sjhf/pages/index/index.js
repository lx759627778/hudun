//index.js
//获取应用实例
const app = getApp()
Page({
  data:{
    tipsArr:[
    ],
    listNameArr:[
      '微信恢复', 'QQ恢复', '短信恢复', '图片恢复', '联系人恢复', '通话记录恢复', 'Office文档恢复', '音视频恢复', '微信聊天记录清除'
    ],
    productArr:[
      {
        imgUrl:'../../images/icon_weixin.png',
        title: '微信恢复'
      },
      {
        imgUrl: '../../images/btn_QQ.png',
        title: 'QQ恢复'
      },
      {
        imgUrl: '../../images/icon_duanxin.png',
        title: '短信恢复'
      },
      {
        imgUrl: '../../images/icon_tp.png',
        title: '图片恢复'
      },
      {
        imgUrl: '../../images/icon_lxr.png',
        title: '联系人恢复'
      },
      {
        imgUrl: '../../images/icon_thjl.png',
        title: '通话记录恢复'
      },
      {
        imgUrl: '../../images/icon_office.png',
        title: 'Office文档恢复'
      },
      {
        imgUrl: '../../images/icon_lxrcopy.png',
        title: '音视频恢复'
      },
      {
        imgUrl: '../../images/icon_weixindelet.png',
        title: '微信聊天记录清除'
      }
    ],
    bannerUrl:[
      '../../images/banner01.png',
      '../../images/banner02.png',
      '../../images/banner03.png'
    ],
    imgwidth: 0,
    imgheight: 0
  },
  onLoad: function () {
    // 设置动态手机号
    this.setData({
      tipsArr: this.setTipsData()
    })
  },
  imageLoad: function (e) {
    var _this = this;
    var $width = e.detail.width,    //获取图片真实宽度  
      $height = e.detail.height,
      ratio = $width / $height;   //图片的真实宽高比例  
    var viewWidth = 500,           //设置图片显示宽度，  
      viewHeight = 500 / ratio;    //计算的高度值    
    _this.setData({
      imgwidth: $width,
      imgheight: $height
    })
  },
  setTipsData: function () {
    var that = this;
    var arr = [];
    var list = ['   微信恢复', '   QQ恢复', '   短信恢复', '   图片恢复', '   联系人恢复', '   通话记录恢复', '   Office文档恢复', '   音视频恢复', '   微信聊天记录清除'];
    var timeArr = []
    for(var i = 0; i < 9; i++){
      var j = parseInt(10 * Math.random());
      j = j < 9 ? j : j-1;
      var time = Math.floor(Math.random() * 1000 / 6)
      var time1 = time % 60
      var date = (time - time1) / 60 + '小时' + time1 + '分'
      arr[i] = { 'mobile': app.getMoble(), 'name': list[j],'time':date}
    }
    return arr;
  },
  buypackage: function (event){
    var that = this
    var isIos
    var system = app.globalData.system
    
    if (system == 'iOS'){
      isIos = 0
    }else{
      isIos = 1
    }
    var index = event.currentTarget.id
    if(app.globalData.auth == 0){
      if (index >= 0) {
        var arr = '?imgUrl=' + that.data.productArr[index].imgUrl + '&title=' + that.data.productArr[index].title + '&isIos=' + isIos
        wx.navigateTo({
          url: '../packageChoose/packageChoose' + arr
        })
      } else {
        var arr = '?imgUrl='  + '&title=数据恢复&isIos=' + isIos + '&checked=2' + '&price=156'
        wx.navigateTo({
          url: '../packageChoose/packageChoose' + arr
        })
      }
    }else{
      wx.showModal({
        title: '提示',
        content: '您已经购买过本产品了，请联系客服进行恢复吧。',
      })
    }
  }
})
