<?php
/*
  Template Name: About US Editable
 */
?>

<?php get_header(); ?>

<div id="content" class="about-content">

    <div class="container">
       <?php if (have_posts()):
       		while (have_posts()): the_post(); ?>
            <h1 class="page-title section-header text-center"><?php the_title(); ?></h1>
	   <div class="about-slider-wraper">
		   <div id="about-slider">
		   		<?php the_field('about-slider-content'); ?>
				<?php /*<div class="about-slider-item"> [slideritem]
				   <div class="row">
						<div class="col-md-6"> [slideritemtext header=""]
							<h2 class="about-slider-h">Наша клиника</h2>
							<p class="about-slider-p">
								Мы всегда рады новым и уже существующим клиентам. Мы ценим всех и каждого. Златадерма - это место, где вы сможете подобрать процедуру на любой вкус. Наш приветливый персонал всегда с удовольствием ответит на любые ваши вопросы. У нас также можно приобрести подарочный сертификат для своих родных и близких людей.
							</p>
						</div> [/slideritemtext]
						<div class="col-md-6"> [slideritemphoto]
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-s-1.jpg" />
						</div> [/slideritemphoto]
				   </div>
				</div> [/slideritem]*/?>
			</div>
			<div class="row" id="slider-nav">
					<div class="col-md-6">
						<?php /* slider images icons will be inseted here by javascript after page rendering, do no remove this block */?>
					</div>
			</div>
		</div>
    </div>

	<div class="advantage-section">
		<div class="container">
			<h2 class="advantage-h2 section-header text-center"><?php the_field('about-advantages-section-header'); ?></h2>
			<div class="advantages-items">
				<div class="corner-block corner-top-left"></div>
				<div class="corner-block corner-top-right"></div>
				<div class="corner-block corner-bottom-left"></div>
				<div class="corner-block corner-bottom-right"></div>
				<?php the_field('about-advantages-section-content'); ?>
				<?php /*<div class="row"> [advantagerow]
					<div class="col-md-6"> [advantageitem header=""]
						<div class="advantage-item">
							<h3 class="advantage-h3">Сертифицированные профессионалы</h3>
							<p class="advantage-p">
								Доктора клиники являются настоящими профессионалами своего дела. У нас работают ведущие врачи Николаева. Но это не мешает им постоянно повышать свою квалификацию, обучаясь новых техникам и методикам.
							</p>
						</div>
					</div> [/advantageitem]
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Широкий спектр услуг</h3>
							<p class="advantage-p">
								Златадерма - это безусловный лидер по предоставлению огромного множества услуг в сфере косметологи (аппаратной, инъекционной и эстетической), гинекологии и пластической хирургии (в том числе и интимной пластике).
							</p>
						</div>
					</div>
				</div> [/advantagerow]*/ ?>
			</div>
		</div>
	</div>
	<div class="about-you-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="about-you-h2 section-header"><div><?php the_field('about-you-section-header'); ?> <span class="rhombus"></span></div></h2>
					<?php the_field('about-you-section-content'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="why-section">
		<div class="container">
			<h2 class="why-h2 section-header"><div>Почему выбирают Златадерму <span class="rhombus"></span></div></h2>
			<div class="row">
				<div class="col-md-3">
					<div class="why-icon icon-dollar"></div>
					<h3 class="why-h3 why-h3-1">Всегда <span>лояльные</span> цены</h3>
				</div>
				<div class="col-md-3">
					<div class="why-icon icon-cert"></div>
					<h3 class="why-h3 why-h3-2">Сертифицированные <span>специалисты</span> высшего уровня</h3>
				</div>
				<div class="col-md-3">
					<div class="why-icon icon-reputation"></div>
					<h3 class="why-h3 why-h3-3">Безупречная <span>репутация</span></h3>
				</div>
				<div class="col-md-3">
					<div class="why-icon icon-smile"></div>
					<h3 class="why-h3 why-h3-4">Персональный <span>подход</span> к каждому клиенту</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="us-section">
		<div class="container">
			<h2 class="us-h2 section-header"><div><?php the_field('about-us-section-header'); ?> <span class="rhombus"></span></div></h2>
			<div class="row">
				<div class="col-md-8">
					<?php the_field('about-us-section-content'); ?> 
				</div>
				<div class="col-md-4">
					<?php 
						$about_us_section_image = get_field('about-us-section-photo');
						if (!empty($about_us_section_image)): ?>
							<img src="<?php echo $about_us_section_image['url']; ?>" alt="<?php echo $about_us_section_image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
			<h3 class="us-slogan text-center"><?php the_field('about-us-section-signature'); ?></h3>
			<div class="us-sign">
				<?php 
					$about_us_section_signature = get_field('about-us-section-signature-photo');
					if (!empty($about_us_section_signature)): ?>
						<img src="<?php echo $about_us_section_signature['url']; ?>" alt="<?php echo $about_us_section_signature['alt']; ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="certificate-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<img src="<?php bloginfo('template_url'); ?>/img/sert-1.png" alt="клиника пластической хирургии" />
				</div>
				<div class="col-xs-6">
					<img src="<?php bloginfo('template_url'); ?>/img/sert-2.png" alt="клиника косметологии" />
				</div>
			</div>
		</div>
	</div>
	<div class="doctors-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="acardeon-h2 section-header"><div><?php the_field('about-doctors-section-header'); ?> <span class="rhombus"></span></div></h2>
					<div id="doctors-items">
						<?php the_field('about-doctors-section-content'); ?>
						<?php /* <div class="doctor-item"> [doctoritem]
						  <div class="doctor-intro"> [doctorintro name="" spec=""]
						  	<div class="row">
						  		<div class="col-sm-2">
									<img src="<?php bloginfo('template_url'); ?>/img/doc-1.png" alt="отзывы о Златадерме" /> [[content of doctorintro section]]
								</div>
						  		<div class="col-sm-10">
									<div class="name">Константинов Артур Иванович</div>
									<div class="spec">Врач-хирург</div>
								</div>
							</div>
						  </div> [/doctorintro]
						  <div class="doctor-descr"> [doctordescr]
							<div class="education"> [doctoreducation]
								<div class="row">
									<div class="col-md-12">
										<h3>Образование:</h3>
										<ul>
											<li>Одесский государственный медицинский университет – 1997 г., специальность: лечебное дело, квалификация: доктор;</li>
											<li> Одесский государственный медицинский университет – 1999 г., специальность: хирургия;</li>
											<li>Аттестация при управлении охраны здоровья ОГА – 2005 г., специальность: хирургия, квалификация: хирург —  І категории;</li>
											<li>Харьковская медицинская академия последипломного образования – 2007 г., специальность: эндоскопия;</li>
											<li>Харьковская медицинская академия последипломного образования, повышение квалификации – 2007 г., специальность: хирургия;</li>
											<li>Национальный медицинский университет им. О.О.Богомольца – 2015 г., специальность: пластическая и реконструктивная хирургия;</li>
											<li>Аттестация при управлении охраны здоровья ОГА – 2016 г., специальность: хирургия, квалификация: хирург —  высшей категории.</li>
										</ul>
									</div>
								</div>
							</div> [/doctoreducation]
							<div class="exper-certs-block"> [doctoradditional]
								<div class="row">
									<div class="col-md-4"> [doctorexperience]
										<h3>Опыт работы:</h3>
										<ul>
											<li>с 1997 г. по 1999 г. – Николаевский хирургический центр;</li>
											<li> с 1999 г. по 2001 г. – БСМП, 1-е хирургическое отделение;</li>
											<li>с 2001 г. и по настоящее время – Николаевская центральная районная больница, хирургическое отделение.</li>
										</ul>
									</div> [/doctorexperience]
									<div class="col-md-8"> [doctorcertificates]
										<h3>Сертификаты:</h3>
										<ul >
											<li>член Всеукраинской ассоциации пластических, реконструктивных и эстетических хирургов;</li>
											<li>мастер класс «реконструкция молочных желез, коррекция птоза верхнего века», Львов, 2016;</li>
											<li> мастер класс «Использование имплантов Microthane при эндопротезирование женских грудей» Киев,2015;</li>
											<li>треннинг-курс «Липофилинг, микро-, нано-, малоинвазивные технологии омоложения, Киев, 2016.</li>
											<li>International society of aesthetic plastic surgery – attended the ISAPS Visiting Professor Program Kiev,2016</li>
											<li>International society of aesthetic plastic surgery – attended the ISAPS Program Kiev, 2016</li>
											<li>Аттестация при управлении охраны здоровья ОГА – 2016 г., специальность: хирургия, квалификация: хирург —  высшей категории.</li>
										</ul>
									</div> [/doctorcertificates]
								</div> [/doctoradditional]
							  </div>
							</div>
						</div> */ ?>
					</div>
				</div>
		  	</div>
		</div>
	   <?php endwhile; endif;?>
	</div>
</div>

<?php get_footer(); ?>