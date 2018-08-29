<ul>
    <?php
        global $post;
        $cats = wp_get_post_categories($post->ID);
        if ($cats) {
            echo '<h3><span>●</span>相关文章推荐</h3>';
            $args = array(
                'category__in' => array( $cats[0] ),
                'post__not_in' => array( $post->ID ),
                'showposts' => 5,
                'orderby'=>'rand',
                'caller_get_posts' => 1
            );
            query_posts($args);
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); update_post_caches($posts);
    ?>
    <li>
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <span><?php the_title(); ?></span></a>
    </li>
    <?php
                }
            }else {
                echo '<li>* 暂无相关文章</li>';
            }
            wp_reset_query();
        }
        else {
                echo '<h3><span>●</span>最新文章推荐</h3>';
            ?>
            <li>

                <?php query_posts('showposts=5&cat=-111'); ?>
                <ul>
                    <?php while (have_posts()) : the_post(); ?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                    <?php endwhile;?>
                 </ul>
            </li>
            <?php
        }
    ?>
</ul>


