<?php
/**
 * Template Name: 充值
 */
get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/index.css">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="recharge-box">
                <div class="w1200">
                    <div class="recharge-type cl-3179ff" data-type="phonetic-writing">
                        <div class="recharge-title">
                            <img src="<?php echo mySrc();?>/images/index/chonzhi-1.png" alt="">
                        </div>
                        <ul class="recharge-list">
                            <li>
                                <h6>12个月</h6>
                                <p>￥188.00</p>
                                <button class="js-pay-btn"  type="button" data-type="vip188m12m" data-price="188">立即购买</button>
                            </li>
                            <li>
                                <h6>6个月</h6>
                                <p>￥128.00</p>
                                <button class="js-pay-btn" type="button" data-type="vip128m6m" data-price="188">立即购买</button>
                            </li>
                            <li>
                                <h6>1个月</h6>
                                <p>￥88.00</p>
                                <button class="js-pay-btn" type="button"  data-type="vip88m1m" data-price="88">立即购买</button>
                            </li>
                        </ul>
                    </div>
                    <div class="recharge-type cl-12b3a8" data-type="writing-phonetic">
                        <div class="recharge-title">
                            <img src="<?php echo mySrc();?>/images/index/chonzhi-2.png" alt="">
                        </div>
                        <ul class="recharge-list">
                            <li>
                                <h6>12个月</h6>
                                <p>￥198.00</p>
                                <button class="js-pay-btn" type="button"   data-type="vip198m12m" data-price="198">立即购买</button>
                            </li>
                            <li>
                                <h6>6个月</h6>
                                <p>￥138.00</p>
                                <button class="js-pay-btn" type="button"   data-type="vip138m6m" data-price="138">立即购买</button>
                            </li>
                            <li>
                                <h6>1个月</h6>
                                <p>￥98.00</p>
                                <button class="js-pay-btn" type="button"   data-type="vip98m1m" data-price="98">立即购买</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

        </main>
    </div>
    <p class="themeUrl" style="display:none;"><?php echo mySrc();?></p>
     <!-- 购买弹窗 -->
        <?php get_template_part( 'pop','buy'); ?>
        <!-- 微信支付弹窗 -->
        <?php get_template_part( 'pop','qr'); ?>
    <script src="<?php echo mySrc();?>/js/pay.js"></script>
    <?php get_footer(); ?>