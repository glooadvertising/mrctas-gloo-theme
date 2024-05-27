<br><br>
<h2 id="frequently-asked-questions">Frequently asked questions</h2><br>
<?php 
$volunteers = new WP_Query(array(
    'post_type' => 'faqs',
    'post_per_page' => -1,
    'order' => 'ASC'
));

while ($volunteers->have_posts()) {
    $volunteers->the_post();
    ?>
    <details id="meet-<?php echo basename(get_permalink()); ?>" class="cursor-pointer mb-6"><?php ?>
        <summary class="px-10 py-6 flex bg-gray-200 justify-between"><h3 class="font-extrabold">Meet <?php the_title(); ?></h3></summary>
        <div class="px-10 pb-36 bg-gray-200 rounded-br-[56px]">
            <?php the_content();?>
        </div>
    </details>
    <?php
}

wp_reset_postdata(  );

?>

