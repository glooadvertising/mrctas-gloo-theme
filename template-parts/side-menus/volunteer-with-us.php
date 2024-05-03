<?php 
    $volunteers = array(
        'simon', 
        'kirsten',
    );
    
    $dropdownBoxes = array(
        array(
            'title' => 'FAQs',
            'slug' => 'faq'
        ),
        array(
            'title' => 'Our commitment to the safety of Children and Young People',
            'slug' => 'safety'
        )
    );
?>


<div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[5rem] min-h-96 sticky top-[200px] min-h-[60vh]">
    <h3 class="font-extrabold text-xl text-mrct-navy-light">On this page</h3>
    <ul class="side-menu">
        <?php foreach ($volunteers as $volunteer) {
            echo "<li class=\"py-1 border-b-2 border-transparent hover:border-mrct-orange text-mrct-navy-light font-semibold\"><a href=\"#meet-$volunteer\">Meet " . ucfirst($volunteer) . "</a></li>";
        } ?>
        <?php foreach ($dropdownBoxes as $dpBox) {
            echo "<li class=\"py-1 border-b-2 border-transparent hover:border-mrct-orange text-mrct-navy-light font-semibold\"><a href=\"#" . $dpBox['slug'] . "\">" . $dpBox['title'] . "</a></li>";
        } ?>
        
    </ul>

</div>
