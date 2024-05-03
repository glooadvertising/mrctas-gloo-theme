<?php 
    $anchorTags = array(
        array(
            'title' => 'Our services',
            'slug' => 'our-services'
        ),
        array(
            'title' => 'Home care packages',
            'slug' => 'home-care-packages'
        ),
        array(
            'title' => 'Tasmanian Home and Community Care (HACC) Program',
            'slug' => 'thaccp'
        ),
        array(
            'title' => 'Commonwealth Home Support Program (CHSP)',
            'slug' => 'chsp'
        ),
        array(
            'title' => 'For service providers',
            'slug' => 'service-providers'
        ),



    )

?>


<div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[5rem] min-h-96 sticky top-[200px] min-h-[60vh]">
<h3 class="font-black text-xl text-mrct-navy-light">On this page</h3>
    <ul class="side-menu">
        <?php foreach($anchorTags as $anchorTag) {
            echo "<li class=\"py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold\"><a href=\"#" . $anchorTag['slug'] . "\">" . $anchorTag['title'] . "</a></li>";
        }?>
    </ul>
</div>
