<?php
/**
 * Template name: tag
 */
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
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="site-main sideber-at-right">
	<section class="content clearfix">
        <div class="main-content">
            <?php get_template_part('template-parts/content/content','main-tags'); ?>
            <div class="l-content">
                <ul class="cat-list help" id="itemContainer">
	              <?php
				    global $wp_query, $wp_rewrite;
				    $x =1;
				    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
				    $limit = get_option('posts_per_page');
				    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				    $tagid = get_queried_object_id() ;
				    $postype = array('dailypic','post');
			        $args = array(
						'post_type' => $postype,
						'order'     => DESC,
						'showposts' => $limit=10,
						'paged'     => $paged,
						'tag_id'    => $tagid,
			        );
				    query_posts( $args );
				    if ( have_posts() ) : while (have_posts() ) : the_post();
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
	                <?php endwhile; else: ?>
	                	<div class="search-none">
	                		<img src="<?php mySrc()?>/assets/images/search-none.png" alt="" />
	                		<p>当前您查找的问题暂无答案！</p>
							<p>请通过以下联系方式联系我们的客服人员，我们将尽快为您解答！</p>
							<div class="connect">
								<p>联系电话：<?php myTelNum();?></p>
								<p>技术邮箱：support@huduntech.com</p>
							</div>
	                	</div>
	                <?php endif; ?>
                </ul>
                <p class="post-count4 post-counts"><?php
	                  global $wp_query;
	                  echo  $wp_query->found_posts;
	                ?></p>
                <div class="M-box4 M-box"></div>
            </div>
        </div>

        <?php get_sidebar() ?>
	</section>
</main>
<script type="text/javascript">
    
    $(document).ready(function(){
        paginationInit('.M-box4','.post-count4',10);
        paginationStyle('.M-box4','.post-count4',10);
    });
</script>
<?php get_footer();