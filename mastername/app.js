//app.js
const updateManager = wx.getUpdateManager()
App({
  onLaunch: function () {

    // 更新提示
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
  globalData: {
    userInfo: null,
    RequestURI:"https://api.99quming.com"
  }
})