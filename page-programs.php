<?php get_header(); ?>
<section <?php post_class( 'flex' );?>>
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24 pb-0">
        <div class="col-left flex flex-col col-span-3 xl:col-span-2">
            <h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail( )){ ?>
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="aspect-[5/2] object-cover object-center mb-8">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(  )?>/images/placeholder.png" alt="" class="aspect-[5/2] object-cover object-center mb-8">
            <?php }?>
            <div class="content-wrapper mb-6">
                <?php the_content(); ?>
                <?php get_template_part('template-parts/programs-loop'); ?>

                
            </div>
        </div>
        <div class="col-right col-span-3 xl:col-span-1">
            <?php $slug = basename(get_permalink()); ?>
            <?php get_template_part("template-parts/side-menus/$slug"); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
