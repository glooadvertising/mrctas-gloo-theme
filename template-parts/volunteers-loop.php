<?php 
$volunteers = new WP_Query(array(
    'post_type' => 'volunteers',
    'post_per_page' => 2,
    'order' => 'ASC'
));

while ($volunteers->have_posts()) {
    $volunteers->the_post();
    ?>
    <details id="meet-<?php echo basename(get_permalink()); ?>" class="cursor-pointer mb-6"><?php ?>
        <summary class="px-10 py-6 flex bg-gray-100 justify-between"><h3 class="font-extrabold">Meet <?php the_title(); ?></h3></summary>
        <div class="px-10 pb-36 bg-gray-100 rounded-br-[56px]">
            <img src="<?php echo  has_post_thumbnail()? get_the_post_thumbnail_url( ): NULL; ?>" alt="" class="mb-8 w-[200px] max-w-full aspect-square">
            <?php the_content();?>
        </div>
    </details>
    <?php
}

wp_reset_postdata(  );

?>