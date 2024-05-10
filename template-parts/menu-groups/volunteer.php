<div class="col-01 col-span-1 flex flex-col gap-6">
    <?php $menu_group = new WP_Query( array(
            'post_type' => 'page',
            'category_name'       => 'volunteer'
        )
    );?>
    <h3 class="font-extrabold">Volunteer</h3>
    <ul class="gap-2 flex flex-col">
        <?php if($menu_group->have_posts()) {?>
            <?php while($menu_group->have_posts()) {?>
                <?php $menu_group->the_post();?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
            <?php }?>
        <?php } wp_reset_postdata();?>
    </ul>
</div>
