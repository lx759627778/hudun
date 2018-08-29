<?php
/**
 * Template name: Page Help1
 */
get_header();
$page1 =3;
$showposts1 =9;
?>
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="site-main sideber-at-right">
	<section class="content clearfix">
        <div class="main-content">
            <?php get_template_part('template-parts/content/content','main-tags'); ?>
            <div class="problem_entry post-list">
                <a href="/problems.html" class="container">
                    <div class="pic post-img-btn"><img src="<?php mySrc() ?>/assets/images/problems_bg.png" height="159" width="218" alt="" /></div>
                    <?php
                        $post_id = 47; // 文章ID，可以在WP后台找到
                        echo '<h3>'.get_post( $post_id )->post_title.'</h3>'; // 输出文章的内容
                        echo '<p class="excerpt">答：借助迅捷CAD编辑器，可以对常见的CAD DWG、DXF、DWT等图纸格式进行查看、编辑...</p>'; // 输出文章的内容
                    ?>
                    <span href="/problems.html" class="more">查看详情</span>
                </a>
            </div>
            <div class="post-type-title clearfix">
                <a href="/help.html" class="current">迅捷CAD编辑器【标准版】</a>
                <a href="/help-majors.html">迅捷CAD编辑器【专业版】</a>
            </div>
            <div class="l-content">
                <ul class="cat-list help" id="itemContainer">
                    <?php
                        $x =1;
                        $limit = get_option('posts_per_page');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts($limit . '&paged=' . $paged .'&category_name=toturial'.'&showposts='.$showposts1);
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
                <p class="post-count post-counts"><?php echo get_category_by_slug('toturial')->count; ?></p>
                <div class="M-box"></div>
            </div>
        </div>

        <?php get_sidebar() ?>
	</section>
</main>
<script type="text/javascript">
    $(document).ready(function(){
        paginationInit('.M-box','.post-count',9);
        paginationStyle('.M-box','.post-count',9);
    });
</script>
<?php get_footer();