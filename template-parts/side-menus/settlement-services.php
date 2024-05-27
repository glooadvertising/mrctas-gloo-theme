<?php 
    $anchorTags = array(
        array(
            'title' => 'Individual Support: Case Management',
            'slug' => 'individual-case-management'
        ),
        array(
            'title' => 'Community Capacity Building Program',
            'slug' => 'community-capacity-building-program'
        ),
        array(
            'title' => 'Other Support and Programs',
            'slug' => 'other-support-and-programs'
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
