<?php 
            $cards = array(
                [
                    'name' => 'donate',
                    'icon' => 'donate',
                    'excerpt' => 'Make a difference through tax deductible giving that helps us provide assistance where it is needed most',
                    'link' => 'donate'
                ],
                [
                    'name' => 'volunteer',
                    'icon' => 'volunteer',
                    'excerpt' => 'Join our team of volunteers, where your time and effort will make a meaningful impact',
                    'link' => 'volunteer'
                ],
                [
                    'name' => 'partnerships',
                    'icon' => 'partnerships',
                    'excerpt' => 'We welcome organisations and individuals to collaborate with us in extending support to migrants 
                    and refugees',
                    'link' => 'partnerships'
                ]
            );

        ?>
        <?php foreach($cards as $card) {?>
            <article class="flex flex-col align-middle text-center gap-4">
                <img src="<?php echo get_template_directory_uri();?>/images/<?php echo $card['icon'];?>.svg" alt="" class="h-16 w-auto">
                <h3 class="text-2xl font-extrabold capitalize"><?php echo $card['name'];?></h3>
                <p class="min-h-28"><?php echo $card['excerpt'];?></p>
                <a href="<?php echo $card['link'];?>" class="font-bold text-mrct-orange">Learn more</a>
            </article>
        <?php }?>