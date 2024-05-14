<?php 
    $anchorTags = array(
        array(
            'title' => 'Counselling',
            'slug' => 'counselling'
        ),
        array(
            'title' => 'Amplify Ability',
            'slug' => 'amplify-ability'
        ),
        array(
            'title' => 'Early Intervention Program',
            'slug' => 'eip'
        ),
        array(
            'title' => 'Suicide Prevention Project',
            'slug' => 'spp'
        ),
        array(
            'title' => 'Tasmanian Transcultural Mental Health Network (TTMHN)',
            'slug' => 'ttmhn'
        ),
        array(
            'title' => 'Referral forms',
            'slug' => 'referral-forms'
        ),
        array(
            'title' => 'I need help now. Where should I go?',
            'slug' => 'help'
        )



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
