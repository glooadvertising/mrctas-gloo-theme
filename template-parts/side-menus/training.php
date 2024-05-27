<?php 
    $anchorTags = array(
        array(
            'title' => 'How to register',
            'slug' => 'how-to-register'
        ),
        array(
            'title' => 'Cultural Awareness Training',
            'slug' => 'cultural-awareness-training'
        ),
        array(
            'title' => 'Working with Interpreters',
            'slug' => 'working-with-interpreters'
        ),
        array(
            'title' => 'Working with People from a Refugee Background',
            'slug' => 'working-with-people-from-a-refugee-background'
        ),
        array(
            'title' => 'Cross-Cultural Communication',
            'slug' => 'cross-cultural-communication'
        ),
        array(
            'title' => 'Cultural Competency for the Workplace',
            'slug' => 'cultural-competency-for-the-workplace'
        ),
        array(
            'title' => 'Specialist Mental Health Training',
            'slug' => 'specialist-mental-health-training'
        ),
        array(
            'title' => 'SafeTALK',
            'slug' => 'safetalk'
        ),
        array(
            'title' => 'Working with CALD Youth',
            'slug' => 'working-with-cald-youth'
        ),
        array(
            'title' => 'Application of the National Youth Settlement Framework',
            'slug' => 'application-of-the-national-youth-settlement-framework'
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
