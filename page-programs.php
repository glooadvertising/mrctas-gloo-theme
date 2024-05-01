<?php get_header(); ?>
<section <?php post_class( 'flex' );?>>
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24 pb-0">
        <div class="flex flex-col col-span-3 xl:col-span-2">
            <h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail( )){ ?>
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="aspect-[5/2] object-cover object-top mb-8">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(  )?>/images/placeholder.png" alt="" class="aspect-[5/2] object-cover object-center mb-8">
            <?php }?>
            <?php the_content(); ?>
            <!--  -->
            <?php
                $new_loop = new WP_Query( array(
                    'post_type' => 'blocks',
                    'post__in' => [182, 183],
                ) );
            ?>
            <?php if ( $new_loop->have_posts() ) : ?>
                <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
                <details class="cursor-pointer mb-6">
                    <summary class="px-10 py-6 flex bg-gray-100"><h3 class="font-extrabold"><?php the_title(); ?></h3></summary>
                    <div class="px-10 pb-36 bg-gray-100 rounded-br-[56px]">
                        <?php the_content();?>
                    </div>
                </details>
                <?php endwhile;?>
            <?php else: endif; wp_reset_query(); ?>
            <!--  -->
        </div>
        <div class="col-span-3 xl:col-span-1">
            <div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[6rem] min-h-96">
                <h3 class="font-extrabold text-xl text-mrct-navy-light">Volunteer</h3>
                <a href="#" class="py-2 border-b-2 border-transparent hover:border-mrct-orange">Volunteer with us</a>
                <a href="#" class="py-2 border-b-2 border-transparent hover:border-mrct-orange">Corporate volunteering</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
