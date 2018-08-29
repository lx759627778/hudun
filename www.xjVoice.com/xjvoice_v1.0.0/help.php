<?php
/**
 * Template Name: 帮助中心
 */
get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/index.css">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="help-line">
                <div class=" w1200">
                    <div class="help-list">
                        <div class="help-li">
                            <h6>1.网站的主要功能是什么？</h6>
                            <p>答：网站主要提供音频转文字及文字转音频。</p>
                        </div>
                        <div class="help-li">
                            <h6>2.网站语音转文字的收费标准是什么？</h6>
                            <p>充值卡会员，使用语音转文字收费标注为：30秒/0.1元单价进行计算月卡会员，在规定时限内不限次的转换。</p>
                        </div>
                        <div class="help-li">
                            <h6>3.文字转语音的收费标准是什么？</h6>
                            <p>答：充值卡会员，使用文字转语音收费标注：20字/0.1元单价进行计算月卡会员，在规定时限内不限次的转换。</p>
                        </div>
                        <div class="help-li">
                            <h6>4.多久能获取转结果？</h6>
                            <p>答：大约需要5分钟；24小时全天候服务。</p>
                        </div>
                        <div class="help-li">
                            <h6>5.网站支持哪些格式的音频转文字？</h6>
                            <p>答：支持的格式有mp3、wav、pcm、m4a、amr、wma。</p>
                        </div>
                        <div class="help-li">
                            <h6>6.语音转文字功能介绍？</h6>
                            <p>答：该产品的主要核心功能是语音转文字，用户完成上传音频，等待机器转写完成，可以对转写结果进行在线编辑，之后一键导出或分享给其他人。</p>
                        </div>
                        <div class="help-li">
                            <h6>7.文字转语音功能介绍？</h6>
                            <p>答：该产品的主要核心功能是文字转语音，用户输入并编辑文本，调节播放格式，创建任务后一键导出或分享语音文件。</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script>
        $(".help-line").css("min-height", $(window).height() - 208);
    </script>

    <?php get_footer(); ?>