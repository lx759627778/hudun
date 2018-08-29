// pages/namelist/namelist.js
const app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    lastname:"",
    listdata:"",
    nomore:false
  },
  detailslink:function(e){
    var firstname = e.currentTarget.dataset.name;
    var score = e.currentTarget.dataset.score;
    wx.setStorageSync('firstname', firstname);
    wx.setStorageSync('score', score);
    wx.navigateTo({
      url: '../detailstotal/detailstotal',
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var fromdata = wx.getStorageSync('fromdata');
    console.log(fromdata);
    var _this=this;
    wx.request({
      url: app.globalData.RequestURI + '/v1/names.php?lastname=' + fromdata.lastname + '&gender=' + fromdata.sexid + "&num=15" + "&is_single="+fromdata.Singlepair,
      header: {
        'content-type': 'application/json' // 默认值
      },
      success: function (res) {
        _this.setData({
          listdata:res.data.data,
          lastname: fromdata.lastname
        })
      }
    })
  },
   /**
   * 下拉加载
   */
  onReachBottom: function () {
    var fromdata = wx.getStorageSync('fromdata');
    var that = this;
    // 显示加载图标  
    wx.showLoading({
      title: '玩命加载中',
    })
    wx.request({
      url: app.globalData.RequestURI + '/v1/names.php?lastname=' + fromdata.lastname + '&gender=' + fromdata.sexid + "&num=15" + "&is_single=" + fromdata.Singlepair,
      header: {
        'content-type': 'application/json' // 默认值
      },
      success: function (res) {
        var moment_list = that.data.listdata;
        for (var i = 0; i < res.data.data.length; i++) {
          moment_list.push(res.data.data[i]);
        }
        that.setData({
          listdata: moment_list
        })
        wx.hideLoading();
      }
    })


  },  
})