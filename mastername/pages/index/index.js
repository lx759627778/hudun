//index.js
//获取应用实例
const app = getApp()

Page({
  data: {
    placeholder:"必须是汉字，最多俩个字",
    lastfocus:false,
    fromdata:{
      sexid:1,
      Singlepair:0,
      lastname:"",
      date: "",
      nametype:0
    },
    typearr:[
      {
        "title":"经典取名",
        "text": "融合传统文化，考究宝宝三才五格",
        "fontsrc":"../images/font-jin.png"
      },
      {
        "title": "高分取名",
        "text": "贯通前行之路，高分助力宝宝未来",
        "fontsrc": "../images/font-gao.png"
      },
      {
        "title": "诗词取名",
        "text": "蕴含深远诗意，继承古今大家风范",
        "fontsrc": "../images/font-shi.png"
      },
      {
        "title": "英文取名",
        "text": "掌握时代潮流，提前接轨国际时尚",
        "fontsrc": "../images/font-yin.png"
      }
    ],
    index: 0,
    array:[
      3,4,5,6,7
    ],
    index2: 0,
    array2: [
      4, 5, 6, 7,8
    ]

  },
 

  bindPickerChange: function (e) {
    this.setData({
      index: e.detail.value
    })
    if (this.data.index > this.data.index2){
      this.setData({
        index2: e.detail.value
      })
    }
  },
  bindPickerChange1: function (e) {
    this.setData({
      index2: e.detail.value
    })
    if (this.data.index > this.data.index2) {
      this.setData({
        index: e.detail.value
      })
    }
  },
  bindDateChange: function (e) {
    this.setData({
      "fromdata.date": e.detail.value
    })
  },
  bindlastname:function(e){
    if (this.data.fromdata.nametype==3){
      this.setData({
        "fromdata.lastname": e.detail.value.slice(0, 1)
      })
    }else{
      this.setData({
        "fromdata.lastname": e.detail.value.slice(0, 2)
      })
    }
    
  },
  openaddwecht:function(){
    this.addWeChat = this.selectComponent("#addWeChat");
    this.addWeChat.setwechat();
    this.addWeChat.setData({
      ishidden: false
    })
  },
  sexChoice:function(e){
    var sexid = e.currentTarget.dataset.id;
    this.setData({
      "fromdata.sexid":sexid
    })
  },
  singlepairChoice: function (e) {
    var singlepairid = e.currentTarget.dataset.id;
    this.setData({
      "fromdata.Singlepair": singlepairid
    })
  },
  nametypeChoice: function (e) {
    var nametypeid = e.currentTarget.dataset.id;
    this.setData({
      "fromdata.nametype": nametypeid
    })
    if (nametypeid==3){
      this.setData({
        placeholder: "请输入英文姓氏"
      })
    }
  },
  submitfrom: function () {
    if (this.data.fromdata.nametype!=3){
      var name = this.data.fromdata.lastname;
      if (name == "") {
        this.setData({
          "lastfocus": true
        })
        return;
      } else if (name.length > 2) {
        wx.showToast({
          title: '姓氏不能超过两个字',
          icon: 'none',
          duration: 2000
        })
        return false;
      } else if (!checkbjx(name)) {
        wx.showToast({
          title: '未找到该姓氏',
          icon: 'none',
          duration: 2000
        })
        return false;
      }

      wx.setStorageSync('fromdata', this.data.fromdata);
      wx.navigateTo({
        url: "../namelist/namelist"
      })
    }else{
      var ename = this.data.fromdata.lastname;
      if (ename == "") {
        this.setData({
          "lastfocus": true
        })
        return false;
      } else if (!/^[a-zA-Z]*$/g.test(ename)){
        wx.showToast({
          title: '请输入英文姓氏',
          icon: 'none',
          duration: 2000
        })
        return false;
      }
      wx.setStorageSync('fromdata', this.data.fromdata);
      wx.setStorageSync('minlength', this.data.array[this.data.index]);
      wx.setStorageSync('maxlength', this.data.array2[this.data.index2]);
      wx.navigateTo({
        url: "../englishname/englishname"
      })
    }
    
  },
  onLoad: function () {
    var newdate=new Date();
    this.setData({
      "fromdata.date": newdate.getFullYear() + "-" + (newdate.getMonth()+1) + "-" + newdate.getDate()
    })
  },
  getUserInfo: function(e) {
    app.globalData.userInfo = e.detail.userInfo
    this.setData({
      userInfo: e.detail.userInfo,
      hasUserInfo: true
    })
  }
})

