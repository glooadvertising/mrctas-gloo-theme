<section id="need-help" class="flex flex-col md:grid grid-cols-5">
	<div class="bg-gray-100 left-col min-h-2 px-6 py-12 md:py-24 xl:p-24 md:col-span-2">
		<h2 class="text-3xl md:text-5xl font-extrabold text-mrct-orange mb-4 md:mb-8">Need help?</h2>
		<p class="text-xl lg:text-2xl">Find out how Migrant Resource Centre Tasmania can support you to thrive as you settle and live a fulfilling life within lutruwita/Tasmania.</p>
	</div>
	<div class="fancy-grid-container right-col min-h-2 md:col-span-3 xl:grid grid-cols-3 gap-[1px]">
        <?php 
			$args = array(
				'post_type' => 'page',
				'posts_per_page' => 9,
				'post_parent'    => 166,
				'order'          => 'ASC',
				'orderby'        => 'menu_order'
			);
			$parent = new WP_Query($args);
			if ( $parent->have_posts() ) : ?>

			<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<?php get_template_part( 'template-parts/components/fancy-card' ); ?>
			<?php endwhile; ?>
			
			<?php endif; wp_reset_postdata(); ?>
        
	</div>
</section>
