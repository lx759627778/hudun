<?php
/**
 * Template Name: 我的订单
 */
get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/audio.css">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="order-line">
                <div class=" w1200">
                    <div class="order-list">
                        <table class="step-payment-table no-mt">
                            <thead>
                                <tr>
                                    <th>名称</th>
                                    <th class="text-center w160">类型</th>
                                    <th class="text-center w100">数量</th>
                                    <th class="text-center w160">订单状态</th>
                                    <th class="text-center w100">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">12:00:00</td>
                                    <td class="text-center">转换完成</td>
                                    <td class="text-center"><a class="order-btn" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">1000字</td>
                                    <td class="text-center">转换中</td>
                                    <td class="text-center"><a class="order-btn no-click" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">1000字</td>
                                    <td class="text-center">待支付</td>
                                    <td class="text-center"><a class="order-btn no-pay" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">12:00:00</td>
                                    <td class="text-center">转换完成</td>
                                    <td class="text-center"><a class="order-btn" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">1000字</td>
                                    <td class="text-center">转换中</td>
                                    <td class="text-center"><a class="order-btn no-click" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">1000字</td>
                                    <td class="text-center">待支付</td>
                                    <td class="text-center"><a class="order-btn no-pay" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">12:00:00</td>
                                    <td class="text-center">转换完成</td>
                                    <td class="text-center"><a class="order-btn" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">1000字</td>
                                    <td class="text-center">转换中</td>
                                    <td class="text-center"><a class="order-btn no-click" href="">下载</a></td>
                                </tr>
                                <tr>
                                    <td>英语听力-不知道什么鬼的东西.mp3</td>
                                    <td class="text-center">语音转文字</td>
                                    <td class="text-center">1000字</td>
                                    <td class="text-center">待支付</td>
                                    <td class="text-center"><a class="order-btn no-pay" href="">下载</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="Paging-control">
                            <h6>总共 85 个记录</h6>
                            <?php get_template_part( 'paging'); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
   

    <?php get_footer(); ?>