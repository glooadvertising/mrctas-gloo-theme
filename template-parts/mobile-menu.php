<div id="mobile-menu" class="menu-hide z-50 bg-white flex flex-col justify-between fixed w-full h-full shadow-lg xl:hidden">
    <header class="mobile-menu-header flex justify-between items-center p-6 md:px-12">
        <a href="<?= site_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(  );?>/images/MRCT_logo_horizontal.svg" alt="" class="w-[120px] md:w-[200px]">
        </a>
        <svg class="w-6 fill-mrct-navy-light cursor-pointer" id="close" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
    </header>
    <section class="mobile-menu-content text-mrct-navy-light flex grow flex-col items-start justify-between gap-6 p-6 md:px-12">
        <ul>
            <li class="group py-2"><a href="">Our services</a>
                <section class="hidden transition-all group-hover:flex flex-col items-start cursor-pointer bg-mrct-lilac-light text-white absolute w-full h-full top-0 left-0">
                    <a href="<?php echo site_url('/')?>" class="flex w-full">
                        <header class="hover:bg-mrct-lilac-dark border-b border-mrct-lilac-dark w-full py-8 px-6 gap-6 text-xl font-extrabold flex flex-row items-center justify-start">
                            <svg class="w-6 fill-white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M213.7,256L213.7,256L213.7,256L380.9,81.9c4.2-4.3,4.1-11.4-0.2-15.8l-29.9-30.6c-4.3-4.4-11.3-4.5-15.5-0.2L131.1,247.9  c-2.2,2.2-3.2,5.2-3,8.1c-0.1,3,0.9,5.9,3,8.1l204.2,212.7c4.2,4.3,11.2,4.2,15.5-0.2l29.9-30.6c4.3-4.4,4.4-11.5,0.2-15.8  L213.7,256z"/></svg>
                                Back to main menu
                        </header>
                    </a>
                    <ul class="w-full">
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/accommodation'); ?>">Accomodation</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/aged-and-community-services'); ?>">Aged and community services</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/humanitarian-settlement-program-hsp'); ?>">Humanitarian Settlement Program (HSP)</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/multicultural-youth-tasmania'); ?>">Multicultural Youth Tasmania</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/phoenix-centre'); ?>">Phoenix Centre</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/programs'); ?>">Programs</a></li>
                    </ul>
                </section>
            </li>
            <li class="group py-2"><a href="" class="inline-block group-hover:border-b-2 -group:hover-mb-[2px] border-mrct-orange">Get involved</a>
                <section class="hidden transition-all group-hover:flex flex-col items-start cursor-pointer bg-mrct-lilac-light text-white absolute w-full h-full top-0 left-0">
                    <a href="<?php echo site_url('/')?>" class="flex w-full">
                        <header class="hover:bg-mrct-lilac-dark border-b border-mrct-lilac-dark w-full py-8 px-6 gap-6 text-xl font-extrabold flex flex-row items-center justify-start">
                            <svg class="w-6 fill-white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M213.7,256L213.7,256L213.7,256L380.9,81.9c4.2-4.3,4.1-11.4-0.2-15.8l-29.9-30.6c-4.3-4.4-11.3-4.5-15.5-0.2L131.1,247.9  c-2.2,2.2-3.2,5.2-3,8.1c-0.1,3,0.9,5.9,3,8.1l204.2,212.7c4.2,4.3,11.2,4.2,15.5-0.2l29.9-30.6c4.3-4.4,4.4-11.5,0.2-15.8  L213.7,256z"/></svg>
                                Back to main menu
                        </header>
                    </a>
                    <ul class="w-full">
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/donate'); ?>">Donate</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/volunteer-with-us'); ?>">Volunteer</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/partnerships-and-colaborations'); ?>">Partnerships and colaboration</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/careers'); ?>">Careers</a></li>
                    </ul>
                </section>
            </li>
            <li class="group py-2"><a href="" class="inline-block group-hover:border-b-2 -group:hover-mb-[2px] border-mrct-orange">About us</a>
                <section class="hidden transition-all group-hover:flex flex-col items-start cursor-pointer bg-mrct-lilac-light text-white absolute w-full h-full top-0 left-0">
                    <a href="<?php echo site_url('/')?>" class="flex w-full">
                        <header class="hover:bg-mrct-lilac-dark border-b border-mrct-lilac-dark w-full py-8 px-6 gap-6 text-xl font-extrabold flex flex-row items-center justify-start">
                            <svg class="w-6 fill-white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M213.7,256L213.7,256L213.7,256L380.9,81.9c4.2-4.3,4.1-11.4-0.2-15.8l-29.9-30.6c-4.3-4.4-11.3-4.5-15.5-0.2L131.1,247.9  c-2.2,2.2-3.2,5.2-3,8.1c-0.1,3,0.9,5.9,3,8.1l204.2,212.7c4.2,4.3,11.2,4.2,15.5-0.2l29.9-30.6c4.3-4.4,4.4-11.5,0.2-15.8  L213.7,256z"/></svg>
                                Back to main menu
                        </header>
                    </a>
                    <ul class="w-full">
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/about-us'); ?>">About us</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/our-board'); ?>">Our board</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/publications'); ?>">Publications</a></li>
\                    </ul>
                </section>
            </li>
            <li class="group py-2"><a href="" class="inline-block group-hover:border-b-2 -group:hover-mb-[2px] border-mrct-orange">Get support</a>
                <section class="hidden transition-all group-hover:flex flex-col items-start cursor-pointer bg-mrct-lilac-light text-white absolute w-full h-full top-0 left-0">
                    <a href="<?php echo site_url('/')?>" class="flex w-full">
                        <header class="hover:bg-mrct-lilac-dark border-b border-mrct-lilac-dark w-full py-8 px-6 gap-6 text-xl font-extrabold flex flex-row items-center justify-start">
                            <svg class="w-6 fill-white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M213.7,256L213.7,256L213.7,256L380.9,81.9c4.2-4.3,4.1-11.4-0.2-15.8l-29.9-30.6c-4.3-4.4-11.3-4.5-15.5-0.2L131.1,247.9  c-2.2,2.2-3.2,5.2-3,8.1c-0.1,3,0.9,5.9,3,8.1l204.2,212.7c4.2,4.3,11.2,4.2,15.5-0.2l29.9-30.6c4.3-4.4,4.4-11.5,0.2-15.8  L213.7,256z"/></svg>
                                Back to main menu
                        </header>
                    </a>
                    <ul class="w-full">
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/citizenship'); ?>">Citizenship</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/multicultural-youth-tasmania'); ?>">Young people</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/aged-and-community-service'); ?>">Aged care</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/phoenix-centre'); ?>">Mental health counselling</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/accommodation'); ?>">Accommodation</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/employment-assitance'); ?>">Employment</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/learn-to-drive'); ?>">Learn to drive</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/learn-english'); ?>">Learn English</a></li>
                        <li class="hover:bg-mrct-lilac-dark cursor-pointer p-6 border-b border-mrct-lilac-dark"><a href="<?php echo site_url('/resources'); ?>">Resources</a></li>
                    </ul>
                </section>
            </li>
        </ul>
        <?php mrct_btn('donate', 'donate', 'btn-orange');?>
    </section>
    <footer id="mobile-menu-footer" class="bg-gray-100 text-mrct-navy-light mobile-menu-footer flex flex-col items-center text-center p-6 md:px-12">
        <ul class="flex gap-6 w-full justify-between">
            <li><a id="mobile-search" href="">Search</a></li>
            <li><a href="<?php echo site_url('/contact-us'); ?>">Contact us</a></li>
            <li><a href="<?php echo site_url('/#subscribe'); ?>">Subscribe</a></li>
        </ul>

    </footer>

    
</div>