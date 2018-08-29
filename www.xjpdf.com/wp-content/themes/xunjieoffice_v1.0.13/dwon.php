<?php
/**
 * Template name: 下载首页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/dwon.css">
    <main class="main-ctt">
        <section class="dwon-banner">
            <div class="dwon-banner-center w1200">
                <h6>软件下载专区<span>迅捷办公系列应用软件免费下载试用</span></h6>
            </div>
        </section>
        <section class="dwon-list">
            <div class="dwon-list-center w1200">
                <div class="dwon-type-li">
                    <div class="dwon-li-text  shu-1">
                        <h6>迅捷PDF转换器</h6>
                        <p>一款功能强大、操作简单的PDF转换成word转换器，支持PDF文档和doc、ppt、图片以及txt文档 等多种格式之间的转换。</p>
                        <span>(V7.9.3.0版本/软件大小30M)</span>
                    </div>
                    <div class="dwon-li-btn">
                        <div class="dwon-inline">
                            <a href="<?php DownloadLink_converter();?>">立即下载</a>
                        </div>
                    </div>
                </div>
                <div class="dwon-type-li">
                    <div class="dwon-li-text  shu-2">
                        <h6>迅捷PDF编辑器</h6>
                        <p>一款专业的PDF编辑工具，软件本身集成了大量PDF文本编辑功能，可对PDF文件内容进行添加、修 改、绘图标注等操作。</p>
                        <span>(V1.2版本/软件大小24M)</span>
                    </div>
                    <div class="dwon-li-btn">
                        <div class="dwon-inline">
                            <a href="<?php DownloadLink_editor();?>">立即下载</a>
                        </div>
                    </div>
                </div>
                <div class="dwon-type-li">
                    <div class="dwon-li-text  shu-3">
                        <h6>捷速OCR文字识别软件</h6>
                        <p>一款具备较高识别率的图像文字识别软件，拥有批量处理和高速识别功能；软件支持多国语言识别， 支持多种文件格式。</p>
                        <span>(V5.5版本/软件大小43M)</span>
                    </div>
                    <div class="dwon-li-btn">
                        <div class="dwon-inline">
                            <a href="<?php DownloadLink_ocr();?>">立即下载</a>
                        </div>
                    </div>
                </div>
                <div class="dwon-type-li">
                    <div class="dwon-li-text  shu-4">
                        <h6>迅捷PDF虚拟打印机</h6>
                        <p>一款操作简单、功能强大的PDF打印机软件。软件通过虚拟打印的方式，可快速将doc、txt、jpg等 多种格式文档输出为PDF格式文件。</p>
                        <span>(V1.0.0.1版本/软件大小23M)</span>
                    </div>
                    <div class="dwon-li-btn">
                        <div class="dwon-inline">
                            <a href="<?php DownloadLink_printer();?>">立即下载</a>
                        </div>
                    </div>
                </div>
                <div class="dwon-type-li">
                    <div class="dwon-li-text  shu-5">
                        <h6>迅捷转换器</h6>
                        <p>一款可将CAJ格式文件转换成Word文档的、功能强大的文件转换软件。除了可将CAJ格式文件转换成 Word之外，软件几乎支持所有的文件格式转换。</p>
                        <span>(V1.0.1.0版本/软件大小18M)</span>
                    </div>
                    <div class="dwon-li-btn">
                        <div class="dwon-inline no-line">
                            <a href="<?php DownloadLink_caj_win();?>">Win下载</a>
                            <a href="<?php DownloadLink_caj_mac();?>">Mac下载</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <?php
get_footer();