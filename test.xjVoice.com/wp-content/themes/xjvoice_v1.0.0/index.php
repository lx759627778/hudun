<?php
/**
 * Template Name: 网站首页
 */
get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/swiper/swiper.min.css">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="swiper-container banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg1">
                        <div class="banner-center w1200">
                            <div class="banner-text text-top">
                                <h6>迅捷云服务，让你工作生活从容应对</h6>
                                <p>解放你的双手</p>
                                <div class="banner-text-btn">
                                    <a href="phonetic-writing">语音转文字</a>
                                    <a href="writing-phonetic">文字转语音</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg2">
                        <div class="banner-center w1200">
                            <div class="banner-text">
                                <h6>云端引擎识别技术</h6>
                                <p>面向广大用户开发语音识别技术，采用的离在线融合技术，识别率达到90%，让您的文字绘“声”绘色</p>
                                <div class="banner-text-btn">
                                    <a href="phonetic-writing">语音转文字</a>
                                    <a href="writing-phonetic">文字转语音</a>
                                </div>
                            </div>
                            <div class="banner-img">
                                <img src="<?php echo mySrc();?>/images/index/banner2-img1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg3">
                        <div class="banner-center w1200">
                            <div class="banner-text">
                                <h6>语音转文字</h6>
                                <p>语音转写文字，高识别率，快转换速度，长时间的语音转化为文字，方便进行拷贝和编辑等后续的工作</p>
                                <div class="banner-text-btn">
                                    <a href="phonetic-writing">立即体验</a>
                                </div>
                            </div>
                            <div class="banner-img">
                                <img src="<?php echo mySrc();?>/images/index/banner3-img1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg4">
                        <div class="banner-center w1200">
                            <div class="banner-text">
                                <h6>文字转语音</h6>
                                <p>高辨识度的语音合成功能，你写我写让您的文字绘“声”绘色；多场景的语音准确地转为文字，企业效率变高并降低人力成本</p>
                                <div class="banner-text-btn">
                                    <a href="writing-phonetic">立即体验</a>
                                </div>
                            </div>
                            <div class="banner-img">
                                <img src="<?php echo mySrc();?>/images/index/banner4-img1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <section class="line-Cross">
                <div class="line-Cross-center w1200">
                    <h6>我为什么选择迅捷语音云服务</h6>
                    <div class="line-Cross-ctt">
                        <ul class="Choice-list">
                            <li class="odd">
                                <div class="icon-1">
                                    <h6>高识别率</h6>
                                    <p>依托迅捷的自有语音技术，将持续语音转换文字，有较好的识别率。</p>
                                </div>
                            </li>
                            <li class="even">
                                <div class="icon-2">
                                    <h6>信息保密</h6>
                                    <p>有信息保密管理体系，录音转文字，文字翻译加密处理，保障用户信息隐私。</p>
                                </div>
                            </li>
                            <li class="odd">
                                <div class="icon-3">
                                    <h6>兼容性高</h6>
                                    <p>迅捷语音云服务，不挑录音质量，音质较差或包含方言口音，都可以转文字。</p>
                                </div>
                            </li>
                            <li class="even">
                                <div class="icon-4">
                                    <h6>领域专精</h6>
                                    <p>十种领域语言模型，文字结果准确，一直专注大数据、智能句法分析和语义分析、深度学习。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="line-Cross bg-f5f6f7">
                <div class="line-Cross-center w1200">
                    <h6>应用场景</h6>
                    <div class="line-Cross-ctt">
                        <ul class="scene-list">
                            <li>
                                <i class="icon-1"></i>
                                <h6>电话录音记录</h6>
                                <p>对企业呼叫中心每日大量通话产生的音频文件进行识别后存储，可降低历史数据存储成本，全量保存历史通话文本资料，进而服务营销挖掘等业务。</p>
                            </li>
                            <li>
                                <i class="icon-2"></i>
                                <h6>会议办公</h6>
                                <p>会议发言记录，主题纪要提取！开会1小时，整理会议3小时的痛苦过程，解决了会议上的问题。</p>
                            </li>
                            <li class="no-mr">
                                <i class="icon-3"></i>
                                <h6>教育培训</h6>
                                <p>课程学习知识回顾，演讲培训内容整理，解决我上课记不牢的问题，上课认认真真听，笔记啥的不需要做。</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <!-- .site-main -->
    </div>
    <script src="<?php echo mySrc();?>/swiper/swiper.min.js"></script>
    <script>
        var myswiper = new Swiper('.banner', {
            autoplay: {
                delay: 4000, //1秒切换一次
            },
            loop: true,
            speed: 500,
            pagination: {
                el: '.swiper-pagination',
                clickable :true
            },
        });
    </script>
    <!-- .content-area -->

    <?php get_footer(); ?>