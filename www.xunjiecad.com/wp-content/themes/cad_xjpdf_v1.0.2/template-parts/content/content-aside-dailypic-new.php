<ul class="dailypic_new dailypic_post container_box">
    <h4 class="article-list-aside-title">最新</h4>
    <span class="more" orderby="modified">更多>></span>
    <?php
        $args = array(
            'post_type' => 'dailypic',
            'showposts' => $limit,
            'paged'     => $paged,
            'orderby'   => 'modified',
            'order'     => 'DESC',
            'posts_per_page' => $per_page,
            'showposts' => 3
        );
        $limit = get_option('posts_per_page');
        query_posts($args);
        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?> 
    <li class="post_list">
            <?php 
                echo '<img src='.catch_that_image().' class="post-img pic" />';
             ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="title">
            <h3><?php the_title(); ?></h3>
        </a>
    </li>
    <?php endwhile; else:endif; ?>
</ul>