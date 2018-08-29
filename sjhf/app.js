//app.js
const updateManager = wx.getUpdateManager()
var sensors = require('./utils/sensorsdata.min.js');
sensors.registerApp({
  PlatformType: 'miniapp',
  app_name: "小程序_recover数据恢复精灵"
});
App({
  onLaunch: function () {
    var that = this;
    wx.login({
      success: function (res) {
        //console.log(res)
        sensors.track('AppLogin', {
          loginMethod: "微信登录",
          isSuccess: 'success',
          failReason: ''
        });
        wx.request({
          url: that.globalData.requestUrl +'/ver2/miniOpenid/125/2/'+res.code,
          header: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Cookie": "my_cookie=1234"
          },
          success: function(res){
            that.globalData.openid = res.data.responseData.openid;
            var openid = res.data.responseData.openid;
            sensors.setOpenid(openid);
            sensors.init();
            if (res.data.responseData.mobile.length>0){
              wx.request({
                url: that.globalData.requestUrl + '/ver2/checkPayStatus/' + res.data.responseData.mobile + '/125/' + res.data.responseData.openid,
                header: {
                  "Content-Type": "application/x-www-form-urlencoded",
                  "Cookie": "my_cookie=1234"
                },
                success: function (res) {
                  that.globalData.auth = res.data.auth
                }
              })
            }
          }
        })
      }
    });
    wx.getSystemInfo({
      success: function (res) {
        var model = res.model.split('<')[0]
        var system = res.system.split(' ')[0]
        that.globalData.system = system
        that.globalData.model = model
        that.globalData.brand = res.brand
      }
    })
    updateManager.onCheckForUpdate(function(res){
    })
    updateManager.onUpdateReady(function () {
      wx.showModal({
        title: '更新提示',
        content: '已更新至最新版本，请点击确定重新启动。',
        showCancel: false,
        success: function (res) {
          if (res.confirm) {
            updateManager.applyUpdate()
          }
        }
      })

    })
  },
  getMoble: function () {
    var prefixArray = new Array("130", "131", "132", "133", "135", "137", "138", "170", "187", "189");
    var i = parseInt(10 * Math.random());
    var prefix = prefixArray[i] + '****';
    for (var j = 0; j < 4; j++) {
      prefix = prefix + Math.floor(Math.random() * 10);
    }
    return prefix;
  },
  globalData: {
    system:'',
    openid:'',
    requestUrl: 'https://iosdatarecovery.api.huduntech.com',
    postRequestUrl:'https://api.shoujihuifu.com',
    model:'',
    brand:'',
    auth:''
  }
})