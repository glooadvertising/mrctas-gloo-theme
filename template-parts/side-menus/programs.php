


<div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[5rem] min-h-96 sticky top-[200px] min-h-[60vh]">
<?php 
    // CURRENT PROGRAMS
    $currentPrograms = new WP_Query(array(
        'post_type' => 'programs',
        'post_per_page' => -1,
        'order' => 'ASC',
        'category_name' => 'current-programs'

    )); ?>

<?php 
    // CURRENT PROGRAMS
    $pastPrograms = new WP_Query(array(
        'post_type' => 'programs',
        'post_per_page' => -1,
        'order' => 'ASC',
        'category_name' => 'past-programs'

    )); ?>


<h3 class="font-black text-xl text-mrct-navy-light">Current programs</h3>
    <ul class="side-menu">
        <?php while ($currentPrograms->have_posts()) { $currentPrograms->the_post(); ?>
        <li class="py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold"><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title();?></a></li>
        <?php } wp_reset_postdata();?>
     </ul>
    <hr class="my-4">
    <h3 class="font-black text-xl text-mrct-navy-light">Past programs</h3>
    <ul class="side-menu">
        <?php while ($pastPrograms->have_posts()) { $pastPrograms->the_post(); ?>
        <li class="py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold"><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title();?></a></li>
        <?php } wp_reset_postdata();?>
     </ul>
</div>
