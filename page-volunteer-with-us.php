<?php get_header(); ?>
<section <?php post_class( 'flex' );?>>
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24 pb-36">
        <div class="flex flex-col col-span-3 xl:col-span-2">
            <h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2"><?php the_title(); ?></h1>
            <img src="<?php echo has_post_thumbnail( ) ? the_post_thumbnail_url() : NULL; ?>" alt="" class="aspect-[5/2] object-cover object-top mb-8">
            <?php the_content(); ?>
            <?php get_template_part('template-parts/volunteers-loop');?>
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
