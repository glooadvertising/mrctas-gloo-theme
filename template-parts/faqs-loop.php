<?php 
$volunteers = new WP_Query(array(
    'post_type' => 'faqs',
    'post_per_page' => -1,
    'order' => 'ASC'
)); ?>

<details class="cursor-pointer mb-6">
    <summary class="px-10 py-6 flex bg-gray-100"><h3 class="font-extrabold text-mrct-navy-light">Frequently asked questions</h3></summary>
    <div class="px-10 pb-36 bg-gray-100 rounded-br-[56px]">
        <?php while ($volunteers->have_posts()) { ?>
        <?php $volunteers->the_post(); ?>
            <div class="border-b-2 last:border-b-0 py-4">
                <h4 class="font-extrabold text-mrct-navy-light"><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
        <?php }?>
        <?php wp_reset_postdata(); ?>
    </div>
</details>

