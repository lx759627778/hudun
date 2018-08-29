<?php
get_header(); ?>
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="single-main clearfix">
	<section class="content">
		<div class="main-content">
			<?php cmp_breadcrumbs(); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		<h1 class="text-center l-artile-tile">
        			<?php the_title_attribute(); ?>
    			</h1>
	        	<div class="post-content l-artile-content">
	        		<?php the_content(); ?>
	    		</div>
	        <?php endwhile; else : endif;?>
	        <ul class="single-nav">
	            <li>上一篇：<?php previous_post_link('%link'); ?></li>
	            <li>下一篇：<?php next_post_link('%link'); ?></li>
	        </ul>
		</div>
		<?php get_sidebar(); ?>
	</section>
</main>
<?php
get_footer();
