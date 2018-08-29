<?php
/**
 * Template Name: 语音转文字结果页
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
                                <i class="icon-finish"></i>
                                <p>创建任务</p>
                            </div>
                        </li>
                        <li>
                            <div class="step step-3">
                                <i class="icon-finish"></i>
                                <p>等待转换</p>
                            </div>
                            <div class="step step-4">
                                <i class="icon-ing"></i>
                                <p>查看结果</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="step-li">
                <div class="w1200">
                    <div class="step-audio-Result">
                        <h6 class="step-audio-h">音频：雾.mp3</h6>
                        <div class="audio-Result-ctt">
                            <div class="audio-Result-text">
                                <h6>雾</h6>
                                <p>夜将你我呼唤黑色在改变， 无奈地躺进梦里面什么也看不见。为何郁闷的心每一份震颤你听不见，时间一秒一毫，你像光线里的一个白点。我是贴在上面的黑线，却只能沉默，清晨里的薄雾擦过门前转去屋子那边，冷漠地冷漠地夜将你我呼唤黑色。在改变无奈地躺进梦里面什么也看不见，为何郁闷的心每一份震颤你听不见，时间一秒一毫。你像光线里的一个白点，我是贴在上面的黑线，却只能沉默清晨里的薄雾擦过门前转去屋子那边，冷漠地冷漠地。你像光线里的一个白点，我是贴在上面的黑线，却只能沉默。清晨里的薄雾擦过门前转去屋子那边，冷漠地冷漠地。</p>
                                <a href=""><span>下载</span></a>
                            </div>
                            <!-- 音频播放 -->
                           <?php get_template_part( 'audio'); ?>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        </div>

        <!-- 提示弹窗 -->
        <?php get_template_part( 'pop','Prompt'); ?>
        <!-- 订单弹窗 -->
        <?php get_template_part( 'pop','Order'); ?>
        <?php get_footer(); ?>