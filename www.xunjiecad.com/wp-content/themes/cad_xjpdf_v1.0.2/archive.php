<?php
get_header(); ?>
<main class="site-main sidebar-at-right">
	<section class="container">
		<div class="l-content">
			<?php
			if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' =>  '<span class="screen-reader-text">' . __( 'Previous page', 'storefront' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'storefront' ) . '</span>' ,
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'storefront' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</section><!-- .wrap -->
</main>
<?php get_footer();
