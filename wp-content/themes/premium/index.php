<?php get_header() ?>
<!--header_end-->
<div class="container-fluid screen1_image p-0">
	<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.jpg" alt="image">
	<div class="screen1_text d-none d-md-block">
		<h1>
			Позволь себе желаемое...
		</h1>
		<!--                <p>-->
		<!--                    В центре эстетики Премиум каждый клиент сможет найти ту услугу, которая подойдет именно ему-->
		<!--                </p>-->
	</div>
	<div class="screen1_button">
		<button type="button" class="btn_online_zapis_light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			Записаться в салон
		</button>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Understood</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal_end -->
<div class="container services">
	<h2 class="text-center mt-5 mb-3">Услуги</h2>
	<div class="row">
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_1.png" class="card-img-top" alt="Медицинская косметология">
				<div class="card-body">
					<p class="card-text">Медицинская косметология</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_2.png" class="card-img-top" alt="Ногтевой сервис">
				<div class="card-body">
					<p class="card-text">Ногтевой сервис</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_3.png" class="card-img-top" alt="Аппаратная косметология">
				<div class="card-body">
					<p class="card-text">Аппаратная косметология</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_4.png" class="card-img-top" alt="Солярий и косметика для загара ">
				<div class="card-body">
					<p class="card-text">Солярий и косметика для загара</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_5.png" class="card-img-top" alt="Парикмахерские услуги">
				<div class="card-body">
					<p class="card-text">Парикмахерские услуги</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_6.png" class="card-img-top" alt="Коррекция бровей и ресниц">
				<div class="card-body">
					<p class="card-text">Коррекция бровей и ресниц</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_7.png" class="card-img-top" alt="Услуги депиляции">
				<div class="card-body">
					<p class="card-text">Услуги депиляции</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_8.png" class="card-img-top" alt="Программы по коррекции фигуры">
				<div class="card-body">
					<p class="card-text">Программы по коррекции фигуры</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_9.png" class="card-img-top" alt="Уход за кожей">
				<div class="card-body">
					<p class="card-text">Уход за кожей</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_10.png" class="card-img-top" alt="Услуга визажиста">
				<div class="card-body">
					<p class="card-text">Услуга визажиста</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_11.png" class="card-img-top" alt="SPA-процедуры и другое">
				<div class="card-body">
					<p class="card-text">SPA-процедуры и другое</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen2_image_12.png" class="card-img-top" alt="Подробнее">
				<div class="card-body">
					<p class="card-text"></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container about">
	<h2 class="text-center mt-5 mb-3">
		Центр эстетики "Премиум"
	</h2>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen3_image_1.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"><span>1.</span> Для тех, кто хочет не только быстро и эффективно похудеть, но и желает избавиться от целлюлита, приобрести изящные формы тела и подтянутую кожу. Каждое мгновение хочется быть уверенной в том, что вы прекрасны.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen3_image_2.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"><span>2.</span> Идеальный мир женщины – тратить лишь нескольких минут на укладку волос утром, беззаботно веселиться на празднике, не переживая о макияже, быть уверенной в том, что внешний вид безупречен. Мы работаем над тем, чтобы так и было всегда.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen3_image_3.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"><span>3.</span> Поход в центр эстетики не должен быть экспериментом с результатом, который невозможно предсказать. Вы всегда должны быть уверены в том, что выйдете из центра более ухоженной и прекрасной. Для достижения такого результата у нас работают профессиональные мастера высокого класса.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen3_image_4.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"><span>4.</span> Наш центр эстетики  предоставляет возможность побаловать себя приятными процедурами по уходу, новой прической или маникюром рядом с домом. Вы сможете снять стресс и расслабиться, привести в порядок кожу, обновить образ в комфортной и доброжелательной атмосфере.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen3_image_5.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"><span>5.</span> Премиум - один из немногих центров эстетики, имеющих лицензию № 83-32-044953 на проведение всех медицинских процедур, которые проводят квалифицированные и дипломированные специалисты. Центр эстетики Премиум - все для клиента!
					</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen3_image_6.png" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid promotions">
	<div class="container">
		<h2 class="text-center">
			Акции
		</h2>
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4  g-4">
			<div class="col">
				<div class="card h-100">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen4_image_1.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Дарим скидку 5% на продукцию “Крымская роза”</h5>
						<p class="card-text">При онлайн-записи на любую нашу процедуру</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen4_image_2.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Криотерапия от 500 рублей</h5>
						<p class="card-text">Криомассаж лица - 500р (10 мин) Криомассаж головы - 500р (10 мин)</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen4_image_1.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Дарим скидку 5% на продукцию “Крымская роза”</h5>
						<p class="card-text">При онлайн-записи на любую нашу процедуру</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/screen4_image_2.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Криотерапия от 500 рублей</h5>
						<p class="card-text">Криомассаж лица - 500р (10 мин) Криомассаж головы - 500р (10 мин)</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container brands">
	<div class="row d-flex justify-content-center align-items-center mb-5">
		<div class="col-lg-2 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_image_1.png" alt="">
		</div>
		<div class="col-lg-2 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_image_2.png" alt="">
		</div>
		<div class="col-lg-2 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_image_3.png" alt="">
		</div>
		<div class="col-lg-2 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_image_4.png" alt="">
		</div>
		<div class="col-lg-2 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_image_5.png" alt="">
		</div>
	</div>
</div>
<!--footer-->
<?php get_footer() ?>
