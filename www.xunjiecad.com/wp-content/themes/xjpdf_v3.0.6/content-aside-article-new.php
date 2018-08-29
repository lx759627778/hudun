<div class="hero-aside-content">
    <h3 class="article-relate">最新文章推荐<img src="<?php mySrc();?>/images/aside-relate.png" alt=""></h3>
    <div class="article-relate-list">
        <?php
            global $post;
            $cats = wp_get_post_categories($post->ID);
            if ($cats) {
                $args = array(
                    'category__in'     => array( $cats[0] ),
                    'post__not_in'     => get_option( 'sticky_posts' ),
                    'showposts'        => 5,
                    'caller_get_posts' => 1,
                    'orderby'          =>'modified'
                );
                query_posts($args);
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); update_post_caches($posts);
        ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><em></em><span><?php the_title(); ?></span></a>
        <?php
                    }
                }else {
                    echo '<li>* 暂无相关文章</li>';
                }
                wp_reset_query();
            }
            else {
                echo '<li>* 暂无相关文章</li>';
            }
        ?>
    </div>
</div>
<a href="<?php myQQLink();?>" target="_blank" class="aside-qq"><img src="<?php mySrc();?>/images/qq.png" alt="">联系客服...</a>