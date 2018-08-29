<?php
/*
Template Name:首页
*/
get_header()?>
<header class="header-wrap header-wrap-index">
    <div class="container">
        <div class="row header">
            <a class="logo" href="/"><img src="<?php echo mySrc(); ?>/images/logo.png"></a>
            <ul class="right inline nav">
                <li class="current"><a href="/">首页<span></span></a></li>
                <li><a href="/products.html">产品中心<span></span></a></li>
                <li><a href="/about.html">关于我们<span></span></a></li>
            </ul>
        </div>
        <ul class="banner-wrapper banner-index-wrapper">
            <li class="row banner banner-index banner-index-01">
                <span class="cxt cxt-01">天道<br>酬勤</span>
                <span class="cxt cxt-02">敢于<br>决策</span>
                <span class="cxt cxt-03">允许<br>犯错</span>
                <span class="cxt cxt-04">马上<br>去做</span>
                <span class="cxt cxt-05">互盾科技</span>
            </li>
            <li class="row banner banner-index banner-index-02">
                <div class="col-5">
                    <h1>简单高效，用户至上</h1>
                    <h3>互盾科技全力打造互联网技术服务品牌</h3>
                </div>
                <div class="col-7 pic"></div>
            </li>
            <li class="row banner banner-index banner-index-03">
                <div class="col-6 pic"></div>
                <div class="col-6">
                    <h2>互盾科技</h2>
                    <h1>优质体验 ● 无忧服务</h1>
                </div>
            </li>
        </ul>
        <dl class="controller">
            <dd></dd>
            <dd></dd>
            <dd></dd>
        </dl>
    </div>
</header>
<main class="main-content">
    <h3 class="text-center block-title">主打产品<br><img src="<?php echo mySrc(); ?>/images/icon-arrow-01.png"></h3>
    <section class="container main-products">
        <ul class="row">
            <li class="col-6">
                <div class="row wrap">
                    <h3 class="text-right">互盾数据恢复软件</h3>
                    <h4 class="row"><span class="right">专业数据恢复软件，全面拯救<br>各类被误删储存设备。</span></h4>
                    <div class="row">
                        <img src="<?php echo mySrc(); ?>/images/pic-index-01.png">
                        <a class="right text-right" href="http://www.huifutz.com/" target="_blank"><img src="<?php echo mySrc(); ?>/images/icon-more.png">了解详情</a>
                    </div>
                </div>
            </li>
            <li class="col-6">
                <div class="row wrap">
                    <h3 class="text-right">互盾苹果恢复大师</h3>
                    <h4 class="row"><span class="right">专业数据恢复软件，有效找回<br>已经删除的微信聊天记录，支<br>持苹果手机。</span></h4>
                    <div class="row">
                        <img src="<?php echo mySrc(); ?>/images/pic-index-03.png">
                        <a class="right text-right" href="http://www.huifudashi.com/" target="_blank"><img src="<?php echo mySrc(); ?>/images/icon-more.png">了解详情</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <h3 class="text-center block-title">选择我们<br><img src="<?php echo mySrc(); ?>/images/icon-arrow-01.png"></h3>
    <section class="container index-slogan">
        <ul class="row text-center">
            <li class="col-3">
                <h3><img src="<?php echo mySrc(); ?>/images/pic-index-05.png"><br>专注专心</h3>
            </li>
            <li class="col-3">
                <h3><img src="<?php echo mySrc(); ?>/images/pic-index-06.png"><br>专业技术</h3>
            </li>
            <li class="col-3">
                <h3><img src="<?php echo mySrc(); ?>/images/pic-index-07.png"><br>安全使用</h3>
            </li>
            <li class="col-3">
                <h3><img src="<?php echo mySrc(); ?>/images/pic-index-08.png"><br>客户服务</h3>
            </li>
        </ul>
    </section>
</main>
<?php
get_footer();