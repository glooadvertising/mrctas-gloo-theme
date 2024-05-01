<article class="fancy-card flex relative group cursor-pointer">
    <?php if(has_post_thumbnail()){?> 
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="aspect-4/3 w-full h-full object-cover relative z-0">
    <?php } else {?>
        <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="aspect-4/3 w-full h-full object-cover relative z-0">
    <?php }?>
    <div class="overlay bg-gray-100 text-mrct-navy-light opacity-75 w-full group-hover:h-full bottom-0 flex flex-col absolute z-1 justify-between">
        <span class="flex flex-col">
        <h3 class="py-4 px-8 text-2xl lg:text-lg xl:text-xl font-bold group-hover:hidden text-mrct-navy-light transition-all"><?php the_title();?></h3>
        <div class="fancy-card-content py-4 px-8 hidden group-hover:block transition-all">
            <?php the_excerpt( ); ?>
        </div>
        </span>
        <a href="<?php the_permalink(); ?>" class="read-more py-4 px-8 hidden group-hover:block transition-all">Read more</a>
    </div>
</article>
