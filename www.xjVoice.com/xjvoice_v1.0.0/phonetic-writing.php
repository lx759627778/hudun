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
                    <div class="step-transition">
                        <img src="<?php echo mySrc();?>/images/index/video.png" alt="">
                        <div class="transition-tab">
                            <!-- <div class="upload-box">
                                <button>选择文件上传</button>
                                <input type="file">
                            </div> -->
                            <!-- 提示弹窗 -->
                            <?php get_template_part( 'webuploader'); ?>
                            <p class="upload-Audio-prompt">当前仅支持mp3、wav、pcm、m4a、wma格式<br/>单条音频不超过500MB且时长不超过5小时</p>
                        </div>
                    </div>
            </section>
            <section class="step-li">
                <div class="w1200">
                    <div class="Upload-video-progress">
                        <h6 class="Upload-video-h">上传音频</h6>
                        <div class="Upload-video-list">
                            <!-- <div class="Upload-video-li icon-wma upload-success">
                                <div class="Upload-video-ctt">
                                    <div class="Upload-video-text">
                                        <p>英语听力-不知道什么鬼的东西.mp3</p>
                                        <span>上传成功！</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-scale"></div>
                                    </div>
                                </div>
                                <i class="remove-video"></i>
                            </div>
                            <div class="Upload-video-li icon-wav upload-fail">
                                <div class="Upload-video-ctt">
                                    <div class="Upload-video-text">
                                        <p>英语听力-不知道什么鬼的东西.mp3</p>
                                        <span>上传失败！</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-scale"></div>
                                    </div>
                                </div>
                                <i class="remove-video"></i>
                            </div>
                            <div class="Upload-video-li icon-wma upload-ing">
                                <div class="Upload-video-ctt">
                                    <div class="Upload-video-text">
                                        <p>英语听力-不知道什么鬼的东西.mp3</p>
                                        <span>0.99M（上传中）</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-scale"></div>
                                    </div>
                                </div>
                                <i class="remove-video"></i>
                            </div>
                            <div class="Upload-video-li icon-wav upload-wait">
                                <div class="Upload-video-ctt">
                                    <div class="Upload-video-text">
                                        <p>英语听力-不知道什么鬼的东西.mp3</p>
                                        <span>等待上传</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-scale" style="width:40%;"></div>
                                    </div>
                                </div>
                                <i class="remove-video"></i>
                            </div>
                            <div class="Upload-video-li icon-mp3 upload-wait">
                                <div class="Upload-video-ctt">
                                    <div class="Upload-video-text">
                                        <p>英语听力-不知道什么鬼的东西.mp3</p>
                                        <span>等待上传</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-scale" style="width:10%;"></div>
                                    </div>
                                </div>
                                <i class="remove-video"></i>
                            </div> -->
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
                                    <td>
                                        <p class="video-name">英语听力-不知道什么鬼的东西.mp3
                                            <p>
                                    </td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center">0.35</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>
                                        <p class="video-name">英语听力-不知道什么鬼的东西.mp3
                                            <p>
                                    </td>
                                    <td class="text-center">2000</td>
                                    <td class="text-center">0.35</td>
                                    <td class="text-center">0.35</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>
                                        <p class="video-name">英语听力-不知道什么鬼的东西.mp3
                                            <p>
                                    </td>
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
                            <p>充值卡用户，语音转文字，30秒/0.1元单价进行计算</p>
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