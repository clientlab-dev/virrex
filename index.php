<?php include('header.php'); ?>
<div class="header__wrap header__wrap_transparent __header__wrap_transparent_blue __header__wrap_transparent_purpure __header__wrap_transparent_green">
	<div class="wrap">
		<div class="header __header-dark header-light">
				<div class="header__logo">
					<div class="logo__img logo__img_dark">
						<img width="94" src="assets/img/logo_dark.svg" alt="virrex logo" />
					</div><!-- /.logo__img logo__img_dark -->
					<div class="logo__img logo__img_light">
						<img width="94" src="assets/img/logo_light.svg" alt="virrex logo" />
					</div><!-- /.logo__img logo__img_light -->
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
						<a href="#" class="btn btn_link">RU</a>
					</div><!-- /.header__personal -->
				</div><!-- /.mobile-menu-body -->
		</div><!-- /.header -->
	</div><!-- /.wrap -->
</div><!-- /.header__wrap -->


<div class="hero hero-fill hero-fill_blue">
	<div class="wrap">
		<div class="text-with-right-illustration text-with-right-illustration_white">
				<h1 class="text-with-right-illustration__title">Virrex Cryptocurrency Digital Bank</h1><!-- /.title -->
				<div class="text-with-right-illustration__description">
					Безопасное технологическое решение, сочетающее в себе функциональное наполнение классического банка — хранение, приумножение и обмен, с поддержкой альтернативного способа инвестирования на рынке цифровых валют
				</div><!-- /.description -->
				<div class="text-with-right-illustration__action-b">
					<button class="btn btn_fill btn_fill_green btn_shadow"><span class="btn__text">ОТКРЫТЬ СЧЕТ</span></button>
					<button class="btn btn_icon btn_icon-white">
							<img class="btn__ico" src="assets/img/btn_icon/play.svg" height="25" width="25" alt="" />
						<span class="btn__text">СМОТРЕТЬ ВИДЕО</span>
					</button>
				</div><!-- /.action-b -->

				<div class="text-with-right-illustration__illustration">
					<img src="assets/img/ilustrations/mainpage1.png" height="554" width="446" alt="" />
				</div><!-- /.text-with-right-illustration__illustration -->
		</div><!-- /.text-with-right-illustration -->
	</div><!-- /.wrap -->
</div><!-- /.hero -->

<?php include('wallets.php'); ?>

<?php include('footer.php'); ?>