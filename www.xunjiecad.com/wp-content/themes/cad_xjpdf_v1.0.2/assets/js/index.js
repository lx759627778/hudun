 var slidedata = {
     page: "",
     time: 2000,
     stop: false,
     index: 0,
     imgwidth: $(window).width()
 }

 function automatic() {
     if (slidedata.stop) {
         return false;
     }
     var time = slidedata.time;
     var page = slidedata.page;
     if (slidedata.index <= page) {
         slidedata.index++;

         if (slidedata.index == page) {
             $(".index-slide").animate({ "left": -slidedata.index * slidedata.imgwidth }, 1000, function() {
                 $(".index-slide").css("left", 0);
             });
             slidedata.index = 0;
         } else {
             $(".index-slide").animate({
                 "left": -slidedata.index * slidedata.imgwidth
             }, 1000);
         }
         $(".index-slide>li").eq(slidedata.index).siblings("li").removeClass("active");
         $(".index-slide>li").eq(slidedata.index).addClass("active");
         $(".index-slide-switch>i").eq(slidedata.index).siblings("i").removeClass("active");
         $(".index-slide-switch>i").eq(slidedata.index).addClass("active");
     }
     setTimeout(function() {
         automatic();
     }, time)
 }

 function stopautomatic() {
     slidedata.stop = true;
 }

 function switchslide(index) {
     slidedata.index = index;
     $(".index-slide>li").eq(index).siblings("li").removeClass("active");
     $(".index-slide>li").eq(index).addClass("active");
     $(".index-slide-switch>i").eq(index).siblings("i").removeClass("active");
     $(".index-slide-switch>i").eq(index).addClass("active");
     $(".index-slide").animate({
         "left": -slidedata.index * slidedata.imgwidth
     }, 1000);
 }

 function slideinti(obj) {
     $(".index-slide").append(liclone);
     slidedata.page = obj.page;
     slidedata.time = obj.time;
     automatic();
 }
 $(".index-slide>li").width(slidedata.imgwidth);
 var liclone = $(".index-slide>li").eq(0).clone();


 $(".index-slide-switch>i").on("click", function() {
     var index = $(".index-slide-switch>i").index($(this));
     stopautomatic();
     switchslide(index);
 })
 $(".index-slide").on("mouseover", function() {
     stopautomatic();
 })
 $(".index-slide").on("mouseout", function() {
     slidedata.stop = false;
     automatic();
 })
 slideinti({
     "page": 3,
     time: 3000
 });