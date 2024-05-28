<?php 
    $anchorTags = array(
        array(
            'title' => 'Our vision',
            'slug' => 'our-vision'
        ),
        array(
            'title' => 'Our mission',
            'slug' => 'our-mission'
        ),
        array(
            'title' => 'Our values',
            'slug' => 'our-values'
        ),
        array(
            'title' => 'Donate and you will make a difference',
            'slug' => 'donate'
        ),
        array(
            'title' => 'Commitment to child safety',
            'slug' => 'child-safety'
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
