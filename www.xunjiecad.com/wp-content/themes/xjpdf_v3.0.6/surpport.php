<?php
/**
 * Template Name:服务中心
 */
get_header();
?>
<?php get_template_part( 'content', 'aside-left' ); ?>
<section class="banner banner-surpport">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic"></li>
        <li class="right banner-cxt"></li>
        <div class="clearfix"></div>
    </ul>
</section>

<article class="wrapper">
    <?php
        $cats = array(
            'help'
        );
        $posts_num = '3';
        foreach( $cats as $value ){
            $x =0;
            $cat = get_category_by_slug($value);
            $cat_id = $cat->term_id;
            $cat_name = $cat->name;
            $cat_slug = $value;
            $cat_link=get_category_link($cat->term_id);
            if($cat_slug=='problems'){
                $posts_num = '4';
            }
        ?>
        <ul class="the-category-list the-category-list-<?php echo $cat_slug; ?>">
            <li class="the-category-name the-category-<?php echo $cat_slug; ?>">
                <a href="<?php geturl('help');?>">
                    <img src="<?php mySrc();?>/images/icon-006.png">
                    <p><?php echo $cat_name; ?></p>
                    <div class="more"><i>查看更多>></i></div>
                </a>
            </li>
            <?php query_posts('&category_name='.$cat_slug.'&showposts='.$posts_num);?>
            <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <li class="category-list-help">
               <div class="item-wrap">
                   <h1 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                   <div class="excerpt"><?php echo mb_substr(get_the_excerpt() , 0 , 63, "utf-8").'...';?></div>
                   <p class="more">
                       <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">更多>></a>
                   </p>
               </div>
            </li>
            <?php endwhile; else:endif; ?>
         </ul>
    <?php } ?>

    <ul class="the-category-list the-category-list-problems">
        <li class="the-category-name the-category-prblems">
            <a href="<?php geturl('problems');?>">
                <img src="<?php mySrc();?>/images/icon-007.png">
                <p>常见问题</p>
                <div class="more"><i>查看更多>></i></div>
            </a>
        </li>
        <li>
            <div class="category-list-problems">
                <?php $x =0;?>
                <?php if (have_posts()) : ?>
                <?php query_posts('category_name=problems&showposts=4'); ?>
                <?php
                    $sticky = get_option('sticky_posts');
                    if($sticky){
                        $args = array(
                            'cat' => 2,
                            'posts_per_page' => 4,
                            'post__in'  => get_option( 'sticky_posts' )
                        );
                    }
                    $sticky_posts = new WP_Query( $args );
                    while ($sticky_posts->have_posts()) : $sticky_posts->the_post(); ?>
                <div class="item-wrap">
                    <dl>
                        <dd class="item-title"><h1><i><?php echo ++$x;?></i><span> question</span></h1></dd>
                        <dd class="item-excerpt">
                            <div title="<?php the_title_attribute(); ?>" rel="bookmark">
                                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="excerpt"><?php echo mb_substr(get_the_excerpt() , 0 , 63, "utf-8").'...';?></div>
                                <a class="more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">更多>></a>
                            </div>
                        </dd>
                    </dl>
                </div>
                <?php endwhile; wp_reset_query();?>
                <?php else : ?>
                <?php endif; ?>
            </div>
        </li>
    </ul>
</article>
<section class="banner-surpport-02">
    <ul class="wrapper">
        <li class="left cxt">
            <h2>迅捷PDF转换器</h2>
            <h1>为您创建轻应用</h1>
            <p>软件具备快速转换、批量转换,高质量识别等功能。</p>
        </li>
        <li class="right pic">
            <img src="<?php mySrc();?>/images/banner-pic-04.png">
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section class="wrapper support-tips surpport-reg-guide">
    <h1 class="title"><i class="i-01"></i>注册购买<i class="i-02"></i></h1>
    <div class="title-02">如何购买迅捷PDF转换器注册码?</div>
    <ul class="wrapper">
        <div class="left cxt">
            <a class="a-01">
                <li><p>点击软件界面上方的“购买”按钮</p></li>
                <li><p>在购买界面中，填写好个人信息，并选择付款方式</p></li>
                <li><p>3分钟内将软件注册码发送给用户，注册成功</p></li>
                <div class="clearfix"></div>
            </a>
            <a>
                <li><h3>STEP 01</h3></li>
                <li><h3>STEP 02</h3></li>
                <li><h3>STEP 03</h3></li>
                <div class="clearfix"></div>
            </a>
        </div>
        <div class="right pic">
            <img src="<?php mySrc();?>/images/end-01.png">
        </div>
        <div class="clearfix"></div>
    </ul>
    <div class="title-02">迅捷PDF转换器注册激活教程</div>
    <ul class="wrapper ul-02">
        <div class="right cxt">
            <a class="a-01">
                <li><p>点击“注册”按钮，成功激活软件</p></li>
                <li><p>在弹出的软件注册窗口中，填写注册码</p></li>
                <li><p>收到注册码后点击注册按钮</p></li>
                <div class="clearfix"></div>
            </a>
            <a>
                <li><h3>STEP 03</h3></li>
                <li><h3>STEP 02</h3></li>
                <li><h3>STEP 01</h3></li>
                <div class="clearfix"></div>
            </a>
        </div>
        <div class="left pic">
            <img src="<?php mySrc();?>/images/end-02.png">
        </div>
        <div class="clearfix"></div>
    </ul>
</section>
<?php
get_template_part( 'content', 'recommend' );
get_footer();