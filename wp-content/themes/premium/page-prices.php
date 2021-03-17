<?php
/*
Template Name: Prices
*/
?>
<?php get_header(); ?>
<div class="container">
	<h1>
		Цены на услуги
	</h1>
	<div class="row">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active price_tab" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Услуги парикмахерского зала</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link price_tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link price_tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<table class="table table-striped">
					<thead>
					<tr>
						<th scope="col">Услуга</th>
						<th scope="col" class="text-center">Стоимость(руб)</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td colspan="2" class="text-center"><strong>Стрижка-женский зал</strong></td>
					</tr>
					<tr>
						<td>Короткие волосы</td>
						<td class="text-center">1750</td>
					</tr>
					<tr>
						<td>Волосы длинной свыше 25 см</td>
						<td class="text-center">1900</td>
					</tr>
					<tr>
						<td colspan="2" class="text-center"><strong>Стрижка-мужской зал</strong></td>
					</tr>
					<tr>
						<td>Стрижка</td>
						<td class="text-center">1750</td>
					</tr>
					<tr>
						<td>Тонирование</td>
						<td class="text-center">1100</td>
					</tr>
					<tr>
						<td>Массаж головы</td>
						<td class="text-center">150</td>
					</tr>
					<tr>
						<td>Стрижка детская</td>
						<td class="text-center">500-700</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
			<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>