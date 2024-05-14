<?php 
$boardMembers = new WP_Query(array(
    'post_type' => 'board_members',
    'post_per_page' => -1,
    'order' => 'ASC'
));

while ($boardMembers->have_posts()) {
    $boardMembers->the_post();
    ?>
    <div id="<?php echo basename(get_permalink()); ?>" class="mb-6"><?php ?>
        <summary class="px-10 py-6 flex bg-gray-100 justify-between"></summary>
        <div class="flex flex-col items-start md:flex-row md:gap-12 px-10 pb-24 bg-gray-100 rounded-br-[56px]">
            <img src="<?php echo  has_post_thumbnail()? get_the_post_thumbnail_url( ): NULL; ?>" alt="" class="mb-4 w-[300px]  max-w-full aspect-square rounded-br-3xl">
            <div>
                <h3 class="font-extrabold"><?php the_title(); ?><small class="ml-4 font-light text-mrct-navy-light"><?php $custom = get_post_custom(); if(isset($custom['board_member_role'])) { echo $custom['board_member_role'][0];} else { the_title();}?></small></h3>
                <hr class="!my-4">
                <?php the_content();?>
            </div>
        </div>
    </div>
    <?php
}

wp_reset_postdata(  );

?>