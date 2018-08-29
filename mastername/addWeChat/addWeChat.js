// addWeChat/addWeChat.js
Component({
  /**
   * 组件的属性列表
   */
  properties: {

  },

  /**
   * 组件的初始数据
   */
  data: {
    Wechatnumber: "",
    ishidden:true
  },

  /**
   * 组件的方法列表
   */
  methods: {
    setwechat:function(){
      var nubarr = [
        "13701648649", "13391067528", "16602187370"
      ];
      var daynub = DateMinus();
      this.setData({
        Wechatnumber: nubarr[daynub]
      })
    },
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
      this.setData({
        ishidden: true
      })
    },
  }
})


//三天循环
function DateMinus() {
  var sdate = '2018-08-11';
  sdate = new Date(sdate.replace(/-/g, "/"));
  var now = new Date();
  var days = now.getTime() - sdate.getTime();
  var day = parseInt(days / (1000 * 60 * 60 * 24));
  return day % 3;
}
