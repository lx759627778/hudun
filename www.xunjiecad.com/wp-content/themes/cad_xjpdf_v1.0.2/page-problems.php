<?php
/**
 * Template name: Page Problems
 */
get_header();
$page1 =3;
$showposts1 =9;
?>
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="site-main site-main-problems sideber-at-right">
	<section class="content clearfix">
        <div class="main-content">
            <?php get_template_part('template-parts/content/content','main-tags'); ?>
            <div class="l-content">
                <ul class="cat-list help" id="itemContainer">
                    <?php
                        $x =1;
                        $limit = get_option('posts_per_page');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts($limit . '&paged=' . $paged .'&category_name=problems'.'&showposts='.$showposts1);
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                    ?> 

                        <li class="post-list">
                            <a class="container">
                            <div class="post-img-btn">
                                <?php 
                                    echo '<img src='.catch_that_image().' class="post-img pic" />';
                                 ?>
                            </div>
                                <h3><?php the_title(); ?></h3>
                                <p class="excerpt"><?php echo mb_strimwidth(get_the_excerpt(), 0, 140, '...'); ?></p>
                            </a>
                        </li>
                    <?php endwhile; else:endif; ?>
                </ul>
                <p class="post-count5 post-counts"><?php echo get_category_by_slug('problems')->count; ?></p>
                <div class="M-box5 M-box"></div>
            </div>
        </div>

        <?php get_sidebar() ?>
	</section>
</main>
<script type="text/javascript">
    $(document).ready(function(){
        paginationInit('.M-box5','.post-count5',9);
        paginationStyle('.M-box5','.post-count5',9);
    });
</script>
<?php get_footer();