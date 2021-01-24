<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">	
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet"> 
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<style> [data-sr] { visibility: hidden; } </style>
	</head>
	<body <?php body_class(); ?>>
		<?php
		$current_home_page = 5;
		?>
		<!-- wrapper -->
		<div class="wrapper">
			<header class="header-wrapper" id="header" role="banner">
				<div class="header">
					<div class="logo"><a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-agro.png"></a>
					</div>
					<div class="menu">
						<div class="menu-top">
							<div class="lang-switch">
								<div class="ua"><a href="javascript:void(0)">ua</a></div>
								<div class="ru active"><a href="javascript:void(0)">ru</a></div>
							</div>
							<div class="phone-wrapper">
								<ul class="phone-block">
									<li class="">+38 (067) 544-68-35</li>
									<li class="">+38 (067) 544-68-35</li>
								</ul>
								<a class="callback" href="javascript:void(0)">Обратный звонок</a>
							</div>
							<div class="burger-wrapp">
								<div class="burger">
									<span class="burger-line burger-line-first"></span>
									<span class="burger-line burger-line-second"></span>
									<span class="burger-line burger-line-third"></span>
									<span class="burger-line burger-line-fourth"></span>
								</div>
								<span class="burger-menu">Меню</span>
							</div>
						</div>
						<div class="hr"></div>
						<div class="mobile-menu">
							<div class="main-menu-wrapper">
								<ul class="main-menu">
									<li class=""><a href="/about-company/">О нас</a></li>
									<li class=""><a href="javascript:void(0)">Услуги</a></li>
									<li class=""><a href="javascript:void(0)">Проекты</a></li>
									<li class=""><a href="javascript:void(0)">Новости</a></li>
									<li class=""><a href="javascript:void(0)">Документы</a></li>
									<li class=""><a href="javascript:void(0)">Отзывы</a></li>
									<li class=""><a href="/contacts/">Контакты</a></li>
								</ul>
								<div class="form-search">
									<form>
	   									<input type="submit" value="">
	   									<input type="search" name="q" placeholder=" Поиск">
	  								</form>
								</div>
							</div>
							<div class="menu-bottom">
								<div class="hr"></div>
								<div class="wrapp-mobile-menu">
									<ul class="phone-block">
										<li class="">+38 (067) 544-68-35</li>
										<li class="">+38 (067) 544-68-35</li>
									</ul>
									<div class="social-wrapper">
										<div class="h4">Мы в соцсетях:</div>
										<ul class="social-menu">
											<li class="social-viber"><a href="javascript:void(0)"></a></li>
											<li class="social-fb"><a href="javascript:void(0)"></a></li>
											<li class="social-wapp"><a href="javascript:void(0)"></a></li>
											<li class="social-tg"><a href="javascript:void(0)"></a></li>
											<li class="social-inst"><a href="javascript:void(0)"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>