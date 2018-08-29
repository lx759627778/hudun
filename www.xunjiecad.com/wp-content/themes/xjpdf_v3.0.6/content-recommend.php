<section  class="wrapper support-tips">
    <h1 class="title"><i class="i-01"></i>教程推荐<i class="i-02"></i></h1>
</section>
<ul class="wrapper recommend">
    <?php
        $x =0;
        $limit = get_option('posts_per_page');
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts($limit . '&paged=' . $paged .'&category_name=help'.'&showposts=4');
        $wp_query->is_archive = true; $wp_query->is_home = false;
    ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li class="recommend-list">
        <dl>
            <dd class="left"><h1><i><?php echo ++$x;?></i><span> The tutorial</span></h1><hr></dd>
            <dd class="right">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <div class="excerpt"><?php the_excerpt();?></div>
                    <a class="more" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">查看详情 >></a>
                </a>
            </dd>
            <div class="clearfix"></div>
        </dl>
    </li>
    <?php endwhile; else: ?>
    <?php endif; ?>
    <div class="clearfix"></div>
</ul>