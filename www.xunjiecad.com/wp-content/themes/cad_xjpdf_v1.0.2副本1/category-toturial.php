<?php
get_header();
$tag_id = get_query_var('cat');
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
<?php get_template_part('template-parts/content/content','banner-help'); ?>

<main class="site-main sideber-at-right">
	<section class="content clearfix">
        <div class="main-content">
            <?php get_template_part('template-parts/content/content','main-tags'); ?>
            <div class="l-content">
                <ul class="cat-list help" id="itemContainer">
                    <?php
                        global $wp_query;
						$cat_ID = get_query_var('cat');
					    $x =1;
					    $limit = get_option('posts_per_page');
					    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					    query_posts($limit . '&paged=' . $paged .'&cat='.$cat_ID);
					    $wp_query->is_archive = true;
					    $wp_query->is_home = false;
					    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    ?> 

                        <li class="post-list">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="container">
                                <div class="post-img-btn">
                                    <?php 
                                        echo '<img src='.catch_that_image().' class="post-img pic" />';
                                     ?>
                                </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p class="excerpt"><?php echo mb_strimwidth(get_the_excerpt(), 0, 90, '...'); ?></p>
                                <span class="more">查看详情</span>
                            </a>
                        </li>
                    <?php endwhile; else:endif; ?>
                </ul>
                <p class="post-count5 post-counts"><?php echo get_category_by_slug('toturial')->count; ?></p>
                <div class="M-box5 M-box"></div>
            </div>
        </div>

        <?php get_sidebar() ?>
	</section>
</main>
<script type="text/javascript">
    $(document).ready(function(){
    	paginationInit('.M-box5','.post-count5',10);
        paginationStyle('.M-box5','.post-count5',10);
    });
</script>
<?php get_footer();