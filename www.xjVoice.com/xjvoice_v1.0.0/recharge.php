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
                    <div class="recharge-type cl-3179ff">
                        <div class="recharge-title">
                            <img src="<?php echo mySrc();?>/images/index/chonzhi-1.png" alt="">
                        </div>
                        <ul class="recharge-list">
                            <li>
                                <h6>12个月</h6>
                                <p>￥188.00</p>
                                <button type="button">立即购买</button>
                            </li>
                            <li>
                                <h6>6个月</h6>
                                <p>￥128.00</p>
                                <button type="button">立即购买</button>
                            </li>
                            <li>
                                <h6>1个月</h6>
                                <p>￥88.00</p>
                                <button type="button">立即购买</button>
                            </li>
                            <li>
                                <h6>5次</h6>
                                <p>￥58.00</p>
                                <button type="button">立即购买</button>
                                <span class="Explain-span">次卡有转换时间限制</span>
                            </li>
                        </ul>
                    </div>
                    <div class="recharge-type cl-12b3a8">
                        <div class="recharge-title">
                            <img src="<?php echo mySrc();?>/images/index/chonzhi-2.png" alt="">
                        </div>
                        <ul class="recharge-list">
                            <li>
                                <h6>12个月</h6>
                                <p>￥198.00</p>
                                <button type="button">立即购买</button>
                            </li>
                            <li>
                                <h6>6个月</h6>
                                <p>￥138.00</p>
                                <button type="button">立即购买</button>
                            </li>
                            <li>
                                <h6>1个月</h6>
                                <p>￥98.00</p>
                                <button type="button">立即购买</button>
                            </li>
                            <li>
                                <h6>5次</h6>
                                <p>￥68.00</p>
                                <button type="button">立即购买</button>
                                <span class="Explain-span">次卡有转换时间限制</span>
                            </li>
                        </ul>
                    </div>
                    <div class="recharge-type cl-f58a78">
                        <div class="recharge-title">
                            <img src="<?php echo mySrc();?>/images/index/chonzhi-3.png" alt="">
                        </div>
                        <ul class="recharge-list">
                            <li>
                                <h6>PLUS</h6>
                                <p>￥1200.00</p>
                                <button type="button">立即购买</button>
                                <span class="Voucher-nub">送100</span>
                            </li>
                            <li>
                                <h6>VIP</h6>
                                <p>￥800.00</p>
                                <button type="button">立即购买</button>
                                <span class="Voucher-nub">送60</span>
                            </li>
                            <li>
                                <h6>大会员</h6>
                                <p>￥500.00</p>
                                <button type="button">立即购买</button>
                                <span class="Voucher-nub">送20</span>
                            </li>
                            <li>
                                <h6>会员</h6>
                                <p>￥200.00</p>
                                <button type="button">立即购买</button>
                                <span class="Voucher-nub">送10</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

        </main>
    </div>

     <!-- 购买弹窗 -->
        <?php get_template_part( 'pop','buy'); ?>

    <?php get_footer(); ?>