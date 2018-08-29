<?php
/**
 * Template Name: 购买下载
 */
get_header(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/swiper/swiper.min.css">

    <section class="dwon-banner">
        <div class="w1080 dwon-banner-center">
            <div class="dwon-banner-img">
                <img src="<?php echo mySrc();?>/images/dwon/banner.png" alt="">
            </div>
            <div class="dwon-banner-text">
                <p>加入迅捷压缩VIP</p>
                <p>体验迅捷压缩，感受数字生活</p>
            </div>
        </div>
    </section>
    <section class="dwon-buy">
        <div class="dwon-buy-center w1080">
            <img src="<?php echo mySrc();?>/images/dwon/youhui.png" alt="">
            <h6>¥75元终身授权<span>¥88元</span></h6>
            <div class="dwon-buy-btn">
                <a href="<?php myDownloadLink();?>" class="dwon-link">免费下载</a>
                <a href="javascript:void(0)" class="buy-link js-buy-btn" data-type="vip75m120" data-price="75"  data-paypack="D5987DF6B4472FB6FE4BA911B7E84A51E822B38A76CD1326612C3DBE7BD1B1F8">立即购买</a>
            </div>
        </div>
    </section>
    <section class="Enjoy-box">
        <div class="w1080 Enjoy-center">
            <h6>迅捷压缩尊享</h6>
            <img class="star-level" src="<?php echo mySrc();?>/images/dwon/xingji.png" alt="">
            <div class="Enjoy-list">
                <p><i></i>立即获取VIP特权</p>
                <p><i></i>享受此产品所有功能</p>
                <p class="no-mr"><i></i>强大的客服支持</p>
            </div>
            <div class="Enjoy-img">
                <i class="left"></i>
                <img src="<?php echo mySrc();?>/images/dwon/pic_img1.png" alt="">
                <i class="right"></i>
            </div>
        </div>
    </section>
    <section class="Setmeal-box">
        <div class="w1080 Setmeal-center">
            <h6>选择套餐</h6>
            <div class="Setmeal-list clearfix">
                <div class="Setmeal-li">
                    <div class="Setmeal-pd">
                        <h6>半年授权</h6>
                        <p class="money">¥48元</p>
                        <img src="<?php echo mySrc();?>/images/dwon/type-1.png" alt="">
                        <p class="time">半年内免费更新</p>
                        <p class="information">24小时客服咨询</p>
                        <a href="javascript:void(0)" class="buy-btn js-buy-btn"  data-type="vip48m6" data-price="48"  data-paypack="BBC537C59F1F20EE15404B84062DA2370F7E31841224135E">立即购买</a>
                    </div>
                    <div class="Setmeal-bd"></div>
                </div>
                <div class="Setmeal-li">
                    <div class="Setmeal-pd">
                        <h6>一年授权</h6>
                        <p class="money">¥68元</p>
                        <img src="<?php echo mySrc();?>/images/dwon/type-2.png" alt="">
                        <p class="time">一年内免费更新</p>
                        <p class="information">24小时技术支持服务</p>
                        <a href="javascript:void(0)"  class="buy-btn js-buy-btn"  data-type="vip68m12" data-price="68"  data-paypack="5BC1D717A60C15CA7617BC789132C25161F70CA39DB091DE">立即购买</a>
                    </div>
                    <div class="Setmeal-bd"></div>
                </div>
                <div class="Setmeal-li no-mr">
                    <div class="Setmeal-pd">
                        <h6>永久授权</h6>
                        <p class="money">¥75元<br/><span>¥88元</span></p>
                        <img src="<?php echo mySrc();?>/images/dwon/type-3.png" alt="">
                        <p class="time">终身免费更新</p>
                        <p class="information">24小时技术支持与客服咨询</p>
                        <a href="javascript:void(0)"  class="buy-btn js-buy-btn"  data-type="vip75m120" data-price="75" data-paypack="D5987DF6B4472FB6FE4BA911B7E84A51E822B38A76CD1326612C3DBE7BD1B1F8">立即购买</a>
                    </div>
                    <div class="Setmeal-bd icon-hot"></div>
                </div>
            </div>
        </div>
    </section>
    <input id="price"  type="hidden">
    <input id="vip"  type="hidden">
    <input id="paypack" type="hidden">
    <input id="paytype"  type="hidden">
    <!-- buy弹窗 -->
        <?php get_template_part( 'pop','buy'); ?>
    <!-- 微信支付弹窗 -->
        <?php get_template_part( 'pop','WeChat'); ?>

        <script type="text/javascript" src="<?php mySrc();?>/js/pay.js?666"></script>

    <!-- .content-area -->

    <?php get_footer(); ?>