<?php
    $post_tags = wp_get_post_tags($post->ID);
    if ($post_tags) {
        foreach ($post_tags as $tag){
            $tag_list[] .= $tag->term_id;
        }
        $post_tag = $tag_list[ mt_rand(0, count($tag_list) - 1) ];
        $args = array(
            'tag__in'          => array($post_tag),
            'category__not_in' => array(NULL),
            'post__not_in'     => array($post->ID),
            'showposts'        => 6,
            'caller_get_posts' => 1,
            'orderby'          => 'modified'
        );
    query_posts($args);
    if (have_posts()) :
    while (have_posts()) : the_post(); update_post_caches($posts);
?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; else : ?>
<li>暂无相关文章</li>
<?php endif; wp_reset_query(); } ?>