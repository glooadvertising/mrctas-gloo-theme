<?php 
    
    $dropdownBoxes = array(
        array(
            'title' => 'Corporate volunteering',
            'slug' => 'corporate-volunteering'
        ),
        array(
            'title' => 'Meet our volunteers',
            'slug' => 'meet-our-volunteers'
        ),
        array(
            'title' => 'Frequestly Asked questions',
            'slug' => 'frequently-asked-questions'
        ),
        array(
            'title' => 'Apply to volunteer',
            'slug' => 'apply-to-volunteer'
        ),
        array(
            'title' => 'Already a volunteer?',
            'slug' => 'already-a-volunteer'
        )
    );
?>


<div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[5rem] min-h-96 sticky top-[200px] min-h-[60vh]">
    <h3 class="font-extrabold text-xl text-mrct-navy-light">On this page</h3>
    <ul class="side-menu">
        <?php foreach ($dropdownBoxes as $dpBox) {
            echo "<li class=\"py-1 border-b-2 border-transparent hover:border-mrct-orange text-mrct-navy-light font-semibold\"><a href=\"#" . $dpBox['slug'] . "\">" . $dpBox['title'] . "</a></li>";
        } ?>
        
    </ul>

</div>
