<?php /* Template Name: Contacts */ get_header(); ?>

	<main>
		<!-- section -->
		<section class="contact-page">
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
					<div class="block-breadcrumbs">
						<a href="/"><span>Главная</span></a>
						<a href="/contacts/" class="active"><span>Контакты</span></a>
					</div>
				</div>
				<div class="row-contant">
					<div class="block-contact-text">
						<div class="title-contact-text">
							<p>У вас есть вопросы по поводу наших услуг? </p>
						</div>
						<div class="contact-text-coll">
							<div class="contact-text">
								<p>Юридический адрес:</p>
								<p>36020, Полтавська обл., м. Полтава,</p>
								<p>вул. Котляревського, буд.1/27, кім.614</p>
							</div>
							<div class="contact-text">
								<p>Фактический адрес:</p>
								<p>36002, Полтавська обл., м.Полтава,</p>
								<p>вул.Довженка, буд.2ж</p>
							</div>
						</div>	
						<div class="contact-text-coll">
							<div class="contact-text">
								<p>Телефон:</p>
								<div class="contact-tel">
									<p>+38 ( 067 ) 544-68-35</p>
									<div class="contact-icon tg"></div>
									<div class="contact-icon wapp"></div>
								</div>
								<div class="contact-tel">
									<p>+38 ( 053 ) 261-32-70</p>
									<div class="contact-icon viber"></div>
									<div class="contact-icon tg"></div>
									<div class="contact-icon wapp"></div>
								</div>
							</div>
							<div class="contact-text">
								<p>E-mail</p>
								<p>office@agropro.in.ua</p>
							</div>
						</div>	
					</div>
					<div class="block-contact-form">
						<div class="title-form">
							<p>Хотите оценить проект или идеи?</p>
							<p>Напишите нам или позвоните</p>
						</div>
						<div role="form" class="form" >
							<form action="/contacts/#wpcf7-f530-o1" method="post" class="form-init" >
								<div class="form-coll">
									<input type="text" name="name" class="form-input form-input-name" aria-required="true" placeholder="Имя" >
									<input type="tel" name="tel" class="form-input form-input-tel" placeholder="+38 (___) ___-____
		">
									<input type="email" name="email" class="form-input form-input-email" aria-required="true" placeholder="E-mail">
								</div>	
								<div class="form-coll">	
									<textarea name="message" class="form-input-textarea" placeholder="Ваше сообщение"></textarea>
									<div class="upload-container">
										<input type="submit" value="Отправить" class="form-input-submit">
										<input type="file" name="file" id="file-input" class="form-input-file" placeholder="Прикрепить файл">
										<label for="file">Прикрепить файл</label>
									</div>
								</div>	
							</form>
						</div>
					</div>
				</div>
			<?php 
				$location = get_field('map');

				if( !empty($location) ){
				?>
				<div class="block-map">
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
				</div>
			<?php 
				} 
			?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