//验证百家姓
function checkbjx(name) {
  //js正则表达式  match
  //为什么此时的match方法不对
  if ("赵|钱|孙|李|周|吴|郑|王|冯|陈|楮|卫|蒋|沈|韩|杨|朱|秦|尤|许|何|吕|施|张|孔|曹|严|华|金|魏|陶|姜|戚|谢|邹|喻|柏|水|窦|章|云|苏|潘|葛|奚|范|彭|郎|鲁|韦|昌|马|苗|凤|花|方|俞|任|袁|柳|酆|鲍|史|唐|费|廉|岑|薛|雷|贺|倪|汤|滕|殷|罗|毕|郝|邬|安|常|乐|于|时|傅|皮|卞|齐|康|伍|余|元|卜|顾|孟|平|黄|和|穆|萧|尹|姚|邵|湛|汪|祁|毛|禹|狄|米|贝|明|臧|计|伏|成|戴|谈|宋|茅|庞|熊|纪|舒|屈|项|祝|董|梁|杜|阮|蓝|闽|席|季|麻|强|贾|路|娄|危|江|童|颜|郭|梅|盛|林|刁|锺|徐|丘|骆|高|夏|蔡|田|樊|胡|凌|霍|虞|万|支|柯|昝|管|卢|莫|经|房|裘|缪|干|解|应|宗|丁|宣|贲|邓|郁|单|杭|洪|包|诸|左|石|崔|吉|钮|龚|程|嵇|邢|滑|裴|陆|荣|翁|荀|羊|於|惠|甄|麹|家|封|芮|羿|储|靳|汲|邴|糜|松|井|段|富|巫|乌|焦|巴|弓|牧|隗|山|谷|车|侯|宓|蓬|全|郗|班|仰|秋|仲|伊|宫|宁|仇|栾|暴|甘|斜|厉|戎|祖|武|符|刘|景|詹|束|龙|叶|幸|司|韶|郜|黎|蓟|薄|印|宿|白|怀|蒲|邰|从|鄂|索|咸|籍|赖|卓|蔺|屠|蒙|池|乔|阴|郁|胥|能|苍|双|闻|莘|党|翟|谭|贡|劳|逄|姬|申|扶|堵|冉|宰|郦|雍|郤|璩|桑|桂|濮|牛|寿|通|边|扈|燕|冀|郏|浦|尚|农|温|别|庄|晏|柴|瞿|阎|充|慕|连|茹|习|宦|艾|鱼|容|向|古|易|慎|戈|廖|庾|终|暨|居|衡|步|都|耿|满|弘|匡|国|文|寇|广|禄|阙|东|欧|殳|沃|利|蔚|越|夔|隆|师|巩|厍|聂|晁|勾|敖|融|冷|訾|辛|阚|那|简|饶|空|曾|毋|沙|乜|养|鞠|须|丰|巢|关|蒯|相|查|后|荆|红|游|竺|权|逑|盖|益|桓|公|万俟|司马|上官|欧阳|夏侯|诸葛|闻人|东方|赫连|皇甫|尉迟|公羊|澹台|公冶|宗政|濮阳|淳于|单于|太叔|申屠|公孙|仲孙|轩辕|令狐|锺离|宇文|长孙|慕容|鲜于|闾丘|司徒|司空|丌官|司寇|仉|督|子车|颛孙|端木|巫马|公西|漆雕|乐正|壤驷|公良|拓拔|夹谷|宰父|谷梁|晋|楚|阎|法|汝|鄢|涂|钦|段干|百里|东郭|南门|呼延|归|海|羊舌|微生|岳|帅|缑|亢|况|后|有|琴|梁丘|左丘|东门|西门|商|牟|佘|佴|伯|赏|南宫|墨|哈|谯|笪|年|爱|阳|佟|第五|言|福".search(name) != -1
  ) {
    return true;
  }
  else {
    return false;
  }
}
