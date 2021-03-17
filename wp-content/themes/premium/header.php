<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Центр эстетики Премиум</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Playfair+Display:wght@500;600&family=Marck+Script&display=swap" rel="stylesheet">
	<?php
	wp_head();
	?>
</head>
<body>
<div class="container">
	<div class="row align-items-center justify-content-center">
		<div class="col-3 d-flex d-none d-lg-flex justify-content-center align-items-center">
			<img style="width: 19px; height: 19px" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="phone">
			<div class="d-flex flex-column ms-2">
				<a class="phone_link" href="tel:+7(3462)504-505">+7(3462)504-505</a>
				<a class="phone_link" href="tel:+7(3462)504-506">+7(3462)504-506</a>
			</div>
		</div>
		<div class="col-md-6">
			<a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" alt="logo"></a>
		</div>
		<div class="col-3 d-flex d-none d-lg-flex justify-content-center align-items-center">
			<img style="width: 19px" src="<?php echo get_template_directory_uri(); ?>/assets/img/location_outline.png" alt="location">
			<a class="phone_link ms-2" href="#">
				<div>
					пр. Мира д. 55<br>
					г. Сургут
				</div>
			</a>
		</div>
		<!--        <div class="col-3 d-flex justify-content-end">-->
		<!--            <button type="button" class="btn_online_zapis_dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">-->
		<!--                Онлайн запись-->
		<!--            </button>-->
		<!--        </div>-->
	</div>

</div>
<div class="container-fluid menu_bg_color">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="d-flex d-none d-sm-flex d-lg-none justify-content-center align-items-center">
						<img style="width: 19px" src="<?php echo get_template_directory_uri(); ?>/assets/img/location_outline.png" alt="location">
						<a class="phone_link ms-2 text-white" href="#">
							<div>
								пр. Мира д. 55<br>
								г. Сургут
							</div>
						</a>
					</div>
					<div class="d-flex justify-content-center align-items-center d-lg-none">
						<img style="width: 19px; height: 19px" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="phone">
						<div class="d-flex flex-column ms-2">
							<a class="phone_link text-white" href="tel:+7(3462)504-505">+7(3462)504-505</a>
							<a class="phone_link text-white" href="tel:+7(3462)504-506">+7(3462)504-506</a>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Главная</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Услуги
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">Криотерапия</a></li>
									<li><a class="dropdown-item" href="#">Криолиполиз - Zeltiq</a></li>
									<li><a class="dropdown-item" href="#">THERMAGE</a></li>
									<li><a class="dropdown-item" href="#">Омоложение FRAXEL</a></li>
									<li><a class="dropdown-item" href="#">Удаление пигментации Fraxel</a></li>
									<li><a class="dropdown-item" href="#">Удаление растяжек</a></li>
									<li><a class="dropdown-item" href="#">Удаление рубцов</a></li>
									<li><a class="dropdown-item" href="#">ELOS-омоложение</a></li>
									<li><a class="dropdown-item" href="#">ELOS эпиляция</a></li>
									<li><a class="dropdown-item" href="#">ELOS-лифтинг</a></li>
									<li><a class="dropdown-item" href="#">Удаление пигментации Elos</a></li>
									<li><a class="dropdown-item" href="#">Лаеннек</a></li>
									<li><a class="dropdown-item" href="#">Процедуры Holy Land</a></li>
									<li><a class="dropdown-item" href="#">Процедуры Ericson</a></li>
									<li><a class="dropdown-item" href="#">Процедуры на аппарате<br> Skin Master</a></li>
									<li><a class="dropdown-item" href="#">Vela shape II <br> устранение целлюлита</a></li>
									<li><a class="dropdown-item" href="#">Контурная пластика</a></li>
									<li><a class="dropdown-item" href="#">Мезотерапия</a></li>
									<li><a class="dropdown-item" href="#">Биоревитализация</a></li>
									<li><a class="dropdown-item" href="#">Лечение гипергидроза</a></li>
									<li><a class="dropdown-item" href="#">Маникюр и педикюр</a></li>
									<li><a class="dropdown-item" href="#">Парикмахерские услуги</a></li>
									<li><a class="dropdown-item" href="#">Солярий</a></li>
									<li><a class="dropdown-item" href="#">Восковая эпиляция</a></li>
									<li><a class="dropdown-item" href="#">Плазмолифтинг</a></li>
									<li><a class="dropdown-item" href="#">Косметология</a></li>
									<li><a class="dropdown-item" href="#">Эстетическая медицина</a></li>
									<li><a class="dropdown-item" href="#">Пилинг PQAge</a></li>
								</ul>
							</li>
							<!--                            <li class="nav-item dropdown">-->
							<!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
							<!--                                    О нас-->
							<!--                                </a>-->
							<!--                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
							<!--                                    <li><a class="dropdown-item" href="#">Интерьер</a></li>-->
							<!--                                    <li><a class="dropdown-item" href="#">СМИ</a></li>-->
							<!--                                    <li><a class="dropdown-item" href="#">Видео</a></li>-->
							<!--                                    <li><a class="dropdown-item" href="#">Вакансии</a></li>-->
							<!--                                </ul>-->
							<!--                            </li>-->
							<li class="nav-item">
								<a class="nav-link" href="#">О нас</a>
							</li>
							<!--                            <li class="nav-item dropdown">-->
							<!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
							<!--                                    Косметика-->
							<!--                                </a>-->
							<!--                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
							<!--                                    <li><a class="dropdown-item" href="#">EVENSWISS</a></li>-->
							<!--                                </ul>-->
							<!--                            </li>-->
							<li class="nav-item">
								<a class="nav-link" href="#">Цены</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Контакты</a>
							</li>
						</ul>
						<a class="krym_roza_link" href="#">Интернет-магазин центра эстетики "Pemium"</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
