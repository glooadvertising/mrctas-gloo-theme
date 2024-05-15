<?php get_header(); ?>
<section <?php post_class( 'flex' );?>>
    <div class="w-page mx-auto grid grid-cols-3 px-12 gap-24 pt-24">
        <div class="col-left flex flex-col col-span-3 xl:col-span-2 pb-36">
            <?php
                $s=get_search_query();
                $args = array(
                                's' =>$s
                            );
                    // The Query
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                        _e("<h1 class=\"font-extrabold text-3xl text-mrct-navy-light mb-2\">Search Results for: ".get_query_var('s')."</h1>");
                        while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                                ?>
                                    <li class="border-b-[1px] border-gray-200 py-2 list-none flex items-baseline">
                                        <span class="text-mrct-lilac-light uppercase text-xs mr-4"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span>
                                        <a href="<?php the_permalink(); ?>" class="uppercase text-mrct-navy-light hover:text-mrct-orange hover:transition-all">
                                            <?php the_title(); ?>
                                        </a>
                                    </li>
                                <?php
                        }
                    }else{
                ?>
                <h1 class="font-extrabold text-3xl text-mrct-navy-light mb-2">Nothing Found :(</h1>
                <div class="alert alert-info">
                <p>Sorry, but nothing matched your search criteria. <br>Please try again with some different keywords.</p>
                <?php get_search_form(); ?>
                </div>
        <?php } ?>
        </div>
        <!-- <div class="col-right col-span-3 xl:col-span-1">
            <?php $slug = basename(get_permalink()); ?>
            <?php get_template_part("template-parts/side-menus/$slug"); ?>
        </div> -->
    </div>
</section>

<?php get_footer(); ?>
