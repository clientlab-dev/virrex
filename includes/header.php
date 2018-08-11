<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Virrex</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimal-ui"/>

	<link rel="stylesheet" href="css/critical.min.css" />
</head>
<body>


<?php 
	/*
	@arOprions
		pageColor => 'header__wrap_transparent' || 'header__wrap_transparent_blue' || 'header__wrap_transparent_purpure' || 'header__wrap_transparent_green',
		headerTheme => 'header-dark', 'header-light'
	*/
function insert_header($arOptions){ ?>
<div class="header__wrap <?php echo $arOptions['pageColor']; ?>">
	<div class="wrap">
		<div class="header <?php echo $arOptions['headerTheme']; ?>">
				<div class="header__logo">
					<a href="/">
						<div class="logo__img logo__img_dark">
							<img width="94" src="assets/img/logo_dark.svg" alt="virrex logo" />
						</div><!-- /.logo__img logo__img_dark -->
						<div class="logo__img logo__img_light">
							<img width="94" src="assets/img/logo_light.svg" alt="virrex logo" />
						</div><!-- /.logo__img logo__img_light -->
					</a>
				</div><!-- /.header__logo -->

				<button class="mobile-menu-btn js-mobile-menu-btn __mobile-menu-btn_active">
					<div class="mobile-menu-btn__line"></div><!-- /.mobile-menu-btn__line -->
					<div class="mobile-menu-btn__line"></div><!-- /.mobile-menu-btn__line -->
					<div class="mobile-menu-btn__line"></div><!-- /.mobile-menu-btn__line -->
				</button>
				<div class="mobile-menu-body">
					<div class="header__nav">
						<nav>
							<ul>
								<li class="nav__el nav__el-has-child"><a href="#">Продукты</a>
									<ul class="nav__child">
										<li class="nav__child__el">
											<a href="#">
													<img class="nav__child__el__icon" src="assets/img/submenu_icons/walet.svg" height="48" width="48" alt="" />
													<span class="nav__child__el__title">Кошелек</span>
													<span class="nav__child__el__description">
														Безопасный онлайн-кошелек нового поколения
													</span>
											</a>
										</li><!-- /.nav__child__el -->
										<li class="nav__child__el">
											<a href="#">
													<img class="nav__child__el__icon" src="assets/img/submenu_icons/contributions.svg" height="48" width="48" alt="" />
													<span class="nav__child__el__title">Вклады</span>
													<span class="nav__child__el__description">
														Умный процент начисления прибыли
													</span>
											</a>
										</li><!-- /.nav__child__el -->
										<li class="nav__child__el">
											<a href="#">
													<img class="nav__child__el__icon" src="assets/img/submenu_icons/trade.svg" height="48" width="48" alt="" />
													<span class="nav__child__el__title">Торговля</span>
													<span class="nav__child__el__description">
														Обмен, покупка и продажа криптовалюты без рисков
													</span>
											</a>
										</li><!-- /.nav__child__el -->
										<li class="nav__child__el">
											<a href="#">
													<img class="nav__child__el__icon" src="assets/img/submenu_icons/virrex.svg" height="48" width="48" alt="" />
													<span class="nav__child__el__title">
														ICO
													</span>
													<span class="nav__child__el__description">
														Успей купить VX токены проекта на Pre Sale
													</span>
											</a>
										</li><!-- /.nav__child__el -->
									</ul>

								</li><!-- /.nav__el -->
								<li class="nav__el"><a href="#">Мерчант</a></li><!-- /.nav__el -->
								<li class="nav__el"><a href="#">Бизнес</a></li><!-- /.nav__el -->
								<li class="nav__el"><a href="#">О компании</a></li><!-- /.nav__el -->
								<li class="nav__el"><a href="#">Новости</a></li><!-- /.nav__el -->
								<li class="nav__el"><a href="#">FAQ</a></li><!-- /.nav__el -->
							</ul>
						</nav>
					</div><!-- /.header__nav -->

					<div class="header__personal ">
						<a href="#" class="btn btn_round">Вход</a>
						<div class="lang-switcher js-lang-switcher">
							<div tabindex="0" class="btn btn_link lang-switcher__handle">
								<span class="current-lang">RU</span>
								
								<div class="lang-switcher__body">
								    <div class="lang-switcher__dropdown-popup">
								        <ul class="dropdown-popup__popup-list">
								            <li class="popup-list__popup-item"><a href="#">English</a></li>
								            <li class="popup-list__popup-item popup-list__popup-item--active"><a href="#">Русский</a></li>
								            <li class="popup-list__popup-item"><a href="#">Deutsch</a></li>
								            <li class="popup-list__popup-item"><a href="#">Italiano</a></li>
								        </ul>
								    </div>
								</div><!-- /.lang-switcher__body -->
							</div>
						</div><!-- /.lang-switcher js-lang-switcher -->
						

					</div><!-- /.header__personal -->
				</div><!-- /.mobile-menu-body -->
		</div><!-- /.header -->
	</div><!-- /.wrap -->
</div><!-- /.header__wrap -->

<?php } ?>



