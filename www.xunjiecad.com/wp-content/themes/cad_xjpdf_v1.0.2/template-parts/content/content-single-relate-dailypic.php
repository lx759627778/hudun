<div class="arcitle-list-sticky">
    <div class="list-items">
        <div>
            <h3 class="title"><?php echo $tag_name; ?> 相关的文章：</h3>
            <ul>
                <?php
                    $args = array(
                        'post_type' => 'dailypic',
                        'showposts' => 5,
                        'offset' => 1
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post();?>
                        <li>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php echo '&raquo; ' ?><?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; wp_reset_query();
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="list-items">
        <div>
            <h3 class="title">好文推荐：</h3>
            <ul>
                 <?php
                    query_posts('&showposts=5&orderby=random');
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                 <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                        <?php echo '&raquo; ' ?><?php the_title(); ?>
                    </a>
                </li>
                 <?php endwhile; else:endif;?>
            </ul>
        </div>
    </div>
</div>