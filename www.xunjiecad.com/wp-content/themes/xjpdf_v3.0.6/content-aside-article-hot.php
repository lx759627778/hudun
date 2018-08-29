<div class="hero-aside-content">
    <h3 class="article-relate">热门文章推荐<img src="<?php mySrc();?>/images/aside-relate.png" alt=""></h3>
    <div class="article-relate-list">
        <?php
            $args = array(
                'post_status'      => 'publish',
                'caller_get_posts' => 1,
                'orderby'          => 'modified',
                'posts_per_page'   => 5
            );
            $query_posts = new WP_Query();
            $query_posts->query($args);
            while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><em></em><span><?php the_title(); ?></span></a>
            <?php } wp_reset_query();?>
    </div>
</div>