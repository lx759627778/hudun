<?php
/**
 * Template name: 捷速OCR文字识别下载页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/dwon.css">
    <main class="main-ctt">
        <section class="editor-banner bg-ocr">
            <div class="banner-center w1200">
                <div class="banner-text">
                    <img src="<?php echo mySrc();?>/images/dwon/banner-h1.png" alt="">
                    <p>软件可编辑pdf文本内容，支持图片<br/>多媒体处理，用户能够根据需求制作个性化PDF</p>
                    <div class="banner-text-btn mt-70 clearfix">
                        <div class="dwon-li">
                            <a href="<?php DownloadLink_ocr();?>"><span>立即下载</span></a>
                            <p>(V5.5版本/软件大小43M)</p>
                        </div>
                    </div>
                </div>
                <div class="banner-img">
                    <img src="<?php echo mySrc();?>/images/dwon/banner_3.png" alt="">
                </div>
            </div>
        </section>
        <section class="ocr-Support">
            <div class="ocr-Support-center w1200">
                <h6>产品支持</h6>
                <div class="ocr-Support-ctt">
                    <ul class="ocr-Support-list">
                        <li class="active">
                            <span class="icon-zc1">精准识别文字</span>
                        </li>
                        <li>
                            <span class="icon-zc2">完美还原文档</span>
                        </li>
                        <li class="no-mr">
                            <span class="icon-zc3">自动解析图文</span>
                        </li>
                        <li>
                            <span class="icon-zc4">极速识别文本</span>
                        </li>
                        <li>
                            <span class="icon-zc5">精准检索纠错</span>
                        </li>
                        <li class="no-mr">
                            <span class="icon-zc6">终生授权使用</span>
                        </li>
                    </ul>
                    <div class="ocr-img-text row active">
                        <div class="col-6 ocr-text">
                            <h6>精准识别文字</h6>
                            <p>软件采用先进的OCR识别技术，高达99%的识别精度，轻松实现文档数字化</p>
                            <a class="dwon-btn" href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                        <div class="col-6 ocr-img">
                            <img src="<?php echo mySrc();?>/images/dwon/ocr-img.png" alt="">
                        </div>
                    </div>
                     <div class="ocr-img-text row">
                        <div class="col-6 ocr-text">
                            <h6>完美还原文档</h6>
                            <p>软件可一键读取文档，完美还原文档的逻辑结构和格式，无需重新录入和排版</p>
                            <a class="dwon-btn" href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                        <div class="col-6 ocr-img">
                            <img src="<?php echo mySrc();?>/images/dwon/ocr-img2.png" alt="">
                        </div>
                    </div>
                     <div class="ocr-img-text row">
                        <div class="col-6 ocr-text">
                            <h6>自动解析图文</h6>
                            <p>软件对图文混排的文档具有自动分析功能，将文字区域划分出来后自动进行识别</p>
                            <a class="dwon-btn" href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                        <div class="col-6 ocr-img">
                            <img src="<?php echo mySrc();?>/images/dwon/ocr-img3.png" alt="">
                        </div>
                    </div>
                     <div class="ocr-img-text row">
                        <div class="col-6 ocr-text">
                            <h6>极速识别文本</h6>
                            <p>软件具备高智能化识别内核，通过智能简化软件使用的操作步骤，实现极速识别</p>
                            <a class="dwon-btn" href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                        <div class="col-6 ocr-img">
                            <img src="<?php echo mySrc();?>/images/dwon/ocr-img4.png" alt="">
                        </div>
                    </div>
                     <div class="ocr-img-text row">
                        <div class="col-6 ocr-text">
                            <h6>精准检索纠错</h6>
                            <p>软件提供更强大的文字识别纠错技术，精准地检测出文档样式、标题等内容化</p>
                            <a class="dwon-btn" href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                        <div class="col-6 ocr-img">
                            <img src="<?php echo mySrc();?>/images/dwon/ocr-img5.png" alt="">
                        </div>
                    </div>
                     <div class="ocr-img-text row">
                        <div class="col-6 ocr-text">
                            <h6>终身授权使用</h6>
                            <p>软件一经下载注册之后，即可进行授权使用，终身免费升级免费维护</p>
                            <a class="dwon-btn" href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                        <div class="col-6 ocr-img">
                            <img src="<?php echo mySrc();?>/images/dwon/ocr-img6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ocr-imgbg">
            <div class="ocr-imgbg-center w1200">
                <h6>随时随地 在线识别</h6>
                <p>软件提供在线识别功能，用户可以在线识别文件<br/>让您能够随时随地完成工作</p>
                <img src="<?php echo mySrc();?>/images/dwon/ocr-img1.png" alt="">
                <a href="<?php DownloadLink_ocr();?>">立即下载</a>
            </div>
        </section>
                <!-- 选择我们 -->
        <?php get_template_part( 'choose','us'); ?>
    </main>
    <?php
get_footer();