<div class="arcitle-list-sticky">
    <div class="list-items">
        <div>
            <?php
                $tag = get_the_tags();
                if ($tag) {
                    $tag = $tag[0];
                    $tag_id   = $tag->term_id;
                    $tag_name = $tag->name;
                    $tag_link = get_category_link($tag->term_id);
                    $args = array(
                        'post_status' => 'publish',
                        'tag_id'       => $tag_id,
                        'post__not_in' => array($post->ID),
                        'showposts'    => 5,
                        'orderby'      => 'modified',
                        'caller_get_posts' => 1
                    );
                    query_posts($args);
                }else{
                    $args=array(
                        'post_status' => 'publish',
                        'post__not_in' => array($post->ID),
                        'showposts'    => 5,
                        'orderby'      => 'modified',
                        'caller_get_posts' => 1
                    );
                    query_posts($args);
                }
                ?>
            <h3 class="title"><?php echo $tag_name; ?> 相关：</h3>
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                update_post_caches($posts);
            ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"> <?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
                <?php getArticlsRelateByCat(5) ?>
            <?php endif; wp_reset_query();?>
        </div>
    </div>
    <div class="list-items">
        <div>
            <h3 class="title">好文推荐：</h3>
            <ul>
                <?php $sticky = get_option('sticky_posts'); rsort( $sticky );
                        $sticky = array_slice( $sticky, 0, 2);query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1));
                    if (have_posts()) :while (have_posts()) : the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</div>