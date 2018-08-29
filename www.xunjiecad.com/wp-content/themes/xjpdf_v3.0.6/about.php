<?php
/**
 * Template Name:关于我们
 */
get_header();
?>
<section class="banner banner-about">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic"></li>
        <li class="right banner-cxt">
            <p><span>上海互盾信息科技有限公司</span><i>ShangHai Hudun Information Technology Co., Ltd</i></p>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section class="wrapper about-intro">
    <h1 class="title">公司简介</h1>
    <div class="wrapper">
        <p>上海互盾信息科技有限公司成立于2013年，先后研发了互盾数据恢复软件、迅捷PDF转换器、互盾苹果恢复大师等产品。上述产品拥有较大用户量，累计日新增装机量10万以上。公司产品以Windows客户端产品为主，坚持以技术为导向，现有多款产品在持续研发中，发展势头良好。</p>
    </div>
</section>
<section class="banner-about-01">
    <ul class="wrapper">
        <h1>企业文化</h1>
        <img src="<?php mySrc();?>/images/banner-about-01.png">
        <p>成功地推出了包括数据恢复软件在内的多种行业软件，获得了数百万用户的支持与信赖。 作为业内领先的软件研发企业，互盾科技坚持以用户需求作为企业生存与发展的立足点。先后研发了顶尖数据恢复软件、迅捷PDF转换器、捷速OCR文字识别软件以及多款应用于安卓、苹果平台的APP。基于用户需求的产品研发，提倡“简单、无忧、智能化”的研发理念，强大的在线技术专家团队，使得产品面市以来，就获得了大量用户的支持，美誉度不断提高。</p>
    </ul>
</section>
<section class="wrapper contact">
    <h1>联系方式</h1>
    <dl class="contact-content">
        <dd>
            <p class="p-01"><i><img src="<?php mySrc();?>/images/icon-013.png"></i><span>上海市宝山区陆翔路111号绿地6号楼310室</span></p>
            <p><i><img src="<?php mySrc();?>/images/icon-014.png"></i><span><a href="<?php myQQLink();?>" target="_blank">在线QQ客服：<?php myQQNum();?></a></span></p>
            <p><i><img src="<?php mySrc();?>/images/icon-015.png"></i><span>客服热线：<?php myQQNum();?></span></p>
            <p><i><img src="<?php mySrc();?>/images/icon-016.png"></i><span>微信号：xjpdf6</span></p>
        </dd>
    </dl>
</section>
<?php
get_footer();