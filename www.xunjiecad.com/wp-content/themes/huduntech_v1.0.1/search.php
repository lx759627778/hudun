<?php

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( '搜索结果: %s', get_search_query() ); ?></h1>
			</header>

			<?php
			while ( have_posts() ) : the_post(); ?>

				<?php
				get_template_part( 'content', 'search' );

			endwhile;

			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'text_domain' ),
				'next_text'          => __( 'Next page', 'text_domain' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'text_domain' ) . ' </span>',
			) );

		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main>
	</section>

<?php get_footer();