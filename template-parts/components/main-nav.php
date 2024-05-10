<nav id="main-nav">
    <ul class="flex gap-8">
        <li id="menu-link-01" class="menu-link">
            <a href="">Our services</a>
            <section id="mega-menu-01" class="bg-mrct-white text-mrct-navy-light w-full absolute left-0 top-[142px] p-24 hidden grid-cols-6 gap-24 shadow-lg">
                <div class="col-01 col-span-2 flex flex-col gap-6">
                    <h3 class="font-bold text-6xl text-gray-100">Our services</h3>
                </div>
                <div class="col-01 col-span-2 flex flex-col gap-6">
                    <!-- <h3 class="font-extrabold">Volunteer</h3> -->
                    <ul class="gap-2 flex flex-col">
                        <li><a href="<?php echo site_url( '/accommodation' );?>">Accommodation</a></li>
                        <li><a href="<?php echo site_url( '/aged-and-community-services' );?>">Aged and Community Services</a></li>
                        <li><a href="<?php echo site_url( '/humanitarian-settlement-program-hsp' );?>">Humanitarian Settlement Program (HSP)</a></li>
                        <li><a href="<?php echo site_url( '/multicultural-youth-tasmania' );?>">Multicultural Youth Tasmania</a></li>
                        <li><a href="<?php echo site_url( '/phoenix-centre' );?>">Phoenix Centre</a></li>
                        <li><a href="<?php echo site_url( '/programs' );?>">Programs</a></li>
                    </ul>
                </div>
            </section>
        </li>
        <li id="menu-link-02" class="menu-link">
            <a href="">Get involved</a>
            <section id="mega-menu-02" class="bg-mrct-white text-mrct-navy-light w-full absolute left-0 top-[142px] p-24 hidden group-hover:grid grid-cols-6 gap-24 shadow-lg">
                <div class="col-01 col-span-2 flex flex-col gap-6">
                    <h3 class="font-bold text-6xl text-gray-100">Get involved</h3>
                </div>
                <div class="col-01 col-span-2 flex flex-col gap-6">
                    <!-- <h3 class="font-extrabold">Volunteer</h3> -->
                    <ul class="gap-2 flex flex-col">
                        <li><a href="<?php echo site_url( '/donate' );?>">Donate</a></li>
                        <li><a href="<?php echo site_url( '/volunteer-with-us' );?>">Volunteer</a></li>
                        <li><a href="<?php echo site_url( '/partnerships-and-collaborations' );?>">Partnerships and Collaborations</a></li>
                        <li><a href="<?php echo site_url( '/careers' );?>">Careers</a></li>
                    </ul>
                </div>
            </section>
        </li>
        <li id="menu-link-03" class="menu-link">
            <a href="">About us</a>
            <section id="mega-menu-03" class="bg-mrct-white text-mrct-navy-light w-full absolute left-0 top-[142px] p-24 hidden group-hover:grid grid-cols-6 gap-24 shadow-lg">
                <div class="col-01 col-span-2 flex flex-col gap-6">
                    <h3 class="font-bold text-6xl text-gray-100">About us</h3>
                </div>
                <div class="col-01 col-span-2 flex flex-col gap-6">
                    <!-- <h3 class="font-extrabold">Volunteer</h3> -->
                    <ul class="gap-2 flex flex-col">
                        <li><a href="<?php echo site_url( '/about-us' );?>">About us</a></li>
                        <li><a href="<?php echo site_url( '/our-board' );?>">Our board</a></li>
                        <li><a href="<?php echo site_url( '/publications' );?>">Publications</a></li>
                    </ul>
                </div>
            </section>
        </li>
        <li id="menu-link-04" class="menu-link">
            <a href="">Get Support</a>
            <section id="mega-menu-04" class="bg-mrct-lilac-light text-mrct-white w-full absolute left-0 top-[142px] p-24 hidden grid-cols-6 grid-rows-1 gap-24 shadow-lg">
                <div class="col-01 col-span-3 flex flex-col gap-6">
                    <h3 class="font-bold text-3xl">If you are a migrant or refugee looking for support, we are here to help!</h3>
                </div>
                <?php get_template_part( 'template-parts/menu-groups/x' ); ?>
            </section>
        </li>
    </ul>
</nav>