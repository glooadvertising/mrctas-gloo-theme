<?php 
// CURRENT PROGRAMS
$programs = new WP_Query(array(
    'post_type' => 'programs',
    'post_per_page' => -1,
    'order' => 'ASC',
    'category_name' => 'current-programs'

));

while ($programs->have_posts()) {
    $programs->the_post();
    ?>
    <h2 id="current-programs" class="!text-mrct-orange">Current Programs</h2>
    <hr class="!my-4">
    <h2 id="<?php echo basename(get_permalink()); ?>" class="font-extrabold"><?php the_title(); ?></h2>
    <?php the_content();?>
    <br>
    <details id="<?php echo basename(get_permalink()); ?>" class="mb-6"><?php ?>
    <summary class="px-10 py-6 flex bg-gray-100 justify-between"><h3 class="font-extrabold !my-0">Program highlights</h3></summary>
        <div class="flex flex-col items-start px-10 pb-24 bg-gray-100 rounded-br-[56px]">
            <?php echo get_field('program_highlights'); ?>
        </div>
    </details>
    <details id="<?php echo basename(get_permalink()); ?>" class="mb-6"><?php ?>
    <summary class="px-10 py-6 flex bg-gray-100 justify-between"><h3 class="font-extrabold !my-0">Achieved outcomes</h3></summary>
        <div class="flex flex-col items-start px-10 pb-24 bg-gray-100 rounded-br-[56px]">
            <?php echo get_field('program_outcomes'); ?>
        </div>
    </details>

    <?php
}

wp_reset_postdata(  );

echo '<br><br><br>';
// Past programs
$programs = new WP_Query(array(
    'post_type' => 'programs',
    'post_per_page' => -1,
    'order' => 'ASC',
    'category_name' => 'past-programs'

));

while ($programs->have_posts()) {
    $programs->the_post();
    ?>
    <h2 id="past-programs" class="!text-mrct-orange">Past Programs</h2>
    <hr class="!my-4">
    <h2 class="font-extrabold"><?php the_title(); ?></h2>
    <?php the_content();?>
    <br>
    <details id="<?php echo basename(get_permalink()); ?>" class="mb-6"><?php ?>
    <summary class="px-10 py-6 flex bg-gray-100 justify-between"><h3 class="font-extrabold !my-0">Program highlights</h3></summary>
        <div class="flex flex-col items-start px-10 pb-24 bg-gray-100 rounded-br-[56px]">
            <?php echo get_field('program_highlights'); ?>
        </div>
    </details>
    <details id="<?php echo basename(get_permalink()); ?>" class="mb-6"><?php ?>
    <summary class="px-10 py-6 flex bg-gray-100 justify-between"><h3 class="font-extrabold !my-0">Achieved outcomes</h3></summary>
        <div class="flex flex-col items-start px-10 pb-24 bg-gray-100 rounded-br-[56px]">
            <?php echo get_field('program_outcomes'); ?>
        </div>
    </details>

    <?php
}

wp_reset_postdata(  );

?>