<footer class="footer-wrapper">
    <ul class="wrapper footer">
        <li class="li-01">
            <div class="content">
                <h1>关于产品</h1>
                <p>
                    <img src="<?php mySrc();?>/images/logo-footer.png">
                    <span>迅捷PDF转换器是一款功能强大、界面简洁、操作简单的PDF转换成Word或word转换成pdf转换器。软件具备极速转换、批量转换,高质量识别等功能。迅捷PDF转换器提供免费试用版本。</span>
                    <div class="clearfix"></div>
                </p>
            </div>
        </li>
        <li  class="li-02">
            <div class="content">
                <hr>
                <h1>新手指南</h1>
                <a href="<?php the_permalink(42);?>">迅捷PDF转换器注册码购买</a>
                <a href="<?php the_permalink(23);?>">迅捷PDF转换器常见问答</a>
                <a href="<?php the_permalink(32);?>">如何把pdf转换成word文件</a>
                <a href="<?php the_permalink(28);?>">如何把文件转换成Excel文件</a>
                <a href="<?php the_permalink(48);?>">迅捷PDF转换器十大特点</a>
                <a href="<?php the_permalink(26);?>">其他格式文件转换成PDF</a>
                <a href="<?php the_permalink(88);?>">电子书转换成word格式文件</a>
            </div>
        </li>
        <li  class="li-03">
            <div class="content">
                <hr>
                <h1>友情链接</h1>
                <div  class="scroll-wrapper" style="height: 220px;overflow: hidden;">
                    <ul>
                        <?php get_my_firendlinks();?>
                    </ul>
                </div>
            </div>
        </li>
        <li class="li-04">
            <div class="content">
                <hr>
                <h1>联系我们</h1>
                <h1 class="hotline"><span><em>400</em><i>-668-5572</i><strong>中国服务热线</strong><img src="<?php mySrc();?>/images/icon-hotline.png"></span></h1>
                <a href="<?php myQQLink();?>">QQ号：<?php myQQNum();?></a>
                <p>座机号：<?php myTelNum();?></p>
                <p>微信号：xjpdf6</p>
                <p>邮箱：support@huduntech.com</p>
                <dl class="branding">
                    <dd class="left">
                        <a href="<?php myQQLink();?>" class="qq-online" target="_blank"><img src="<?php mySrc();?>/images/pic-qq-online.png"></a>
                        <a><img src="<?php mySrc();?>/images/pic-authentication.png"></a>
                    </dd>
                    <dd class="right"><img src="<?php mySrc();?>/images/xunjiepdf_scan.png" width="114px" height="114px"><p>微信号：xjpdf6</p></dd>
                    <div class="clearfix"></div>
                </dl>
            </div>
        </li>
        <div class="clearfix"></div>
    </ul>
</footer>
<section class="site-information">
    <dl class="wrapper">
        <dd class="left sitemap">
            <?php
                wp_nav_menu(array(
                    'theme_location'  => 'footermenu',
                    'menu'            => 'footer-menu',
                    'container'       => 'nav',
                    'container_class' =>  'footer-navigation',
                    'menu_class'      => 'menu',
                    'fallback_cb'     => 'wp_page_menu',
                    'after'           => '<i>|</i>',
                    'items_wrap'      => '<ul>%3$s</ul>',
                ));
            ?>
            <p class="copyright">Copyright ©2013-<?php echo date('Y');?>.All Rights Reserved.<br>互盾科技 版权所有 沪ICP备14017499号-11</p>
        </dd>
        <dd class="right frienlinks">
            <h3>合作伙伴</h3>
            <div class="scroll-wrapper" >
                <ul><?php get_my_firendlinks();?></ul>
            </div>
        </dd>
        <div class="clearfix"></div>
    </dl>
</section>
<script type="text/javascript">
    $(function(){
        $("a[title='站长统计']").hide();
        $("#nav li a").click(function(){$("#nav li a").removeClass("cur");$(this).addClass("cur");});
        $(".qq").hover(function(){$(".kef_qq").show();}, function(){$(".kef_qq").hide();});
        $(".zx").hover(function(){$(".kef_zx").show();}, function(){$(".kef_zx").hide();});
        $(".lianxi_a").toggle(function(){$(".zcommonqq").show();}, function(){$(".zcommonqq").hide();});
    });
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?88556a4ab0c90a50b10a786536c62de0";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();

    $(function(){
      $('.aside-fix .weixin').mouseenter(function(event) {
        $(this).siblings('.weixin_box').stop().fadeIn(200);
      }).mouseleave(function(event) {
        $(this).siblings('.weixin_box').stop().fadeOut(200);
      });
    })
</script>
<?php if (is_home()) { ?>
    <a id="_pingansec_bottomleft_shiming">
    <iframe style="border: 0px none; z-index: 9999; bottom: 0px; left: 0px; background-color: transparent; position: fixed; display: inline;" bottom="0" border="0" allowtransparency="true" marginheight="0" marginwidth="0" scrolling="no" src="http://si.trustutn.org/website/cert/shiming_bottomleft.jsp?sn=527150129011698660975" id="_pingansec_bottomleft_shiming_iframe" frameborder="0" height="103px" width="120px">
    </iframe>
    <iframe style="border: 0px none; position: fixed; bottom: 18px; left: 80px; z-index: 9999; background-color: transparent; display: none;" bottom="0" border="0" allowtransparency="true" marginheight="0" marginwidth="0" scrolling="no" src="http://si.trustutn.org/website/cert/bottom_pop.jsp?sn=527150129011698660975" id="_pingansec_bottomleft_shiming_pop_iframe" frameborder="0" height="227px" width="254px">
    </iframe></a>
<script src="http://v.trustutn.org/js/cert.js?v=2"></script>
<script type="text/javascript" src="http://si.trustutn.org/certShow?type=111&certType=1&sn=527150129011698660975"></script>
<?php } else {?>
<?php } ?>
<?php wp_footer();?>
</body>
</html>