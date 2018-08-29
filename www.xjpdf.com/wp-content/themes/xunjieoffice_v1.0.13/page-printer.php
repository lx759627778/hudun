<?php
/**
 * Template name: 迅捷PDF虚拟打印机下载页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/dwon.css">
    <main class="main-ctt">
        <section class="editor-banner bg-Printer">
            <div class="banner-center w1200">
                <div class="banner-text">
                    <h6 class="lg4">迅捷PDF虚拟打印机</h6>
                    <p>迅捷PDF虚拟打印机是一款操作简单、功能强大的PDF打印机软件。</p>
                    <div class="banner-text-btn mt-90 clearfix">
                        <div class="dwon-li">
                            <a href="<?php DownloadLink_printer();?>"><span>立即下载</span></a>
                            <p>(V1.0.0.1版本/软件大小23M)</p>
                        </div>
                    </div>
                </div>
                <div class="banner-img">
                    <img src="<?php echo mySrc();?>/images/dwon/banner_4.png" alt="">
                </div>
            </div>
        </section>
        <section class="Printer-tuwen">
            <div class="ocr-Support-center w1200">
                <div class="Printer-img-text row border-bt">
                    <div class="col-6 Printer-img">
                        <img src="<?php echo mySrc();?>/images/dwon/dayinji-img1.png" alt="">
                    </div>
                    <div class="col-6 Printer-text">
                        <h6>操作简单 提取精确</h6>
                        <p>软件可精准识别PDF文件上的内容，包括文字以及图片部分。<br/>用户只需要设置好打印需求，就可以准确地将文档中的内容提取出来，<br/>成功转换成用户所需的文档格式。</p>
                        <a class="dwon-btn" href="<?php DownloadLink_printer();?>">立即下载</a>
                    </div>
                </div>
                <div class="Printer-img-text row">
                    <div class="col-6 Printer-text">
                        <h6>支持多种格式自定义</h6>
                        <p>软件集成先进的文件转换内核，支持多种文件格式，<br/>包括doc、jpg、excel、ppt等，同时还可输出多种格式文档，<br/>只需要在软件中完成设置，即可轻松实现文档转换。</p>
                        <a class="dwon-btn" href="<?php DownloadLink_printer();?>">立即下载</a>
                    </div>
                    <div class="col-6 Printer-img">
                        <img src="<?php echo mySrc();?>/images/dwon/dayinji-img2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="Printer-imgbg">
            <div class="Printer-imgbg-center w1200">
                <h6>迅捷PDF虚拟打印机</h6>
                <p>全天候技术支持，轻松解决使用难题；现在下载试用，轻松打印出精美的文档。</p>
                <div class="Printer-imgbg-btn">
                    <a href="<?php DownloadLink_printer();?>">立即下载</a>
                    <p>(V1.0.0.1版本/软件大小23M)</p>
                </div>
            </div>
        </section>
        <!-- 选择我们 -->
        <?php get_template_part( 'choose','us'); ?>
    </main>
    <?php
get_footer();