<?php
/**
 * Template name: 迅捷PDF编辑器下载页       
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/dwon.css">
    <main class="main-ctt">
        <section class="editor-banner">
            <div class="banner-center w1200">
                <div class="banner-text">
                    <h6 class="lg2">强大的PDF编辑功能</h6>
                    <p>软件可编辑pdf文本内容，支持图片<br/>多媒体处理，用户能够根据需求制作个性化PDF</p>
                    <div class="banner-text-btn mt-70 clearfix">
                        <div class="dwon-li">
                            <a href="<?php DownloadLink_editor();?>"><span>立即下载</span></a>
                            <p>(V1.2版本/软件大小24M)</p>
                        </div>
                    </div>
                </div>
                <div class="banner-img">
                    <img src="<?php echo mySrc();?>/images/dwon/banner_2.png" alt="">
                </div>
            </div>
        </section>
        <section class="line-function">
            <div class="line-function-center w1200">
                <ul class="function-list">
                    <li>
                        <img src="<?php echo mySrc();?>/images/dwon/gongneng-1.png" alt="">
                        <div class="function-text">
                            <h6>完整的PDF编辑功能</h6>
                            <p>软件不仅仅可以对PDF文件中的文本内容进行编辑，还可以对图片、多媒体等内容精选处理，用户能够根据需求编辑个性化PDF文档</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo mySrc();?>/images/dwon/gongneng-2.png" alt="">
                        <div class="function-text">
                            <h6>强大的文档加密管理</h6>
                            <p>软件可一键对编辑完成的PDF文档进行加密，也可以对标记的部分PDF文件进行加密，有效防止数据泄露</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo mySrc();?>/images/dwon/gongneng-3.png" alt="">
                        <div class="function-text">
                            <h6>独特的PDF创建功能</h6>
                            <p>出来可以对原有的PDF文档进行编辑之外，迅捷PDF编辑器支持创建一个全新的PDF文件，从头编辑一份完整的PDF文档</p>
                        </div>
                    </li>
                    <li class="no-mr">
                        <img src="<?php echo mySrc();?>/images/dwon/gongneng-4.png" alt="">
                        <div class="function-text">
                            <h6>简单的编辑操作方法</h6>
                            <p>软件界面一目了然，操作简单，任何用户都可以轻松掌握软件，进而对PDF文件精选编辑处理</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="line-Skill">
            <div class="line-Skill-center w1200">
                <h6>必备编辑技巧<i></i></h6>
                <p>迅捷PDF编辑器为PDF文件添加水印教程</p>
                <div class="Skill-text-img text-r">
                    <div class="Skill-img">
                        <img src="<?php echo mySrc();?>/images/dwon/jiqiao-1.jpg" alt="">
                    </div>
                    <div class="Skill-text">
                        <p>下载PDF编辑器，双击打开编辑界面<br/>主界面可查看使用帮助或打开最近编辑的文档</p>
                    </div>
                </div>
                <div class="Skill-text-img text-l">
                    <div class="Skill-text">
                        <p>点击左上角“打开”按钮，选择需要编辑的PDF文件<br/>"编辑"按钮则可以对打开的文档进行编辑操作</p>
                    </div>
                    <div class="Skill-img">
                        <img src="<?php echo mySrc();?>/images/dwon/jiqiao-2.jpg" alt="">
                    </div>
                </div>
                <div class="Skill-text-img text-r">
                    <div class="Skill-img">
                        <img src="<?php echo mySrc();?>/images/dwon/jiqiao-3.jpg" alt="">
                    </div>
                    <div class="Skill-text">
                        <p>“文档”按钮可以对打开的页面进行操作，<br/>包括插入旋转提取删除等<br/>水印的增删也可以从此处操作</p>
                    </div>
                </div>
                <div class="Skill-text-img text-l">
                    <div class="Skill-text">
                        <p>软件功能菜单栏可以根据个人需要进行调整，<br/>快捷键使用可以将鼠标悬停在按钮上进行查看</p>
                    </div>
                    <div class="Skill-img">
                        <img src="<?php echo mySrc();?>/images/dwon/jiqiao-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
get_footer();