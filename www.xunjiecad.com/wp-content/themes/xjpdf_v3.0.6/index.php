<?php
/**
 * Template Name: 网站首页
 */
get_header();
?>

    <script src="<?php mySrc(); ?>/wap/js/wap.js"></script>
    <div class="swiper-container full-page">
        <link rel="stylesheet" type="text/css" href="<?php mySrc(); ?>/wap/css/base.css">
        <link rel="stylesheet" type="text/css" href="<?php mySrc(); ?>/wap/css/index.css">
        <link rel="stylesheet" type="text/css" href="<?php mySrc(); ?>/wap/css/swiper.min.css">
        <script src="<?php mySrc(); ?>/wap/js/common.js"></script>
        <div class="swiper-wrapper">
            <div class="swiper-slide bg1">
                <div class="header-top">
                    <div>
                        <h6>只为舒适的阅读</h6>
                        <p>尽在迅捷PDF阅读器</p>
                    </div>
                </div>
                <div class="pic-center blowup-1">
                    <img src="<?php mySrc(); ?>/wap/images/page1-1.png" alt="">
                </div>
                <div class="download-btn bg-1">
                    <a href="" class="dwon-link">立即下载</a>
                </div>
                <img class="pic-people1" src="<?php mySrc(); ?>/wap/images/page1-2.png" alt="">
            </div>
            <div class="swiper-slide bg2">
                <div class="header-top">
                    <div>
                        <h6>注释如同在纸上做笔记</h6>
                        <p>尽在迅捷PDF阅读器</p>
                    </div>
                </div>
                <div class="pic-center blowup-2">
                    <img src="<?php mySrc(); ?>/wap/images/page2-1.png" alt="">
                </div>
                <div class="download-btn bg-2">
                    <a href="" class="dwon-link">立即下载</a>
                </div>
                <img class="pic-people2" src="<?php mySrc(); ?>/wap/images/page2-2.png" alt="">
            </div>
            <div class="swiper-slide bg3">
                <div class="header-top">
                    <div>
                        <h6>标记论文精彩之处</h6>
                        <p>尽在迅捷PDF阅读器</p>
                    </div>
                </div>
                <div class="pic-center blowup-3">
                    <img src="<?php mySrc(); ?>/wap/images/page3-1.png" alt="">
                </div>
                <div class="download-btn">
                    <a href="" class="dwon-link">立即下载</a>
                </div>
                <img class="pic-people3" src="<?php mySrc(); ?>/wap/images/page3-2.png" alt="">
            </div>
            <div class="swiper-slide bg4">
                <div class="header-top">
                    <div>
                        <h6>书签喜欢就保存下来</h6>
                        <p>尽在迅捷PDF阅读器</p>
                    </div>
                </div>
                <div class="pic-center blowup-4">
                    <img src="<?php mySrc(); ?>/wap/images/page4-1.png" alt="">
                </div>
                <div class="download-btn bg-4">
                    <a href="" class="dwon-link">立即下载</a>
                </div>
                <img class="pic-people4" src="<?php mySrc(); ?>/wap/images/page4-2.png" alt="">
            </div>
            <div class="swiper-slide bg5">
                <div class="user-rating-bg">
                    <div class="user-rating">
                        <h6>用户评价</h6>
                        <div class="swiper-container user-rating-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="userinfo">
                                        <img src="<?php mySrc(); ?>/wap/images/cam.005.png" alt="">
                                        <div>
                                            <p>Abdy</p>
                                            <p>白领</p>
                                        </div>
                                    </div>
                                    <p class="user-rating-text">上下班的时候，要处理公务，但是携带电脑通勤不方便，迅捷PDF阅读器，能让我随心所欲的查阅PDF文档，进行编辑文档，真心推荐！</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="userinfo">
                                        <img src="<?php mySrc(); ?>/wap/images/cam.006.png" alt="">
                                        <div>
                                            <p>Mune</p>
                                            <p>学生</p>
                                        </div>
                                    </div>
                                    <p class="user-rating-text">迅捷PDF阅读器，对于学生真心好用了！老师讲的讲义，分分钟能查看。还能对知识点进行注释和标记，我期末考试获得学校的奖学金，太感谢迅捷PDF阅读器！</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="userinfo">
                                        <img src="<?php mySrc(); ?>/wap/images/cam.008.png" alt="">
                                        <div>
                                            <p>Apple</p>
                                            <p>审计</p>
                                        </div>
                                    </div>
                                    <p class="user-rating-text">公司内部传递文档就怕被别人修改了，一直用PDF格式 ，但是在手机上没有好的编辑工具，直到我遇到了 迅捷PDF阅读器，分分钟用手机办公，还能添加批注、书签等，太棒了！</p>
                                </div>
                            </div>
                            <div class="swiper-pagination user-rating-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="Common-problem">
                    <h6>常见问题</h6>
                    <ul>
                        <li>
                            <a href="<?php geturl('helpwap')?>?id=1">PDF阅读器主页操作？</a>
                        </li>
                        <li>
                            <a href="<?php geturl('helpwap')?>?id=2">如何设置合适的阅读方式？</a>
                        </li>
                        <li>
                            <a href="<?php geturl('helpwap')?>?id=3">如何进行批注？</a>
                        </li>
                        <li>
                            <a href="<?php geturl('helpwap')?>?id=4">如何进行注释？</a>
                        </li>
                    </ul>
                </div>
                <div class="download-btn">
                    <a href="" class="dwon-link">立即下载</a>
                </div>
            </div>
        </div>
        <script src="<?php mySrc(); ?>/wap/js/index.js"></script>
        <script src="<?php mySrc(); ?>/wap/js/swiper.min.js"></script>
    </div>
    <i class="Arrow-icon"></i>


    <div class="is_pc">
        <div class="slideBox">
            <div class="bd">
                <ul>
                    <li>
                        <section class="banner banner-index">
                            <ul class="wrapper current">
                                <li class="left banner-pic">
                                    <img src="<?php mySrc();?>/images/banner-pic-01.png">
                                </li>
                                <li class="right banner-cxt">
                                    <h1><i>迅捷PDF转换器</i></h1>
                                    <p>一款功能强大、操作简单的PDF转换成word转换器，支持PDF文档和doc、ppt、图片以及txt文档等多种格式之间的转换，是一款非常高效的PDF文件格式转换器。
                                        <span>
                                    <i><s>●</s>轻松拖拽批量转换</i>
                                    <i><s>●</s>多种文件格式转换</i>
                                    <i><s>●</s>高速转换质量保证</i>
                                    <i><s>●</s>智能识别轻松转换</i>
                                </span>
                                    </p>
                                    <div class="btn-wrapper">
                                        <a class="btn btn-yellow" href="<?php myDownloadLink();?>" target="_blank">立即下载<img src="<?php mySrc();?>/images/icon-download-00.png"></a>
                                    </div>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </section>
                    </li>
                </ul>
            </div>
            <!-- <div class="hd">
        <ul><li></li><li></li><li></li></ul>
    </div> -->
        </div>
        <article class="wrapper product-introduce">
            <h1 class="title">产品介绍</h1>
            <blockquote class="summary">迅捷PDF转换器是一款功能强大、界面简洁、操作简单的PDF转换成Word或word转换成pdf的软件。软件具备极速转换、批量转换，高质量识别等功能。</blockquote>
            <ul class="product-introduce-pic">
                <li><i class="i-01"></i>
                    <h3>支持多种格式转换</h3>
                    <p>支持WORD、PDF、EXCEL等格式任意转换</p>
                </li>
                <li><i class="i-02"></i>
                    <h3>转换快速质量保障</h3>
                    <p>搭配多核心CPU处理技术，快速提高工作效率</p>
                </li>
                <li><i class="i-03"></i>
                    <h3>界面清晰体验舒心</h3>
                    <p>简单便捷的交互与界面设计操作简单舒心体验</p>
                </li>
                <li><i class="i-04"></i>
                    <h3>轻松拖拽批量转换</h3>
                    <p>支持用鼠标拖拽文件至工作界面，实现轻松转换</p>
                </li>
                <div class="clearfix"></div>
            </ul>
        </article>
        <section class="advantage">
            <ul class="wrapper ">
                <h1>我们的优势</h1>
                <li>
                    <a>
                        <i><img src="<?php mySrc();?>/images/advantage-01.png"></i>
                        <h3>一经注册终身使用</h3>
                        <p>软件成功注册后，用户即可永久使用软件全部转换功能。</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i><img src="<?php mySrc();?>/images/advantage-02.png"></i>
                        <h3>文档转换成功率高</h3>
                        <p>文档转换不改变原本排版，转换成功率高达99.8%。</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i><img src="<?php mySrc();?>/images/advantage-03.png"></i>
                        <h3>安全转换隐私保护</h3>
                        <p>绿色安全软件，文档转换全程加密，用户隐私0侵犯。</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i><img src="<?php mySrc();?>/images/advantage-04.png"></i>
                        <h3>人工协助全天在线</h3>
                        <p>软件客服人员全天候24小时在线，帮助用户解答转换难题。</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i><img src="<?php mySrc();?>/images/advantage-05.png"></i>
                        <h3>操作简单</h3>
                        <p>软件简化了繁琐的转换过程，为用户提供傻瓜式的一键转换模式。</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i><img src="<?php mySrc();?>/images/advantage-06.png"></i>
                        <h3>免费试用</h3>
                        <p>软件提供试用版本，用户可转换小范围文档查看转换质量。</p>
                    </a>
                </li>
                <div class="clearfix"></div>
            </ul>
        </section>
        <section class="wrapper tutorial">
            <ul>
                <h1 class="title">使用教程</h1>
                <li class="left tutorial-cxt tutorial-cxt-01">
                    <h2>迅捷PDF转换器使用教程</h2>
                    <p>1、下载安装迅捷PDF转换器到电脑中。<br>2、运行软件，然后选择要转换的方式，比如选择PDF转word。<br>3、添加要转换的文件即可开始转换。</p>
                    <dl>
                        <dd class="dd-00 current"><i></i><a>1</a>
                            <p>选择功能</p>
                        </dd>
                        <dd class="dd-00"><i></i><a>2</a>
                            <p>添加文件</p>
                        </dd>
                        <dd class="dd-00"><a>3</a>
                            <p>开始转换</p>
                        </dd>
                    </dl>
                </li>
                <li class="right tutorial-pic tutorial-pic-01">
                    <h1>
                        <a class="current">1、选择转换功能</a>
                        <a>2、添加文件</a>
                        <a>3、开始转换</a>
                    </h1>
                    <div class="current pic div-01"></div>
                    <div class="pic div-02"></div>
                    <div class="pic div-03"></div>
                    <a class="more" href="<?php geturl('help')?>">了解更多 >></a>
                </li>
                <div class="clearfix"></div>
            </ul>
        </section>
        <section class="problems">
            <h1>Q&A</h1>
            <ul class="wrapper">
                <li class="left">
                    <h2>Q：购买软件可以使用多长时间？可在几台电脑上使用</h2>
                    <p><em>A：</em>您好，一份注册码能在3台电脑上永久……</p>
                    <div></div>
                    <a href="<?php geturl('problems')?>" class="more">了解更多 》</a>
                </li>
                <li class="right">
                    <hr>
                    <h2>Q：迅捷PDF转换器能给我做什么</h2>
                    <p><em>A：</em>刚从校园走出社会，对于快节奏的办公环境，难免会觉得有些吃力。在起步阶段力……</p>
                    <div></div>
                    <a href="<?php geturl('problems')?>" class="more">了解更多 》</a>
                </li>
                <div class="clearfix"></div>
            </ul>
        </section>
        <div class="wrapper">
            <h1 class="text-center title-feature">迅捷PDF转换器相关转换应用</h1>
            <ul class="hero-index-items">
                <li>
                    <div>
                        <img src="<?php mySrc(); ?>/images/hero-index-feature-01.png" alt="">
                        <h4>多种格式轻松转换</h4>
                        <p>支持Word、PDF、Excel、电子书等多种格式文档任意转换。</p>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="<?php mySrc(); ?>/images/hero-index-feature-02.png" alt="">
                        <h4>多种格式轻松转换</h4>
                        <p>支持将转换文件拖曳到工作界面，实现一键轻松转换。</p>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="<?php mySrc(); ?>/images/hero-index-feature-03.png" alt="">
                        <h4>多种格式轻松转换</h4>
                        <p>软件具备高效内核，轻松实现复杂内容的转换。</p>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="<?php mySrc(); ?>/images/hero-index-feature-04.png" alt="">
                        <h4>多种格式轻松转换</h4>
                        <p>智能识别出用户需转换的文档格式，支持转换加密后的PDF文件。</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="wrapper">
            <h1 class="text-center title-feature">必备转换技巧</h1>
            <h4 class="text-center text-primary">PDF转换成word文件方法教程：</h4>
            <div class="text-center hero-index-step">
                <div>
                    <img src="<?php mySrc(); ?>/images/hero-index-step-item-001.png" alt="">
                    <p>下载软件“双击打开”</p>
                </div>
                <div>
                    <img src="<?php mySrc(); ?>/images/hero-index-step-item-002.png" alt="">
                    <p>点击左侧“文件转Word”</p>
                </div>
                <div>
                    <img src="<?php mySrc(); ?>/images/hero-index-step-item-003.png" alt="">
                    <p>点击“添加文件”，选择转换的pdf文档。</p>
                </div>
                <div>
                    <img src="<?php mySrc(); ?>/images/hero-index-step-item-004.png" alt="">
                    <p>点击“浏览”按钮，为文档选择一个存储路径。</p>
                </div>
                <div>
                    <img src="<?php mySrc(); ?>/images/hero-index-step-item-005.png" alt="">
                    <p>点击“开始转换”， 进入格式转换状态。</p>
                </div>
            </div>
        </div>
        <section class="wrapper">
            <ul class="index-hot-list-wrapper">
                <h3 class="text-24px text-center">实用软件知识</h3>
                <?php
            $limit = get_option('posts_per_page');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts($limit . '&paged=' . $paged .'&category_name=library'.'&showposts=6&orderby=modified');
            $wp_query->is_archive = true;
            $wp_query->is_home = false;
        ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <li>
                        <div class="index-hot-list">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                <span>【知识库】</span><span><?php the_title(); ?></span>
                            </a>
                        </div>
                    </li>
                    <?php endwhile; else: endif;?>
            </ul>
            <ul class="index-hot-list-wrapper">
                <h3 class="text-24px text-center">热门文章推荐</h3>
                <?php
            $args = array(
                'post_status' => 'publish',
                'caller_get_posts' => 1,
                'orderby' => 'modified',
                'posts_per_page' => 10
            );
            $query_posts = new WP_Query();
            $query_posts->query($args);
            while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
                    <li>
                        <div class="index-hot-list">
                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><span>【热文推荐】</span><span><?php the_title(); ?></span></a>
                        </div>
                    </li>
                    <?php } wp_reset_query();?>
            </ul>
        </section>
        <script type="text/javascript" src="<?php mySrc();?>/js/slider.js"></script>
        <script type="text/javascript">
            $(".slideBox").slide({
                mainCell: ".bd > ul",
                autoPlay: true
            });
        </script>
        
        </div>
<?php
get_footer();