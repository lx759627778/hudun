<?php
/**
 * Template Name: 文字转语音等待转换
 */
get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/audio.css">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="switch-progress">
                <div class="w1200">
                    <ul class="progress-step">
                        <li>
                            <div class="step step-1">
                                <i class="icon-ing"></i>
                                <p>创建任务</p>
                            </div>
                        </li>
                        <li>
                            <div class="step step-3">
                                <i></i>
                                <p>等待转换</p>
                            </div>
                            <div class="step step-4">
                                <i></i>
                                <p>查看结果</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="step-li">
                <div class="w1200">
                    <div class="step-transition">
                        <img src="<?php echo mySrc();?>/images/index/pay-Success.png" alt="">
                        <p class="pay-Success-p">等待转换!</p>
                        <p class="line-up-p">当前排队任务： 199人等待转换</p>
                        <p class="line-up-time">我们会在30分钟转换完成，转换完成之后，将会短信通知到你</p>
                        <div class="transition-tab">
                            <button class="mr-50">转换新音频</button>
                            <button>查看结果</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- .site-main -->
    </div>
    <!-- .content-area -->

    <?php get_footer(); ?>