<?php 
$volunteers = new WP_Query(array(
    'post_type' => 'volunteers',
    'post_per_page' => 2,
    'order' => 'ASC'
));

while ($volunteers->have_posts()) {
    $volunteers->the_post();
    ?>
    <details class="cursor-pointer mb-6">
        <summary class="px-12 py-6 flex bg-gray-100"><h3 class="font-extrabold">Meet <?php the_title(); ?></h3></summary>
        <div class="px-12 pb-36 bg-gray-100 rounded-br-[56px]">
            <?php echo  has_post_thumbnail()? the_post_thumbnail( ): NULL; ?>
            <?php the_content();?>
        </div>
    </details>
    <?php
}

wp_reset_postdata(  );

?>