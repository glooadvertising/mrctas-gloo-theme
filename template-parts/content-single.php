<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<?php the_title( sprintf( '<h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<hr>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-mrct-navy-light py-2 flex"><?php echo get_the_date(); ?></time>
		<hr>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

</article>
