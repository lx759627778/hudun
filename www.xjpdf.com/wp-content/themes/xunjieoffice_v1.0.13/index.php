<?php
/**
 * Template name: 首页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/index.css">
    <section class="index-banner">
        <div class="swiper-container banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg1">
                    <div class="banner-center w1200">
                        <div class="banner-text">
                            <h6 class="lg1">迅捷PDF转换器</h6>
                            <ul class="banner-list">
                                <li>轻松拖拽批量转换</li>
                                <li>多种文件格式转换</li>
                                <li>高速转换质量保证</li>
                                <li>智能识别轻松转换</li>
                            </ul>
                            <div class="banner-text-btn clearfix">
                                <div class="dwon-li">
                                    <a href="<?php DownloadLink_converter();?>"><span>立即下载</span></a>
                                    <p>(V7.9.3.0版本/软件大小30M)</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo mySrc();?>/images/index/banner_1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg2">
                    <div class="banner-center w1200">
                        <div class="banner-text">
                            <h6 class="lg2">迅捷PDF编辑器</h6>
                            <ul class="banner-list">
                                <li>完整的PDF编辑功能</li>
                                <li>简单的编辑操作方法</li>
                                <li>强大的文档加密管理</li>
                                <li>精准的表单编辑功能</li>
                            </ul>
                            <div class="banner-text-btn clearfix">
                                <div class="dwon-li">
                                    <a href="<?php DownloadLink_editor();?>"><span>立即下载</span></a>
                                    <p>(V1.2版本/软件大小24M)</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo mySrc();?>/images/index/banner_2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg3">
                    <div class="banner-center w1200">
                        <div class="banner-text">
                            <h6 class="lg3">捷速OCR文字识别软件</h6>
                            <ul class="banner-list">
                                <li>精准识别文字信息</li>
                                <li>完美还原文档格式</li>
                                <li>自动解析图文版面</li>
                                <li>极速识别文本内容</li>
                            </ul>
                            <div class="banner-text-btn clearfix">
                                <div class="dwon-li">
                                    <a href="<?php DownloadLink_ocr();?>"><span>立即下载</span></a>
                                    <p>(V5.5版本/软件大小43M)</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo mySrc();?>/images/index/banner_3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg4">
                    <div class="banner-center w1200">
                        <div class="banner-text">
                            <h6 class="lg4">迅捷PDF虚拟打印机</h6>
                            <p>迅捷PDF虚拟打印机是一款操作简单、功能强大的PDF打印机软件可快速将doc、txt、jpg等多种格式文档输出为PDF格式文件</p>
                            <div class="banner-text-btn clearfix">
                                <div class="dwon-li">
                                    <a href="<?php DownloadLink_printer();?>"><span>立即下载</span></a>
                                    <p>(V1.0.0.1版本/软件大小23M)</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo mySrc();?>/images/index/banner_4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg5">
                    <div class="banner-center w1200">
                        <div class="banner-text">
                            <h6 class="lg5">迅捷转换器</h6>
                            <p>一款可将CAJ格式文件转换成Word文档的、功能强大的文件转换软件 支持所有文件格式转换，包括PDF转Word、Excel转PDF、PDF分割</p>
                            <div class="banner-text-btn clearfix">
                                <div class="dwon-li">
                                    <a href="<?php DownloadLink_caj_win();?>" class=""><span>Windows下载</span></a>
                                    <p>(V1.0.1.0版本/软件大小18M)</p>
                                </div>
                                <div class="dwon-li">
                                    <a href="<?php DownloadLink_caj_mac();?>"><span>Mac下载</span></a>
                                    <p>(V1.0.1.0版本/软件大小18M)</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo mySrc();?>/images/index/banner_5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <!--左箭头-->
            <div class="swiper-button-next"></div>
            <!--右箭头-->
        </div>
    </section>

    <section class="index-line">
        <div class="index-line-center w1200">
            <h6>办公系列软件</h6>
            <div class="index-line-ctt">
                <ul class="index-dwon-list clearfix">
                    <li>
                        <div class="bg-lg1">
                            <h6>迅捷PDF转换器</h6>
                            <p>一款支持PDF文档和doc、ppt、图片、txt文档等多种格式之间的转换的软件。</p>
                            <a href="<?php DownloadLink_converter();?>">立即下载</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg-lg2">
                            <h6>迅捷PDF编辑器</h6>
                            <p>一款集成了PDF文本编辑功能，可对<em>PDF</em>进行添加、修改、绘图标注等操作。</p>
                            <a href="<?php DownloadLink_editor();?>">立即下载</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg-lg3">
                            <h6>捷速OCR文字识别软件 </h6>
                            <p>一款高识别率的图像文字识别软件，拥有批处理和高速识别等多种功能。</p>
                            <a href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg-lg4">
                            <h6>迅捷PDF虚拟打印机</h6>
                            <p>一款可快速将doc、txt、jpg等多种格式文档输出为PDF格式文件的软件。</p>
                            <a href="<?php DownloadLink_printer();?>">立即下载</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg-lg5">
                            <h6>迅捷转换器</h6>
                            <p>一款可将CAJ格式文件转换成Word文档的、功能强大的文件转换软件。</p>
                            <a href="<?php DownloadLink_caj_win();?>">立即下载</a>
                        </div>
                    </li>
                    <li>
                        <h6 class="more-dwon">更多软件服务开发中...</h6>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="index-line">
        <div class="index-line-center  w1200">
            <h6>产品服务范围</h6>
            <p>迅捷办公系列软件为您提供多种办公软件，让您的工作得心应手</p>
            <div class="index-line-ctt">
                <ul class="Range-list">
                    <li>
                        <div class="icon-fw1">
                            <h6>企业办公 </h6>
                            <p>支持多种办公操作类软件，可以全覆盖您的日常办公需求</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-fw2">
                            <h6>教学科研</h6>
                            <p>拥有自主的研发中心并掌握核心技术，服务于教研领域</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-fw3">
                            <h6>政府服务</h6>
                            <p>可支持各级政府办公采购，提高政府部门的办公效率</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-fw4">
                            <h6>个人办公</h6>
                            <p>我们每年累计服务近千万用户，致力于打造用户信得过的产品</p>
                        </div>
                    </li>
                    <li class="no-mr">
                        <div class="icon-fw5">
                            <h6>新闻出版</h6>
                            <p>在新闻出版领域，我们可以提供相应配套的软件及服务</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="index-line data-bg">
        <div class="index-line-center  w1200">
            <h6>我们的产品品质</h6>
            <p>拥有自己产品研发中心，产品品质有效把控</p>
            <div class="index-line-ctt">
                <ul class="data-list">
                    <li>
                        <h6>30,0000+</h6>
                        <p>用户的选择</p>
                    </li>
                    <li>
                        <h6>7*24</h6>
                        <p>小时用户服务</p>
                    </li>
                    <li>
                        <h6>365天</h6>
                        <p>在线支持</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 选择我们 -->
        <?php get_template_part( 'choose','us'); ?>

    <?php
get_footer();