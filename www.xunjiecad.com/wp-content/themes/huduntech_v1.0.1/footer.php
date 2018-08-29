    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-item footer-logo">
                    <ul class="footer-item-list">
                        <li><img src="<?php echo mySrc();?>/images/logo/logo_2.png" alt=""></li>
                        <li><img src="<?php echo mySrc();?>/images/logo/logo_3.png" alt=""></li>
                    </ul>
                </div>
                <div class="footer-item about-us">
                    <h2 class="item-title">关于我们</h2>
                    <ul class="footer-item-list">
                        <li>
                            <p>上海互盾信息科技有限公司成立于2013年，是一家专业的软件自主研发企业。依托互联网和大数据优势，以及持续投入以及对用户需求的不断挖掘，公司为超过千万用户提供了强大的数据恢复和办公应用服务，是目前国内数据恢复领域专业内，少数拥有自主核心技术和全国运营团队的企业之一。</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-item site-nav">
                    <h2 class="item-title">网站导航</h2>
                    <?php
                        echo get_nav_menu('footer_menu',array('menu_class'=>'footer-menu footer-item-list','link_before'=>'<span>','link_after'=>'</span>'));
                    ?>
                </div>
                <div class="footer-item friend-link">
                    <h2 class="item-title">友情链接</h2>
                    <ul class="footer-item-list">
                        <?php echo get_my_firendlinks();?>
                    </ul>
                </div>
                <div class="footer-item our-contact">
                    <h2 class="item-title">联系方式</h2>
                    <ul class="footer-item-list">
                        <li><span class="title">办公电话：</span>400-668-5572</li>
                        <li><span class="title">E-mail：</span>support@huduntech.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="site-copyright">
            <div class="container">
                <div class="site-info">
                    <a href="https://218.242.124.22:8082/businessCheck/verifKey.do?showType=extShow&serial=9031000020160319005308000000282799-SAIC_SHOW_310000-4028e4c74c2738a7014c368cd1984acc494&signData=MEQCIBB6VIKP2Q7XY2GXVwYoGn+0T4jS9OMUgiTw5hGGLhusAiAmqwJ5TVFB+9V/4sZ10AN6zogxd08K8DMkjGYCBEUogQ==" target="_blank"><img src="//www.huduntech.com/wp-content/uploads/2017/04/gongshanglogo1.png" width="20px"></a>
                    <a href="https://www.sgs.gov.cn/notice/query/queryEntInfoMain.do?uuid=InRWhRHghcVcbJp69SlKf3gX1xhGaQY7" target="_blank">上海工商</a>
                    <a href="<?php echo getUrl('parent');?>">家长监护</a>
                    <a href="<?php echo getUrl('terms');?>">使用条款</a>
                    <a href="<?php echo getUrl('privacy');?>">隐私协议</a>
                    <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011302003266" target="_blank"><img src="//www.huduntech.com/wp-content/uploads/2017/04/icon-beian.png"/> 沪公网安备 31011302003266号</a>
                    <a href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/toDetail/4028c08b521bcc5001521efca44e02b2" target="_blank"><img src="//www.huduntech.com/wp-content/uploads/2017/04/wenhuajingying.png" width="26px"> 沪网文[2015]0870-250号</a><br>
                </div>
                <p>Copyright ©2013-<?php echo date('Y');?>.All Rights Reserved. <span>互盾科技</span><span>版权所有</span><span>沪ICP备14017499号</span></p>
            </div>

        </div>
    </footer>
    </main>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?fec6567c7868bccdae15a46f52652c0b";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
<?php wp_footer();?>
</body>
</html>