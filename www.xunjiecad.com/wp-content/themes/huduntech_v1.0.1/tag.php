<?php get_header()?>
<?php
/*
Template Name:Tag
*/
?>
<header class="header-wrap">
    <div class="container">
        <div class="row header">
            <a class="logo" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
            <ul class="right inline nav">
                <li><a href="<?php echo get_option('home'); ?>">首页<span></span></a></li>
                <li><a href="<?php echo get_option('home'); ?>/products.html">产品中心<span></span></a></li>
                <li><a href="<?php echo get_option('home'); ?>/about.html">关于我们<span></span></a></li>
            </ul>
        </div>
        <ul class="banner-wrapper">
            <li class="row banner "></li>
        </ul>
    </div>
</header>
<?php get_template_part( 'content', 'aside' ); ?>
<div class=" article-tag-list-main">
	<section class="container">
		<ul class="row">
			<div class="nav-bread"><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></div>
			<li class="col-9">
				<div class="article-tag-list" id="content">
				<?php
					global $wp_query,$wp_rewrite;
					$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
					$limit = get_option('posts_per_page');
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$tagid =get_queried_object_id() ;
					$postype=array('','');
					query_posts('post_type=&order=DESC&showposts=' . $limit=3 . '&paged=' . $paged.'&tag_id='.$tagid);
				?>
				<?php if ( have_posts() ) : ?>
					<?php while (have_posts() ) : the_post(); ?>
						<a class="list post" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							<h3><?php the_title(); ?></h3>
							<div class="tag-excerpt"><?php the_excerpt();?></div>
						</a>
					<?php endwhile; ?>
				<?php  ?>
				<?php else : ?>
				<?php endif; ?>
				<div class="page_navi"><?php par_pagenavi(9); ?></div>
			</li>
	<?php get_template_part( 'content', 'sidebar' ); ?>

		</ul>
	</section>
</div>
<?php get_footer()?>