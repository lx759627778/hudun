<?php
get_header();
?>
<hr>
<section class="wrapper">
    <div class="hero-post">
        <?php cmp_breadcrumbs(); ?>
        <ul class="article-content">
            <?php
                $current_title="";
                if (have_posts()) : while (have_posts()) : the_post();
            ?>
            <h1><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h1>
            <h6 class="post-update-time">
                <span class="post-time">发布于：<?php the_date('Y-m-d');?></span>
                <span class="post-cat">分类：<?php the_category(', ') ?></span>
                <span class="view-count"><?php post_views('浏览：', '次'); ?></span>
            </h6>
            <div class="post-content"><?php the_content(); ?></div>
            <?php endwhile; else : endif;?>
            <div class="single-pagination">
                <div class="prev"><?php previous_post_link("上一篇: %link","%title",true) ?></div>
                <div class="next"><?php next_post_link("下一篇: %link","%title",true) ?></div>
            </div>
            <div class="article-tag"><?php the_tags('推荐阅读：',''); ?></div>
            <?php get_template_part( 'content', 'single-relate' ); ?>
        </ul>
        <aside class="hero-aside">
            <div class="hero-aside-wrapper">
                <?php get_template_part( 'content', 'aside-tags' ); ?>
                <?php get_template_part( 'content', 'aside-article-hot' ); ?>
                <?php get_template_part( 'content', 'aside-article-new' ); ?>
                <?php get_template_part( 'content', 'aside-add1' ); ?>
            </div>
        </aside>
    </div>
</section>
<?php
get_template_part( 'content', 'aside-left' );
get_footer();