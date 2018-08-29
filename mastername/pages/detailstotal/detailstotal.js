// pages/detailstotal/detailstatal.js
const app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    tabindex:1,
    lastname: "",
    firstname: "",
    score: "",
    names_info:"",
    lastname_info:"",
    shengXiao: "",
    cnEraDay: "",
    shengXiaodata: "",
    sancai_info: "",
    wuxingxiang: "",
    tiange: "",
    renge: "",
    dige: "",
    zongge: "",
    waige: "",
    tiange_info:"",
    renge_info:"",
    dige_info:""
  },
   /**
   *事件处理
   */
  switchtab:function(e){
    var tabindex = e.currentTarget.dataset.index;
    this.setData({
      tabindex: tabindex
    })
  },
  openaddwecht: function () {
    this.addWeChat = this.selectComponent("#addWeChat");
    this.addWeChat.setwechat();
    this.addWeChat.setData({
      ishidden: false
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that=this;
    var firstname = wx.getStorageSync('firstname');
    var lastname = wx.getStorageSync('fromdata').lastname;
    var score = wx.getStorageSync('score');
    var date = wx.getStorageSync('fromdata').date;
    var datearr = date.split("-");
    wx.request({
      url: app.globalData.RequestURI + '/v1/sancai.php?firstname=' + firstname + '&lastname=' + lastname,
      header: {
        'content-type': 'application/json' // 默认值
      },
      success: function (res) {
        var names_info = res.data.data.names_info;
        var lastname_info = res.data.data.lastname_info;
        score = res.data.data.name_score;
        lastname_info["姓氏起源"] = lastname_info["姓氏起源"].replace(/<br \/>/g, '\n');
        for (var i = 0; i < names_info.length;i++){
          names_info[i]["基本解释"] = names_info[i]["基本解释"].replace(/<br>/g, '\n');
          names_info[i]["详细解释"] = names_info[i]["详细解释"].replace(/<br>/g, '\n');
        }
        var sancai_info = res.data.data.sancai_info;
        var wuxingxiang = res.data.data.wuxingxiang;
        var tiange = res.data.data.tiange;
        var renge = res.data.data.renge;
        var dige = res.data.data.dige;
        var zongge = res.data.data.zongge;
        var waige = res.data.data.waige;
        var tiange_info = res.data.data.tiange_info;
        tiange_info["基业"] = tiange_info["基业"].replace(/<br>/g, '');
        var renge_info = res.data.data.renge_info;
        var dige_info = res.data.data.dige_info;
        that.setData({
          lastname: lastname,
          firstname: firstname,
          score: score,
          names_info: names_info,
          lastname_info: lastname_info,
          sancai_info: sancai_info,
          wuxingxiang: wuxingxiang,
          tiange: tiange,
          renge: renge,
          dige: dige,
          zongge: zongge,
          waige: waige,
          tiange_info: tiange_info,
          renge_info: renge_info,
          dige_info: dige_info
        })
      }
    })


    wx.request({
      url: app.globalData.RequestURI + '/v1/suanbz.php?year=' + datearr[0] + '&month=' + datearr[1] + '& day=' + datearr[2],
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        that.setData({
          shengXiao: res.data.data.shengXiao,
          cnEraDay: res.data.data.cnEraDay
        })
        wx.request({
          url: app.globalData.RequestURI + '/v1/yunshi.php?shengxiao=' + res.data.data.shengXiao + '&riganzhi=' + res.data.data.cnEraDay,
          header: {
            'content-type': 'application/json'
          },
          success: function (res) {
            var shengXiaodata = res.data.data;
            shengXiaodata["shengxiaogexing"] = shengXiaodata["shengxiaogexing"].replace(/<br>|<br \/>|<br\/>/gi, '\n');
            // shengXiaodata["xinggefenxi"] = shengXiaodata["xinggefenxi"].replace(/<br>|<br \/>|<br\/>/gi, '\n');
            // shengXiaodata["aiqingfenxi"] = shengXiaodata["aiqingfenxi"].replace(/<br>|<br \/>/gi, '\n');
            // shengXiaodata["shiyifenxi"] = shengXiaodata["shiyifenxi"].replace(/<br>|<br \/>|<br\/>/gi, '\n').replace("font","text");
            // shengXiaodata["caiyunfenxi"] = shengXiaodata["caiyunfenxi"].replace(/<br>|<br \/><br\/>/gi, '\n');
            // shengXiaodata["jiankangfenxi"] = shengXiaodata["jiankangfenxi"].replace(/<br>|<br \/><br\/>/gi, '\n');
            that.setData({
              shengXiaodata: shengXiaodata
            })
          }
        })
      }
    })
  },
})