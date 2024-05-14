<?php get_header(); ?>
<section <?php post_class( 'flex' );?>>
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24">
        <div class="col-left flex flex-col col-span-3 xl:col-span-2 pb-36">
            <h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail( )){ ?>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="aspect-[5/2] object-cover object-center mb-8">
            <?php } ?>
            <div class="content-wrapper mb-6">
                <?php the_content(); ?>

                <?php 
                $args = array(
                    'post_type' => 'post',
                    'order'          => 'DESC',
                    'post_per_page'=> -1
                );
                $thePost = new WP_Query($args); ?>

                <!-- <h2 id="publications">Publications</h2> -->
                <div class="flex flex-col gap-2 mt-6">
                    <?php if ( $thePost->have_posts() ) : while ( $thePost->have_posts() ) : $thePost->the_post(); ?>
                        <div class="flex flex-col items-start lg:gap-4 lg:flex-row lg:items-center">
                            <span class="text-gray-200 text-xs uppercase font-bold"><?php the_date(); ?></span> <a href="<?php the_permalink();?>" class="py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold"><?php the_title();?></a> 
                        </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>

                <hr>
                
                <?php 
                $args = array(
                    'post_type' => 'annual_reports',
                    'order'          => 'DESC',
                    'orderby'        => 'title'
                );
                $annual_report = new WP_Query($args); ?>
                <h2 id="annual-reports">Annual reports</h2>
                <div class="flex flex-col gap-2 mt-6">
                    <?php if ( $annual_report->have_posts() ) : while ( $annual_report->have_posts() ) : $annual_report->the_post(); ?>
                        <?php $custom_attach = get_post_meta( $post->ID, 'wp_custom_attachment', true ); ?>
                        <div class="flex gap-4 items-center">
                            <a href="<?php echo $custom_attach['url'];?>" target="_blank" class="py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold"><?php the_title();?></a> 
                            <a href="<?php echo $custom_attach['url'];?>" download class="text-[0.6rem] uppercase text-white bg-gray-200 py-1 px-2 rounded-md hover:bg-mrct-orange hover:transition-all">Download</a>
                        </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>

                <hr>

                <?php 
                $args = array(
                    'post_type' => 'financial_statements',
                    'order'          => 'DESC',
                    'orderby'        => 'title'
                );
                $fnancial_statement = new WP_Query($args); ?>
                <h2 id="financial-statements">Financial statements</h2>
                <div class="flex flex-col gap-2 mt-6">
                    <?php if ( $fnancial_statement->have_posts() ) : while ( $fnancial_statement->have_posts() ) : $fnancial_statement->the_post(); ?>
                        <?php $custom_attach = get_post_meta( $post->ID, 'wp_custom_attachment', true ); ?>
                        <div class="flex gap-4 items-center">
                            <a href="<?php echo $custom_attach['url'];?>" target="_blank" class="py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold"><?php the_title();?></a> 
                            <a href="<?php echo $custom_attach['url'];?>" download class="text-[0.6rem] uppercase text-white bg-gray-200 py-1 px-2 rounded-md hover:bg-mrct-orange hover:transition-all">Download</a>
                        </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="col-right col-span-3 xl:col-span-1">
        <?php $slug = basename(get_permalink()); ?>
            <?php get_template_part("template-parts/side-menus/$slug"); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
