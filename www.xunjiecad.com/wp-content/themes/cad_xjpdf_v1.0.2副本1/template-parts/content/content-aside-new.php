<ul class="sidebar-post">
    <h4>最新文章推荐</h4>
    <?php
        $recentPosts =  new WP_Query(array(
            'post__not_in' => get_option('sticky_posts'),
            'showposts'    =>5
        ));
    ?>
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <span><?php the_title(); ?></span>
            </a>
        </li>
    <?php endwhile; wp_reset_query();?>
</ul>
