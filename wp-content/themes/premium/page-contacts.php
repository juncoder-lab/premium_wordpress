<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-md-4 d-flex align-items-center pt-2 pb-2">
			<img style="width: 50px; height: 60px" src="<?php echo get_template_directory_uri() ?>/assets/img/location_outline.png" alt="location">
			<div class="contact_text ms-3">
				<h3>Адрес</h3>
				<p>пр. Мира д. 55 г. Сургут</p>
			</div>
		</div>
		<div class="col-12 col-md-4 d-flex align-items-center pt-3 pb-2">
			<img style="width: 50px; height: 50px" src="<?php echo get_template_directory_uri() ?>/assets/img/phone.png" alt="phone">
			<div class="contact_text ms-3">
				<h3>Телефон</h3>
				<a class="phone_link" href="tel:+7(3462)504-505">+7(3462)504-505</a><br>
				<a class="phone_link" href="tel:+7(3462)504-506">+7(3462)504-506</a>
			</div>
		</div>
		<div class="col-12 col-md-4 d-flex align-items-center pt-2 pb-2">
			<img style="width: 60px; height: 60px" src="<?php echo get_template_directory_uri() ?>/assets/img/clock.png" alt="clock">
			<div class="contact_text ms-3">
				<h3>Режим работы</h3>
				<p>с 9:00 до 21:00</p>
			</div>
		</div>
	</div>
</div>
<div class="container mt-3">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.3207796209028!2d73.4287384!3d61.2568177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4373977b490915e7%3A0x35120ee7622bc1ec!2sPremium!5e0!3m2!1sru!2sru!4v1615811289186!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="container mt-3">
	<div class="row contact_text">
		<div class="col-12 col-md-6 pt-3">
			<h3>Напишите нам</h3>
			<p>Мы с радостью ответим на все Ваши вопросы</p>
		</div>
		<div class="col-12 col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="22" title="Контактная форма 1"]'); ?>
            <!--
            <form action="#">
				<input class="contact_input" type="text" placeholder="Ваше имя">
				<input class="contact_input" type="tel" placeholder="Ваш номер телефона">
				<textarea class="contact_input" name="message_text" id="" cols="30" rows="5" placeholder="Оставьте ваше сообщение"></textarea>
				<input class="contact_button" type="submit">
			</form>
-->
		</div>

	</div>
</div>
<?php get_footer(); ?>
