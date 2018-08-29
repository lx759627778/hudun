<?php
/**
 * Template Name: 网站首页
 */
get_header(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/swiper/swiper.min.css">

    <section class="index-banner">
        <div class="w1080 index-banner-center clearfix">
            <div class="index-banner-text">
                <h6>高效智能压缩软件</h6>
                <p><i></i>可压缩图片、视频以及PDF文档</p>
                <p><i></i>视频压缩时可调整分辨率</p>
                <p><i></i>PDF文档可进行高级压缩</p>
                <p><i></i>使用OCR将压缩后的PDF转换为可编辑文本</p>
                <a href="<?php myDownloadLink();?>" class="dwon-btn mt-30">立即下载<i></i></a>
            </div>
            <div class="index-banner-img">
                <img src="<?php echo mySrc();?>/images/pic_banner.png" alt="">
            </div>
        </div>
    </section>
    <section class="text-img img-left active-dh js-scroll">
        <div class="text-img-center clearfix w1080">
            <div class="img-box leftentry">
                <img src="<?php echo mySrc();?>/images/01_zhen.gif" alt="">
            </div>
            <div class="text-box bg-1">
                <h6 class="ico_tupian rightentry">图片</h6>
                <p class="rightentry1">图片压缩默认压缩为jpg格式<br/>软件可调整图片清晰度来缩小文件大小<br/>可一次性压缩大量文件</p>
                <a href="<?php myDownloadLink();?>" class="dwon-btn mt-30 rightentry2">立即下载<i></i></a>
            </div>
        </div>
    </section>
    <section class="text-img img-right js-scroll1">
        <div class="text-img-center clearfix w1080">
            <div class="text-box bg-2">
                <h6 class="leftentry ico_ship">视频</h6>
                <p class="leftentry1">视频压缩默认压缩为MP4格式<br/>视频压缩设置分辨率即可完成压缩，并保证视频质量<br/>软件可设置视频FPS与BPS来控制视频大小</p>
                <a href="<?php myDownloadLink();?>" class="dwon-btn mt-30 leftentry2">立即下载<i></i></a>
            </div>
            <div class="img-box rightentry">
                <img src="<?php echo mySrc();?>/images/02_zhen.gif" alt="">
            </div>
        </div>
    </section>
    <section class="text-img img-left js-scroll2">
        <div class="text-img-center clearfix w1080">
            <div class="img-box leftentry">
                <img src="<?php echo mySrc();?>/images/03_zhen.gif" alt="">
            </div>
            <div class="text-box bg-3">
                <h6 class="ico_pdf rightentry">PDF</h6>
                <p class="rightentry1">PDF压缩可选择普通压缩或者高级压缩<br/>普通压缩完美保留文件质量<br/>高级压缩可设置清晰度来压缩文件<br/>压缩后文件可使用OCR识别来获取文档内容</p>
                <a href="<?php myDownloadLink();?>" class="dwon-btn mt-30 rightentry2">立即下载<i></i></a>
            </div>
        </div>
    </section>
    <p class="js-src" style="display:none;"><?php echo mySrc();?></p>
    <section class="comment-box">
        <div class="w1080">
            <h6 class="comment-h6">用户见证</h6>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <table class="comment-table">
                            <thead>
                                <tr>
                                    <th class="w240"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-ebf3fa">
                                    <td>
                                        <p class="name icon-1">大猫咪</p>
                                    </td>
                                    <td>
                                        <p class="City">北京</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">“压缩了一些PDF文档，效果还不错”</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.08.14</P>
                                    </td>
                                </tr>
                                <tr class="bg-f5fbff">
                                    <td>
                                        <p class="name  icon-2">JASON</p>
                                    </td>
                                    <td>
                                        <p class="City">上海</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">“一直用迅捷产品，就喜欢这样简单的界面，使用起来很方便”</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.07.02</P>
                                    </td>
                                </tr>
                                <tr class="bg-ebf3fa">
                                    <td>
                                        <p class="name  icon-3">爱吃鱼的猫猫</p>
                                    </td>
                                    <td>
                                        <p class="City">南京</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">“促销活动底价入手mua~”</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.06.23</P>
                                    </td>
                                </tr>
                                <tr class="bg-f5fbff">
                                    <td>
                                        <p class="name  icon-4">Jessica</p>
                                    </td>
                                    <td>
                                        <p class="City">成都</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">”用起来不错，已经安利给周围的小伙伴了”</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.06.19</P>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="swiper-slide">
                        <table class="comment-table">
                            <thead>
                                <tr>
                                    <th class="w180"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-ebf3fa">
                                    <td>
                                        <p class="name icon-5">小枇杷</p>
                                    </td>
                                    <td>
                                        <p class="City">北京</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">友好的操作界面，提供长期升级支持和服务，装机必备</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.05.02</P>
                                    </td>
                                </tr>
                                <tr class="bg-f5fbff">
                                    <td>
                                        <p class="name  icon-6">孟鑫MAX</p>
                                    </td>
                                    <td>
                                        <p class="City">贵州</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">同学推荐的压缩软件，使用起来简单快捷，点赞！！！</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.05.07</P>
                                    </td>
                                </tr>
                                <tr class="bg-ebf3fa">
                                    <td>
                                        <p class="name  icon-7">汤仔仔</p>
                                    </td>
                                    <td>
                                        <p class="City">武汉</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">软件小，功能多，用起来得心应手</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.04.14</P>
                                    </td>
                                </tr>
                                <tr class="bg-f5fbff">
                                    <td>
                                        <p class="name  icon-8">叶子酱</p>
                                    </td>
                                    <td>
                                        <p class="City">深圳</p>
                                    </td>
                                    <td>
                                        <p class="comment-p">好用的压缩软件，速度快，内存小，简直溜溜的</p>
                                    </td>
                                    <td>
                                        <P class="time">2018.04.08</P>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>
    <script type="text/javascript" src="<?php echo mySrc();?>/js/index.js"></script>

    <script src="<?php echo mySrc();?>/swiper/swiper.min.js"></script>
    <script>
        var myswiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 4000, //1秒切换一次
            },
            loop: true,
            speed: 500,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
        });
    </script>
    <!-- .content-area -->

    <?php get_footer(); ?>