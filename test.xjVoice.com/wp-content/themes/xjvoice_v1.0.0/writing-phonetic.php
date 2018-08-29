<?php
/**
 * Template Name: 文字转语音
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
                    <div class="words-from">
                        <input class="words-title" type="text" placeholder="请输入标题">
                        <textarea class="words-text" name="" id="" cols="30" rows="12" placeholder="请输入需要转换的内容"></textarea>
                        <div class="voice-selector clearfix">
                            <div class="voice-selector-list">
                                <h6>音色</h6>
                                <label for="yise1"><input type="radio" id="yise1" name="yise">普通男声</label>
                                <label for="yise2"><input type="radio" id="yise2" name="yise">普通女声</label>
                                <label for="yise3"><input type="radio" id="yise3" name="yise">情感男声</label>
                                <label for="yise4"><input type="radio" id="yise4" name="yise">情感女声</label>
                            </div>
                            <div class="fr">
                                <button class="switch-btn" type="button">转换</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- .site-main -->
    </div>
    <!-- .content-area -->

    <?php get_footer(); ?>