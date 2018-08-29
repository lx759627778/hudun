<?php
/**
 * Template name: 迅捷转换器下载
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/dwon.css">
    <main class="main-ctt">
        <section class="editor-banner bg-caj">
            <div class="banner-center w1200">
                <div class="banner-text">
                    <img src="<?php echo mySrc();?>/images/dwon/banner-h2.png" alt="">
                    <p>一款可将CAJ格式文件转换成Word文档的、功能强大的文件转换软件</p>
                    <div class="banner-text-btn mt-90 clearfix">
                        <div class="dwon-li">
                            <a href="<?php DownloadLink_caj_win();?>"><span>立即下载</span></a>
                            <p>(V1.0.1.0版本/软件大小18M)</p>
                        </div>
                    </div>
                </div>
                <div class="banner-img">
                    <img src="<?php echo mySrc();?>/images/dwon/banner_5.png" alt="">
                </div>
            </div>
        </section>
        <section class="Printer-tuwen">
            <div class="ocr-Support-center w1200">
                <h6>必备编辑技巧</h6>
                <div class="Printer-img-text row border-bt">
                    <div class="col-6 Printer-img">
                        <img src="<?php echo mySrc();?>/images/dwon/caj-img1.png" alt="">
                    </div>
                    <div class="col-6 Printer-text">
                        <h6>界面清晰指向明显</h6>
                        <p>软件界面清新自然，所有功能摆放清晰，一目了然，<br/>用户可快速找到自己所需的文件转换功能。</p>
                        <div>
                            <a class="dwon-btn" href="<?php DownloadLink_caj_win();?>">Windows下载</a>
                            <a class="dwon-btn" href="<?php DownloadLink_caj_mac();?>">Mac下载</a>
                        </div>
                    </div>
                </div>
                <div class="Printer-img-text row">
                    <div class="col-6 Printer-text">
                        <h6>多种功能格式转换</h6>
                        <p>可将CAJ格式文件转换成Word之外，软件几乎支持所有的文件格式转换，<br/>包括PDF转Word、Excel转PDF、PDF分割等， 可帮助用户轻松实现文档格式转换。</p>
                        <div>
                            <a class="dwon-btn" href="<?php DownloadLink_caj_win();?>">Windows下载</a>
                            <a class="dwon-btn" href="<?php DownloadLink_caj_mac();?>">Mac下载</a>
                        </div>
                    </div>
                    <div class="col-6 Printer-img">
                        <img src="<?php echo mySrc();?>/images/dwon/caj-img2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="caj-dwon">
            <div class="caj-dwon-center w1200">
                <h6>迅捷转换器</h6>
                <p>软件操作流程简单清晰，<br/>用户只需要根据软件提示找到相应的转换功能，即可轻松完成文件之间的格式转换</p>
                <div class="caj-dwon-btn">
                    <div>
                        <a class="dwon-btn" href="<?php DownloadLink_caj_win();?>">Windows下载</a>
                        <p>(V1.0.1.0版本/软件大小18M)</p>
                    </div>
                    <div>
                        <a class="dwon-btn" href="<?php DownloadLink_caj_mac();?>">Mac下载</a>
                        <p>(V1.0.1.0版本/软件大小18M)</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php
get_footer();