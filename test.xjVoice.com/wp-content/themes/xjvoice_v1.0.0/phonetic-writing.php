<?php
/**
 * Template Name: 语音转文字
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
                                <i class="icon-ing"></i>
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
                        <img src="<?php echo mySrc();?>/images/index/video.png" alt="">
                        <div class="transition-tab">
                            <!-- <div class="upload-box">
                                <button>选择文件上传</button>
                                <input type="file">
                            </div> -->
                            <!-- 上传文件 -->
                            <?php get_template_part( 'webuploader'); ?>
                            <p class="upload-Audio-prompt">当前仅支持mp3、wav、pcm、m4a、wma格式<br/>单条音频不超过5MB且时长不超过5小时</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="step-li">
                <div class="w1200">
                    <div class="Upload-video-progress">
                        <h6 class="Upload-video-h">上传音频</h6>
                        <div class="Upload-video-list">
                           
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