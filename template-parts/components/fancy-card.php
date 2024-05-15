
<article class="fancy-card flex relative group cursor-pointer">
    <?php if(get_field('fancy_box_image')) {?> 
        <img src="<?php echo get_field('fancy_box_image');?>" alt="" class="aspect-4/3 w-full h-full object-cover relative z-0">
    <?php } else { ?>
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="aspect-4/3 w-full h-full object-cover relative z-0">
    <?php }?>

    <?php ?>
    <div class="overlay bg-gray-100 text-mrct-navy-light opacity-75 w-full group-hover:h-full bottom-0 flex flex-col absolute z-1 justify-between">
        <span class="flex flex-col">
        <h3 class="py-4 px-8 text-2xl lg:text-lg xl:text-xl font-bold group-hover:hidden text-mrct-navy-light transition-all"><?php $custom = get_post_custom(); if(isset($custom['short_title'])) { echo $custom['short_title'][0];} else { the_title();}?></h3>
        <div class="fancy-card-content text-lg sm:text-xl md:text-md lg:text-md xl:text-sm py-4 px-8 hidden group-hover:block transition-all">
            <?php the_excerpt( ); ?>
        </div>
        </span>
        <a href="<?php the_permalink(); ?>" style="clip-path: polygon(100% 50%, 0 0, 0 100%);" class="read-more items-center py-4 px-8 hidden group-hover:flex transition-all font-bold after:justify-start after:items-center after:bg-mrct-navy-light after:ml-2 after:w-4 after:aspect-square">read more</a>
    </div>
</article>
