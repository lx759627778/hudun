<?php
/**
 * Template Name:使用教程
 */
get_header();
?>
<?php get_template_part( 'content', 'aside-left' ); ?>
<section class="banner banner-help"></section>
<section class="surpport-cat">
    <?php get_template_part( 'content', 'nav-support' ); ?>
    <div class="surpport-cat-excerpt">
      <ul class="wrapper">
        <?php
            $x =0;
            $limit = get_option('posts_per_page');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts($limit . '&paged=' . $paged .'&category_name=help'.'&showposts=6'.'&orderby=date');
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
        <?php endwhile; else: endif;?>
        <div class="clearfix"></div>
      </ul>
    </div>
    <div class="page_navi"><?php par_pagenavi(9); ?></div>
</section>
<?php
get_template_part( 'content', 'recommend' );
get_footer();