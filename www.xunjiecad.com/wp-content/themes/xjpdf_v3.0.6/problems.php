<?php
/**
 * Template Name:常见问题
 */
get_header();
?>
<?php get_template_part( 'content', 'aside-left' ); ?>
<section class="banner banner-surpport banner-problems">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic"></li>
        <li class="right banner-cxt">
            <h1>
                <i>常见问题</i><img src="<?php bloginfo('template_directory'); ?>/images/banner-cxt-box.png">
                <span>Common Problems</span>
            </h1>
            <p>1、成功支付后，多长时间能够收到注册码？应如何激活软件？<br>2、购买一次软件能够使用多长时间？可在几台电脑上使用？<br>3、免费试用版软件和注册版软件有何不同之处？</p>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<?php get_template_part( 'content', 'nav-support' ); ?>
<section class="surpport-cat">
    <div class="surpport-cat-excerpt">
      <ul class="wrapper">
        <?php
            $x =0;
            $limit = get_option('posts_per_page');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts($limit . '&paged=' . $paged .'&category_name=problems'.'&showposts=6');
            $wp_query->is_archive = true; $wp_query->is_home = false;
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <h1><i><?php echo ++$x;?></i><span><?php the_title(); ?></span></h1>
            <div class="excerpt"><?php the_excerpt();?></div>
            <h3>查看详细...</h3>
          </a>
        </li>
        <?php endwhile; else: ?>
        <?php endif; ?>
      </ul>
    </div>
    <div class="page_navi"><?php par_pagenavi(9); ?></div>
</section>
<?php
get_template_part( 'content', 'recommend' );
get_footer();