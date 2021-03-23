<div class="container-fluid footer_bg">
	<div class="container">
		<div class="row d-flex justify-content-between align-items-center flex-column flex-md-row">
			<div class="col-3 d-none d-md-block">
				<?php
				wp_nav_menu( [
					'theme_location'  => 'top_menu',
					'menu'            => 'main_menu',
					'container'       => false,
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
					'depth'           => 0,
				] );
				?>
				<a class="krym_roza_link" href="#">Интернет-магазин центра эстетики “Premium”</a>
			</div>
			<div class="col-12 col-md-5">
                <a href="<?php echo home_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" alt="logo"></a>
			</div>
			<div class="col-10 col-md-3">
				<div class="d-flex align-items-center">
					<img style="width: 19px; height: 19px" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="phone">
					<div class="d-flex flex-column ms-2">
						<a class="phone_link text-white" href="tel:+7(3462)504-505">+7(3462)504-505</a>
						<a class="phone_link text-white" href="tel:+7(3462)504-506">+7(3462)504-506</a>
					</div>
				</div>
				<div class="d-flex align-items-center mt-3">
					<img style="width: 19px" src="<?php echo get_template_directory_uri(); ?>/assets/img/location_outline.png" alt="location">
					<a class="phone_link ms-2 text-white" href="<?php echo home_url('/contacts'); ?>">
						<div>
							пр. Мира д. 55<br>
							г. Сургут
						</div>
					</a>
				</div>
				<div class="d-flex align-items-center mt-3">
					<img style="width: 24px" src="<?php echo get_template_directory_uri(); ?>/assets/img/clock.png" alt="clock">
					<a class="phone_link ms-2 text-white" href="<?php echo home_url('/contacts'); ?>">
						<div>
							с 9:00 до 21:00
						</div>
					</a>
				</div>
				<div class="mt-5">
					<button type="button" class="btn_online_zapis_light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						Записаться в салон
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
wp_footer();
?>
</body>
</html>
