<?php
/**
 * Template Name:下载中心
 */
get_header();
?>
<section class="banner banner-download">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic">
            <img src="<?php mySrc();?>/images/banner-pic-02.png">
        </li>
        <li class="right banner-cxt">
            <h1><i>迅捷PDF转换器</i></h1>
            <p>支持office文件之间的格式转换，包括PDF转Word、PDF转PPT、图片转PDF、PDF转HTML等格式。
                <span>
                    <i><s><img src="<?php mySrc();?>/images/icon-right.png"></s>轻松拖拽批量转换</i>
                    <i><s><img src="<?php mySrc();?>/images/icon-right.png"></s>多种文件格式转换</i>
                    <i><s><img src="<?php mySrc();?>/images/icon-right.png"></s>高速转换质量保证</i>
                    <i><s><img src="<?php mySrc();?>/images/icon-right.png"></s>智能识别轻松转换</i>
                </span>
            </p>
            <div class="btn-wrapper">
                <a class="left btn btn-blue"  href="<?php myDownloadLink();?>">软件下载</a>
                <a class="left btn btn-yellow"  href="<?php geturl('buy');?>">立即购买</a>
                <div class="clearfix"></div>
            </div>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section class="introduce">
    <ul class="wrapper">
        <li class="right">
            <h2>产品介绍</h2>
            <h3>Product introduction</h3>
            <p>迅捷PDF转换器是一款功能强大、界面简洁、操作简单的PDF转WORD软件，你只需把PDF文件拖拽到软件界面中，然后单击"转换"即可完成转换，经过不断地优化与升级，目前迅捷PDF转换器已经成功地实现了基于超线程技术的PDF文件批量转换技术，多个PDF文件实现批量一键转换，轻松快捷。</p>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section>
    <ul class="wrapper download-features">
        <li>
            <a>
                <h1><img src="<?php mySrc();?>/images/download-features-01.png"></h1>
                <h2>支持多种格式转化</h2>
                <p>迅捷PDF转换器已经不再仅仅局限于普通的PDF转换Word的功能，全面支持多种文件格式之间的转换，包括Word、Excel、PPT、HTML、TXT，图片等等。</p>
            </a>
        </li>
        <li>
            <a>
                <h1><img src="<?php mySrc();?>/images/download-features-02.png"></h1>
                <h2>转换快速质量保证</h2>
                <p>迅捷PDF转换器使用高效的文件解析和识别技术，对于PDF文件内容和排版以及样式等元素，都能够进行有效地解析和处理，转换的速度和质量得以保障。</p>
            </a>
        </li>
        <li>
            <a>
                <h1><img src="<?php mySrc();?>/images/download-features-03.png"></h1>
                <h2>优质界面极佳体验</h2>
                <p>迅捷PDF转换器是一款界面简单，设计人性化，傻瓜式操作，转换效果好的转换器。就算没有学过电脑基础，也能轻松上手，实现文件高质量的转换效果。</p>
            </a>
        </li>
        <li>
            <a>
                <h1><img src="<?php mySrc();?>/images/download-features-04.png"></h1>
                <h2>轻松拖拽批量转换</h2>
                <p>迅捷PDF转换器不仅支持单个PDF文件的转换，也支持批量PDF文件的转换处理，而且还支持鼠标拖拽文件至工作界面，即刻就能实现一键轻松转换！</p>
            </a>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section class="comment">
    <ul class="wrapper">
        <h2>客户评价</h2><br>
        <li>
            <p class="cxt">迅捷pdf转换器是一款非常给力的pdf转换器软件 ，支持把pdf文档转换为doc；迅捷pdf转换器是一款 非常给力的pdf转换器软件......”<img src="<?php mySrc();?>/images/user-000.png"></p>
            <div class="user-pic"><i class="left"><img src="<?php mySrc();?>/images/user-001.png"></i><s class="left">所在地：广东<br><span>张小姐</span></s><div class="clearfix"></div></div>
        </li>
        <li>
            <p class="cxt">本人从事文职工作多年，一直为格式转换问题头疼不已，自从朋友推荐迅捷PDF转换器之后，发现这款的性能最稳、兼容性最好的，转换出的效果也不错！<img src="<?php mySrc();?>/images/user-000.png"></p>
            <div class="user-pic"><i class="left"><img src="<?php mySrc();?>/images/user-002.png"></i><s class="left">所在地：深圳<br><span>李先生</span></s><div class="clearfix"></div></div>
        </li>
        <li>
            <p class="cxt">以往担心自己收集来的图片不能转换成PDF，但自从使用了迅捷PDF转换器，我都能很快地将JPG转PDF，很给力，值得一赞！<img src="<?php mySrc();?>/images/user-000.png"></p>
            <div class="user-pic"><i class="left"><img src="<?php mySrc();?>/images/user-003.png"></i><s class="left">所在地：北京<br><span>王女士</span></s><div class="clearfix"></div></div>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section class="comment customer-service">
    <ul class="wrapper">
        <h2>售后服务</h2>
        <h3>After-sales service</h3>
        <li><a><img src="<?php mySrc();?>/images/customer-service-001.png">重装系统可继续使用</a></li>
        <li><a><img src="<?php mySrc();?>/images/customer-service-002.png">免费技术支持</a></li>
        <li><a><img src="<?php mySrc();?>/images/customer-service-003.png">一次付费，永久使用</a></li>
        <li><a><img src="<?php mySrc();?>/images/customer-service-004.png">免费更新软件</a></li>
        <li><a><img src="<?php mySrc();?>/images/customer-service-005.png">三台计算机授权</a></li>
        <li><a><img src="<?php mySrc();?>/images/customer-service-006.png">免费协助技术支持</a></li>
        <div class="clearfix"></div>
    </ul>
</section>
<?php
get_footer();