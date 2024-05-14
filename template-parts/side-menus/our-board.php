<?php 
    $anchorTags = array(
        array(
            'title' => 'Peter Gutwein',
            'slug' => 'peter-gutwein'
        ),
        array(
            'title' => 'George Elkhair',
            'slug' => 'george-elkhair'
        ),
        array(
            'title' => 'Fahim Chowdhury',
            'slug' => 'fahim-chowdhury'
        ),
        array(
            'title' => 'Daniela Ruiz',
            'slug' => 'daniela-ruiz'
        ),
        array(
            'title' => 'Dr Tania Lado Insua',
            'slug' => 'dr-tania-lado-insua'
        ),
        array(
            'title' => 'Victor Stojcevski',
            'slug' => 'victor-stojcevski'
        ),
        array(
            'title' => 'Fiona Le Gassick',
            'slug' => 'fiona-le-gassick'
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
