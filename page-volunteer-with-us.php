<?php get_header(); ?>
<section <?php post_class( 'flex' );?>>
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24">
        <div class="col-left flex flex-col col-span-3 xl:col-span-2">
            <h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail( )){ ?>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="aspect-[5/2] object-cover object-top mb-8">
            <?php } ?>
            <div class="content-wrapper mb-6">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('template-parts/volunteers-loop');?>
            <?php get_template_part('template-parts/faqs-loop');?>
            <!--  -->
            <?php
                $new_loop = new WP_Query( array(
                    'post_type' => 'blocks',
                    'posts_per_page' => 1,
                    'p' => 161,
                ) );
            ?>
            <?php if ( $new_loop->have_posts() ) : ?>
                <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
                <br><br>
                <h2><?php the_title(); ?></h2>
                <?php the_content();?>
                <br><br>
                <!-- <details id="safety" class="cursor-pointer mb-6">
                    <summary class="px-10 py-6 flex bg-gray-100"><h3 class="font-extrabold"><?php the_title(); ?></h3></summary>
                    <div class="px-10 pb-36 bg-gray-100 rounded-br-[56px]">
                        <?php the_content();?>
                    </div>
                </details> -->
                <?php endwhile;?>
            <?php else: endif; wp_reset_query(); ?>
            <!--  -->
            <?php 
                $new_loop = new WP_Query( array(
                    'post_type' => 'blocks',
                    'p' => 165,
                ) );
            ?>
            <?php if ( $new_loop->have_posts() ) : ?>
                <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
                <div class="-mx-[16px] px-10 pt-24 pb-36 bg-gray-100 rounded-tl-[72px] border-mrct-ochre-light border-[16px] border-b-0">
                    <?php the_content();?>
                    <!-- loop inside loop -->
                    <?php
                        $in_loop = new WP_Query( array(
                            'post_type' => 'blocks',
                            'p' => 163,
                        ) );
                    ?>
                    <?php if ( $in_loop->have_posts() ) : ?>
                        <?php while ( $in_loop->have_posts() ) : $in_loop->the_post(); ?>
                        <details class="cursor-pointer my-12">
                            <summary class="p-6 flex bg-white"><h3 class="font-extrabold"><?php the_title(); ?></h3></summary>
                            <div class="p-6 pb-36 rounded-br-[56px] bg-white">
                                <?php the_content();?>
                            </div>
                        </details>
                        <?php endwhile;?>
                    <?php else: endif; wp_reset_query(); ?>
                    <!-- end of loop inside loop -->
                </div>
                <?php endwhile;?>
            <?php else: endif; wp_reset_query(); ?>
        </div>
        <div class="col-span-3 xl:col-span-1">
            <?php $slug = basename(get_permalink()); ?>
                <?php get_template_part("template-parts/side-menus/$slug"); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
