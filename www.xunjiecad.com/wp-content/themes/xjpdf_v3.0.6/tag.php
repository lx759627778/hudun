<?php
get_header();
$tag_id = get_query_var('tag_id');
$tag_link = get_category_link( $tag_id );
$tag_name = single_tag_title( '', false );
$term_meta = get_option( "vianrouge_taxonomy_$tag_id" );
$tax_image = $term_meta['tax_image'] ? $term_meta['tax_image'] : '';
$cat_description = mb_strimwidth(trim(strip_tags(tag_description())),0, 540, "…");
if($cat_description==''){
    $cat_display = '';
}else{
    $cat_display = 'show';
}
?>
<main class="container">
    <section class="row wrapper">
        <div class="nav-bread"><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></div>
        <ul class="category-list-items">
            <li>
                <div class="currrent-tag-title <?php echo $cat_display;?>">
                    <h1><a href="<?php echo $tag_link;?>"><?php echo $tag_name; ?></a></h1>
                    <div>
                        <img src="<?php echo $tax_image;?>">
                    </div>
                    <div>
                        <div class="description-text">
                            <p>
                                <span><?php echo $cat_description; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <ul class="category-list">
                    <?php
                        global $wp_query, $wp_rewrite;
                        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
                        $limit = get_option('posts_per_page');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $tagid =get_queried_object_id() ;
                        $postype=array('','');
                        query_posts('post_type=&order=DESC&showposts=' . $limit=4 . '&paged=' . $paged.'&tag_id='.$tagid);
                        if ( have_posts() ) : while (have_posts() ) : the_post();
                    ?>
                    <li>
                        <h1 class="title">
                            <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute();?>"><?php echo get_the_title();?></a>
                        </h1>
                        <div rel="bookmark" title="<?php the_title_attribute();?>" class="excerpt">
                            <?php the_excerpt();?>
                        </div>
                        <div class="article-tag">相关标签：<?php the_tags('',''); ?></div>
                        <p class="learn-more"><a href="<?php the_permalink() ?>" title="<?php the_title();?>">查看详情</a></p>
                    </li>
                    <?php endwhile;else : endif; ?>
                    <div class="page_navi"><?php par_pagenavi(9); ?></div>
                </ul>
            </li>
            <li>
                <div class="sidebar-post-wrapper">
                    <?php get_template_part( 'content', 'aside-tags' ); ?>
                    <?php get_template_part( 'content', 'aside-new' ); ?>
                    <?php get_template_part( 'content', 'aside-relate' ); ?>
                    <?php get_template_part( 'content', 'sidebar-post' ); ?>
                </div>
            </li>
        </ul>
    </section>
</main>
<?php
get_template_part( 'content', 'aside-left' );
get_footer();