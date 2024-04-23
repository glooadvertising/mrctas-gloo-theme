
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>
<footer class="bg-mrct-navy-light text-mrct-white">
	<div class="px-6 py-24 md:px-12 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-12 gap-12">
		<div class="col-01 col-span-1 md:col-span-2 lg:col-span-3">
			<a href="<?php echo site_url( '/' );?>">
				<img src="<?php echo get_template_directory_uri();?>/images/MRCT_logo_stacked_reverse_noBG.svg" alt="">
			</a>
		</div>
		<div class="col-02 col-span-1  md:col-span-2 lg:col-span-3 flex flex-col lg:flex-col-reverse items-start lg:justify-end gap-4">
			<?php $mrct_tel = '03 6261 0999'; $mrct_email = 'reception@mrctas.org.au'; ?>
			<?php mrct_btn('contact us', '/contact-us', 'btn-trans' )?>
			<span>
				<p><span>Phone:</span> <a href="tel:<?php echo $mrct_tel; ?>" class="text-mrct-ochre-light hover:text-mrct-ochre-dark"><?php echo $mrct_tel; ?></a></p>
				<p><span>Email:</span> <a href="mailto:<?php echo $mrct_email; ?>" class="text-mrct-ochre-light hover:text-mrct-ochre-dark"><?php echo $mrct_email; ?></a></p>
			</span>
		</div>
		<div class="col-03 col-span-1 md:col-span-2 lg:col-span-3 grid lg:grid-cols-1 xl:grid-cols-5 text-sm gap-4">
			<img src="<?php echo get_template_directory_uri();?>/images/NationalInterpreterLogo.svg" alt="" class="col-span-1 w-[120px]">
			<span class="flex flex-col col-span-4">
				<h3 class="font-bold">Talk to us with an interpreter</h3>
				<p class="mb-4 font-extralight">Phone TIS <a href="tel:131 450" class="text-mrct-ochre-light hover:text-mrct-ochre-dark">131 450</a> and tell them your language.</p>
				<p class="mb-4 font-extralight">Tell the interpreter your name and that you're calling Migrant Resource Centre Tasmania: <a href="tel:<?php echo $mrct_tel; ?>" class="text-mrct-ochre-light hover:text-mrct-ochre-dark"><?php echo $mrct_tel; ?></a></p>
			</span>
		</div>
		<div class="col-04 col-span-1 md:col-span-2 lg:col-span-3 text-sm">
			<p class="mb-4 font-extralight">
				MRC Tas acknowledges the palawa/pakana people as traditional custodians of the lands throughout lutruwita/Tasmania on which we work. We pay respect to elders past and present and
				recognise their continuing connection with country and community.
			<br><br>
				MRC Tas celebrates all diversity and is committed to inclusive practice
			</p>
		</div>
	</div>
	<div class="px-6 md:px-12 py-8 bg-mrct-navy-dark mx-auto  text-left text-mrct-white flex flex-col md:flex-row justify-start items-start lg:items-center gap-6">
		<a href="/privacy-policy">Prvacy policy</a> &copy; <?php echo date_i18n( 'Y' );?> <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
