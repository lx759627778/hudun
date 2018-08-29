<?php
    $cats = array(
        'problems'
    );
    foreach( $cats as $value ){
        $cat = get_category_by_slug($value);
        $cat_id = $cat->term_id;
        $cat_name = $cat->name;
        $cat_slug = $value;
        $cat_link=get_category_link($cat->term_id);
?>
    <ul class="article-list-aside container_box">
            <h4 class="article-list-aside-title">常见问题</h4>
            <a href="/problems.html" class="more">更多>></a>
        <?php query_posts('&category_name='.$cat_slug.'&showposts=5');?>
        <?php while(have_posts()) : the_post(); ?>
        <li class="item-recovery">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="title">
                <i class="icon"></i>
                <?php the_title(); ?>
            </a>
        </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
<?php }?>