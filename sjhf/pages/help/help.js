const app = getApp()
Page({
  data: {
    problem:[
      {
        title:'可恢复哪些数据类型有哪些？',
        excerpt:'目前支持恢复的数据类型有：短信、通讯录、微信、QQ、照片视频、备忘录、通话记录、Office文件等。'
      },
      {
        title: '我该选择哪个恢复项目？',
        excerpt: '点击您想恢复的数据项目，如您需要恢复微信聊天记录，则点击微信恢复即可进入微信'
      },
      {
        title: '各个套餐之间有什么区别？',
        excerpt: '我们根据您手机里数据的重要程度和紧急程度的不同，选择适合自己需求的套餐类型，建议较重要的数据尽快恢复，越早恢复，可恢复的几率越高'
      },
      {
        title: '为什么需要先缴预约费用？',
        excerpt: '因为数据恢复流程需要先由工程师核实确认可恢复的数据后告知用户，再进行数据恢复。数据是无价的，工程师对每一位预约的客户都秉持着认真负责的态度给出有利于用户的分析和判断，进行数据可恢复程度的核实需要花费较多的精力，因此预约项目费用是给予工程师的辛苦费，希望您能理解，我们将会提供完善的服务。'
      },
      {
        title: '如何付款？付款方式有哪些？',
        excerpt: '在您选择项目套餐后以及项目确认继续恢复时会分别进行预约费和项目尾款的支付，目前支持的支付方式有支付宝支付以及微信支付，操作流程和日常使用支付宝、微信支付流程相似。若有不理解之处，欢迎在线咨询平台客服。'
      },
      {
        title: '支付时为什么需要我提供QQ号？',
        excerpt: '工程师在恢复数据时有时需要您的协助，QQ是一个较好用且方便的沟通媒介，希望您能理解。'
      },
      {
        title: '预约费支付后，我何时能和工程师取得联系？',
        excerpt: '订单支付完成后，根据项目套餐的选择，对应时间段内工程师会主动与您取得联系，具体时间段是：工作时间：09：00~18：00，并为您找回丢失的数据，提供贴心的服务，请您耐心等待。'
      },
      {
        title: '平台显示的项目没有我想恢复的数据类型怎么办？',
        excerpt: '您可以通过咨询平台客服提意见、电话联系、QQ等多种方式反馈您的恢复诉求。'
      },
      {
        title: '支付流程是怎么样的呢？',
        excerpt: '选择所需的方案预约服务以获取会员权限，确认恢复方案后，点击“立即支付”，在支付订单界面，选择支付方式，进行支付即可，支付成功后，即可开始使用软件恢复功能。\n注：\n1、购买软件，手机需连接WiFi或开启数据网络。\n2、成功购买软件后，可通过“我的订单”，查看订单详情。\n3、若对软件购买情况有所疑问，可联系客服人员：\n企业QQ：4000076365\n电话号码：13774481470'
      },
      {
        title: '退款流程是怎么样的呢？',
        excerpt: '先在帮助页中点击人工客服，拨打客户中心电话，与客服人员取得联系，并提出退款原因。若工程师审核通过，退还费用；若未通过，我们将给出拒绝缘由'
      }
    ],
    casePost:'',
    show:'null'
  },
  onLoad: function (options) {
    var that = this
    wx.request({
      url: app.globalData.postRequestUrl +'/api/get/articles.php',
      method: 'GET',
      success: function (res){
        console.log(res)
        var arr = res.data
        for (var i = 0; i < arr.length;i++){
          arr[i].thumbnail = 'https://api.shoujihuifu.com' + arr[i].thumbnail
        }
        that.setData({
          casePost: arr
        })
      }
    })
  },
  showExcerpt: function (event){
    var index = event.currentTarget.id
    var show = this.data.show
    if(this.data.show == 'null'){
      this.setData({
        show: index
      })
    } else if (show == index){
      this.setData({
        show: 'null'
      })
    }else{
      this.setData({
        show: index
      })
    }
  },
  toPost: function (event){
    console.log(event)
    var str = '?url=https://api.shoujihuifu.com' + event.currentTarget.dataset.url+'&index=' + event.currentTarget.id 
    console.log(str)
    wx.navigateTo({
      url: '../single/single' + str,
    })
  }
})