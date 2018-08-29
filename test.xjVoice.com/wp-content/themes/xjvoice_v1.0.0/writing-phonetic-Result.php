<?php
/**
 * Template Name: 文字转语音结果
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
                    <div class="step-payment">
                        <h6 class="step-payment-nub">订单号：<span>DD20180711181151</span></h6>
                        <table class="step-payment-table">
                            <thead>
                                <tr>
                                    <th>文字名称</th>
                                    <th class="text-center w160">文字字数</th>
                                    <th class="text-center w100">单价</th>
                                    <th class="text-center w100">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西</td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center"><a href="" class="dwon-file-btn"><span>下载</span></a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西</td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center"><a href="" class="dwon-file-btn dwon-ing"><span>25%</span></a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西</td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center"><a href="" class="dwon-file-btn dwon-finish"><span>下载完成 </span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
        <!-- .site-main -->
    </div>
    <!-- .content-area -->

    <?php get_footer(); ?>