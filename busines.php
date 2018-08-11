<?php include('includes/header.php'); ?>


<?php 
$headerOptions = array(
		'pageColor' => 'header__wrap_transparent',
		'headerTheme' => 'header-light'
	);

insert_header($headerOptions); 
?>


<div class="hero hero-fill hero-skew hero-fill_dark-blue">
	<div class="wrap">
		<div class="text-with-right-illustration text-with-right-illustration_white js-svg-lines svg-lines_blue-2">
				<h1 class="text-with-right-illustration__title">Бизнес</h1><!-- /.title -->
				<div class="text-with-right-illustration__description">
					Приглашайте своих друзей, обучайте основам <br /> криптовалютного рынка, зарабатывайте до 23% <br />от оборота вашей структуры
				</div><!-- /.description -->
				<div class="text-with-right-illustration__action-b">
					<button class="btn btn_fill btn_fill_blue btn_shadow"><span class="btn__text">СТАТЬ ПАРТНЕРОМ</span></button>
				</div><!-- /.action-b -->

				<div class="text-with-right-illustration__illustration">
					<img src="assets/img/ilustrations/busines.png" alt="" />
				</div><!-- /.text-with-right-illustration__illustration -->
		</div><!-- /.text-with-right-illustration -->
	</div><!-- /.wrap -->
	<div class="hero-skew__polygon">
		<div class="hero-skew__polygon__left-grad"></div><!-- /.hero-skew__polygon__left-grad -->
		<div class="hero-skew__polygon__right-grad"></div><!-- /.hero-skew__polygon__rigth-grad -->
	</div><!-- /.hero-skew__polygon -->
</div><!-- /.hero -->
 

<section class="white-content">
<div class="wrap">
	<div class="heading heading_center heading_h2">
		<div class="heading__text">
			Открывайте мир криптовалюты вместе с <br />
			Virrex Cryptocurrency Digital Bank
		</div><!-- /.heading__text -->
	</div><!-- /.heading heading_h2 -->


	<div class="benefits-list">
		<div class="cols-3">
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/statuses.png" alt="" />
					</div><!-- /.img -->
					<div class="title">
						11 карьерных статусов, ведущих к финансовым высотам
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/linear_marketing.png" alt="" />
					</div><!-- /.img -->
					<div class="title">
						Традиционный многоуровневый линейный маркетинг
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/partners_reword.png"alt="" />
					</div><!-- /.img -->
					<div class="title">
						Щедрые партнерские вознаграждения за активное участие в продвижении и развитии нашего банка
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
		</div><!-- /.cols-3 -->
	</div><!-- /.benefits-list -->

	<hr />

	<div class="heading heading_h2 heading_center">
		<div class="heading__text">
			Партнерская программа
		</div><!-- /.heading__text -->
		<div class="heading__sub">
			Карьерные статусы предусмотрены как для активных партнеров, развивающих структуру и увелищивающих личный товарооборот, так и для инвесторов, заинтересованных исключительно в дивидендах.
		</div><!-- /.heading__sub -->
	</div><!-- /.heading heading_h2 -->

	<div class="adaptive-table adaptive-table_no-wrap" data-simplebar>
		<table class="adaptive-table__table">
			<thead>
				<tr>
					<th>Статус</th>
					<th>Депозит</th>
					<th>Оборот</th>
					<th>1 ур.</th>
					<th>2 ур.</th>
					<th>3 ур.</th>
					<th>4 ур.</th>
					<th>5 ур.</th>
					<th>6 ур.</th>
					<th>7 ур.</th>
					<th>8 ур.</th>
					<th>9 ур.</th>
					<th>ВСЕ</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i=0; $i < 10; $i++) { ?>
				<tr>
					<td>Start <?php echo $i; ?></td>
					<td>10 $</td>
					<td>0 $</td>
					<td>5 %</td>
					<td>10 %</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div><!-- /.adaptive-table -->

	<div class="heading heading_h2 heading_center">
		<div class="heading__sub">
			Для получения вознаграждений за статус необходимо иметь в структуре заявленное количество<br /> партнеров определенного уровня
		</div><!-- /.heading__sub -->
	</div><!-- /.heading heading_h2 -->

	<div class="adaptive-table adaptive-table_no-wrap" data-simplebar>
		<table class="adaptive-table__table">
			<thead>
				<tr>
					<th>Описание</th>
					<th>Holder</th>
					<th>Manager</th>
					<th>Partner</th>
					<th>Leader</th>
					<th>Grand Leader</th>
					<th>Trader</th>
					<th>Grand Trader</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Премия</td>
					<td>200 $</td>
					<td>500 $</td>
					<td>2 000 $</td>
					<td>5 000 $</td>
					<td>10 000 $</td>
					<td>20 000 $</td>
					<td>50 000 $</td>
				</tr>
				<tr>
					<td>Условие</td>
					<td>Investor (3)</td>
					<td>Holder (3)</td>
					<td>Manager (3)</td>
					<td>Partner (3)</td>
					<td>Leader (3)</td>
					<td>Grand Leader (2)</td>
					<td>Treader (2)</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.adaptive-table -->
</div><!-- /.wrap -->
</section><!-- /.white-content -->


<section class="gradient-before-footer gradient-before-footer--blue">
	<div class="wrap">
		<div class="gradient-before-footer__content">
		<p class="gradient-before-footer__title">С нами двигаться в эру цифровой экономики - легче</p>
		<a href="#" class="btn btn_fill btn_fill_blue btn_shadow"><span class="btn__text">СТАТЬ ПАРТНЕРОМ</span></a>
		</div>
	</div>
</section>


<?php include('includes/footer.php'); ?>