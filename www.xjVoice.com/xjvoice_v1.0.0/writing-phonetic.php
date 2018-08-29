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
                            <div class="step step-2">
                                <i class="icon-finish"></i>
                                <p>支付订单</p>
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
                                <label for="yise1"><input type="radio" id="yise1" name="yise">男声</label>
                                <label for="yise2"><input type="radio" id="yise2" name="yise">女声</label>
                                <label for="yise3"><input type="radio" id="yise3" name="yise">童声（男）</label>
                                <label for="yise4"><input type="radio" id="yise4" name="yise">童声（女）</label>
                            </div>
                            <div class="fr">
                                <button class="switch-btn" type="button">转换</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="step-li">
                <div class="w1200">
                    <div class="step-payment">
                        <h6 class="step-payment-nub">订单号：<span>DD20180711181151</span></h6>
                        <table class="step-payment-table">
                            <thead>
                                <tr>
                                    <th class="w100"><label for="quanxuan"><input type="checkbox" id="quanxuan" name="quanxuan">全选</label></th>
                                    <th>文字名称</th>
                                    <th class="text-center w160">文字字数</th>
                                    <th class="text-center w100">单价</th>
                                    <th class="text-center w100">总价</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>英语听力-不知道什么鬼的东西</td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center">0.35</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>英语听力-不知道什么鬼的东西</td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center">0.35</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>英语听力-不知道什么鬼的东西</td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center">0.35</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="Payment-method">
                            <div class="Payment-method-slt">
                                <h6>充值卡</h6>
                                <label for="paytype1"><input type="radio" id="paytype1" name="paytype">余额（12元）</label>
                                <label for="paytype2"><input type="radio" id="paytype2" name="paytype">会员</label>
                            </div>
                            <p>充值卡用户，文字转语音，20字/0.1元单价进行计算</p>
                        </div>
                        <div class="voice-selector clearfix">
                            <div class="fr">
                                <p class="pay-money">本次支付：<span>￥0.35</span></p>
                                <button class="switch-btn" type="button">确认支付</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="step-li">
                <div class="w1200">
                    <div class="step-transition">
                        <img src="<?php echo mySrc();?>/images/index/pay-Success.png" alt="">
                        <p class="pay-Success-p">支付成功!</p>
                        <p class="line-up-p">当前排队任务： 199人等待转换</p>
                        <p class="line-up-time">我们会在30分钟转换完成，转换完成之后，将会短信通知到你</p>
                        <div class="transition-tab">
                            <button class="mr-50">转换新音频</button>
                            <button>查看结果</button>
                        </div>
                    </div>
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