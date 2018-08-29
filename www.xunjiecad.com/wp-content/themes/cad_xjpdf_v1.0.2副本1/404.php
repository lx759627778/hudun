<?php
get_header(); ?>
<main class="site-main sidebar-at-right page-no-banner">
	<section class="container">
		<div class="l-content">
			<div class="l-crumbs"><?php cmp_breadcrumbs(); ?></div>
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'storefront' ); ?></h1>
				</header>
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'storefront' ); ?></p>

					<?php search_form_simple(); ?>

				</div>
			</section>
		</div>
		<?php get_sidebar(); ?>
	</section>
</main>
<?php get_footer();
