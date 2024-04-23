<?php get_header(); ?>
<section class="flex">
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24">
        <div class="flex flex-col col-span-2">
            <h1 class="font-extrabold text-3xl text-mrct-navy-light"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <div>
            <div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[6rem] min-h-96">
                <h3 class="font-extrabold text-xl text-mrct-navy-light">Volunteer</h3>
                <a href="#" class="py-2 border-b-2 border-transparent hover:border-mrct-orange">Volunteer with us</a>
                <a href="#" class="py-2 border-b-2 border-transparent hover:border-mrct-orange">Corporate volunteering</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
