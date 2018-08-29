<ul class="dailypic_recommend container_box">
    <h4 class="article-list-aside-title">每日一图</h4>
    <a href="/dailypic.html" class="more" orderby="modified">更多>></a>
    <?php
        $args = array(
            'post_type' => 'dailypic',
            'showposts' => $limit,
            'paged'     => $paged,
            'meta_key'  => 'post_views_count',
            'orderby'   => 'meta_value_num',
            'order'     => 'DESC',
            'posts_per_page' => $per_page,
            'showposts' => 7
        );
        $limit = get_option('posts_per_page');
        query_posts($args);
        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?> 
    <li class="post_list">
        <a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'daily_pic_download_link', true ) ); ?>" rel="bookmark" title="<?php the_title(); ?>" target="_blank" class="post-img-btn">
            <?php 
                echo '<img src='.catch_that_image().' class="post-img pic" />';
             ?>
        </a>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="title">
            <h3><?php the_title(); ?></h3>
        </a>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <p class="excerpt"><?php echo mb_strimwidth(get_the_excerpt(), 0, 70, '...'); ?></p>
        </a>
    </li>
    <?php endwhile; else:endif; ?>
</ul>