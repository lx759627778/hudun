<?php
/**
 * Template name: 迅捷PDF转换器下载页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/dwon.css">
    <main class="main-ctt">
        <section class="converter-banner">
            <div class="converter-banner-center w1200 row">
                <div class="converter-banner-text col-6">
                    <img src="<?php echo mySrc();?>/images/dwon/banner-h.png" alt="">
                    <ul class="text-list row">
                        <li class="col-6">轻松拖曳批量转换</li>
                        <li class="col-6">高速转换质量保证</li>
                        <li class="col-6">多种文件格式转换</li>
                        <li class="col-6">智能识别轻松转换</li>
                        <li class="col-12">版本新增：PDF页面提取、PDF合并</li>
                    </ul>
                    <div class="banner-text-btn clearfix">
                        <div class="dwon-li">
                            <a href="<?php DownloadLink_converter();?>"><span>立即下载</span></a>
                            <p>(V7.9.3.0版本/软件大小30M)</p>
                        </div>
                    </div>
                </div>
                <div class="converter-banner-pic col-6 banner-homepage-top-1">
                    <div class="banner-pic">
                        <img src="<?php echo mySrc();?>/images/dwon/banner_1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="line-Product">
            <div class="line-Product-center w1200">
                <h6>产品介绍</h6>
                <p>讯捷PDF转换器是一款功能强大、界面简洁、操作简单的PDF与WORD、EXCEL、<br/>PPT等多种格式互相任意转换的软件。</p>
                <ul class="converter-Product-list clearfix">
                    <li>
                        <img src="<?php echo mySrc();?>/images/dwon/icon-js1.png" alt="">
                        <div class="converter-Product-text">
                            <h6>多种格式转换</h6>
                            <p>支持WORD、PDF、EXCEL等格式任意转换</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo mySrc();?>/images/dwon/icon-js2.png" alt="">
                        <div class="converter-Product-text">
                            <h6>转换快速质量保障</h6>
                            <p>搭配多核心CPU处理技术快速提高工作效率</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo mySrc();?>/images/dwon/icon-js3.png" alt="">
                        <div class="converter-Product-text">
                            <h6>界面清晰体验舒心</h6>
                            <p>简单便捷的交互与界面设计操作简单舒心体验</p>
                        </div>
                    </li>
                    <li class="no-mr">
                        <img src="<?php echo mySrc();?>/images/dwon/icon-js4.png" alt="">
                        <div class="converter-Product-text">
                            <h6>轻松拖拽批量转换</h6>
                            <p>支持用鼠标拖拽文件至工作界面实现轻松转换</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="line-converter">
            <div class="line-converter-center w1200">
                <h6>产品功能</h6>
                <div class="line-converter-ctt">
                    <div class="converter-function-list">
                        <div class="converter-function-li">
                            <div class="converter-function-title">
                                <h6>PDF转其他文件</h6>
                                <p>[ 功能一 ]</p>
                            </div>
                            <div class="converter-function-link clearfix">
                                <a href="javascript:void(0)">DF文件转Word</a>
                                <a href="javascript:void(0)">PDF文件转图片</a>
                                <a href="javascript:void(0)">PDF文件转Excel</a>
                                <a href="javascript:void(0)">PDF文件转HTML</a>
                                <a href="javascript:void(0)">PDF文件转PPT</a>
                                <a href="javascript:void(0)">PDF文件转TXT</a>
                            </div>
                        </div>
                        <div class="converter-function-li no-mr">
                            <div class="converter-function-title">
                                <h6>其他文件转PDF</h6>
                                <p>[ 功能二 ]</p>
                            </div>
                            <div class="converter-function-link clearfix">
                                <a href="javascript:void(0)">图片转PDF</a>
                                <a href="javascript:void(0)">Word转PDF</a>
                                <a href="javascript:void(0)">Excel 转PDF</a>
                                <a href="javascript:void(0)">PPT转PDF</a>
                                <div class="height-auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="converter-function-list">
                        <div class="converter-function-li">
                            <div class="converter-function-title">
                                <h6>PDF文件操作</h6>
                                <p>[ 功能三 ]</p>
                            </div>
                            <div class="converter-function-link clearfix">
                                <a href="javascript:void(0)" class="bd-cl1">PDF页面提取<i></i></a>
                                <a href="javascript:void(0)" class="bd-cl2">PDF加密<i></i></a>
                                <a href="javascript:void(0)">PDF分割</a>
                                <a href="javascript:void(0)">PDF合并</a>
                                <a href="javascript:void(0)">PDF图片提取</a>
                                <a href="javascript:void(0)">PDF压缩</a>
                                <a href="javascript:void(0)">PDF解除密码</a>
                                <a href="javascript:void(0)">PDF添加水印</a>
                            </div>
                        </div>
                        <div class="converter-function-li no-mr">
                            <div class="converter-function-title">
                                <h6>特色功能</h6>
                                <p>[ 功能四 ]</p>
                            </div>
                            <div class="converter-function-link clearfix">
                                <a href="javascript:void(0)">CAD转PDF</a>
                                <a href="javascript:void(0)">图片转文字(OCR)</a>
                                <a href="javascript:void(0)">CAD转图片</a>
                                <a href="javascript:void(0)">扫描PDF转Word(OCR)</a>
                                <a href="javascript:void(0)">CAJ转Word</a>
                                <a href="javascript:void(0)">PDF翻译</a>
                                <a href="javascript:void(0)">CAJ转PDF</a>
                                <a href="javascript:void(0)">Word翻译</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="converter-ask">
            <div class="converter-ask-center w1200">
                <div class="converter-ask-pd">
                    <div class="converter-ask-ctt">
                        <h6>Q&A</h6>
                        <div class="converter-ask-list">
                            <div class="converter-ask-li border">
                                <h6>Q1：购买软件可以使用多长时间？可以在几台电脑上使用？</h6>
                                <p>A：您好，一份注册码能在3台电脑。</p>
                                <!-- <a href="" class="stye1">了解更多>></a> -->
                            </div>
                            <div class="converter-ask-li">
                                <h6>Q1：迅捷PDF转换器能给我做什么？</h6>
                                <p>A：对于快节奏的办公环境，办公效率更快、更好、更方便。。</p>
                                <!-- <a href="" class="stye2">了解更多>></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="converter-ask-bg"></div>
        </section>
    </main>
    <?php
get_footer();