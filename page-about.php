<?php
/*
  Template Name: About US
 */
?>

<?php get_header(); ?>

<div id="content" class="about-content">

    <div class="container">
       <?php while (have_posts()) { the_post(); ?>
            <h1 class="page-title section-header text-center"><?php the_title(); ?></h1>
	   <?php } ?>
	   <div id="about-slider">
			<div class="about-slider-item">
			   <div class="row">
					<div class="col-md-6">
						<h2 class="about-slider-h">Наша клиника</h2>
						<p class="about-slider-p">
							Мы всегда рады новым и уже существующим клиентам. Мы ценим всех и каждого. Златадерма - это место, где вы сможете подобрать процедуру на любой вкус. Наш приветливый персонал всегда с удовольствием ответит на любые ваши вопросы. У нас также можно приобрести подарочный сертификат для своих родных и близких людей.
						</p>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-s-1.jpg" />
					</div>
			   </div>
			</div>
			<div class="about-slider-item">
			   <div class="row">
					<div class="col-md-6">
						<h2 class="about-slider-h">Гинекология</h2>
						<p class="about-slider-p">
							В нашей современной клинике также работает врач-гинеколог. Первичный осмотр с проводится с видеоколькоскопией. Мы поможем справиться со столь деликатными проблемами. Наш врач - это профессионал с огромным стажем и опытом работы! Доверьтесь нам и вы останетесь довольны.					</p>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-s-2.jpg" />
					</div>
			   </div>
			</div>
			<div class="about-slider-item">
			   <div class="row" >
					<div class="col-md-6">
						<h2 class="about-slider-h">Пластическая хирургия</h2>
						<p class="about-slider-p">
							В Златадерме предоставлены самые востребованные пластические операции. Наши врачи широкого профиля также являются сертифицированными специалистами в области интимной пластической операции. Мы подчеркнем ваши достоинства и уберем несовершенности при помощи <a href="https://lazerdot.com.ua/services/plasticheskiy-khirurg-v-nikolaeve/">пластического хирурга в Николаеве</a>.
						</p>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-s-1.png" />
					</div>
			   </div>
			</div>
			<div class="about-slider-item">
			   <div class="row">
					<div class="col-md-6">
						<h2 class="about-slider-h">Комната отдыха</h2>
						<p class="about-slider-p">
							После прохождения пластической операции каждому нужно время на восстановление и мы готовы предоставить такую возможность совершенно бесплатно. У нас вы сможете отдохнуть после процедур в тишине и спокойствии. Мы обеспечим своевременное и полезное питание и особый уход.
						</p>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-s-4.jpg" />
					</div>
			   </div>
			</div>
			<div class="about-slider-item">
			   <div class="row">
					<div class="col-md-6">
						<h2 class="about-slider-h">Косметология</h2>
						<p class="about-slider-p">
							Косметология является неотъемлемой частью современной индустрии красоты. В нашей клинике предоставлены только самые эффективные процедуры. Мы работаем с препаратами исключительного качества. Наши косметологи постоянно проходят тренинги у ведущих специалистов.
						</p>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-s-5.jpg" />
					</div>
			   </div>
			</div>
		</div>
		<div class="row slider-nav">
				<div class="col-md-6">
					<a href="#about-s-1" class="about-s-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/about-s-btn1.png" />
					</a>
					<a href="#about-s-2" class="about-s-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/about-s-btn2.png" />

					</a>
					<a href="#about-s-3" class="about-s-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/about-s-btn3.png" />
					</a>
					<a href="#about-s-4" class="about-s-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/about-s-btn4.png" />
					</a>
					<a href="#about-s-5" class="about-s-btn">
						<img src="<?php bloginfo('template_url'); ?>/img/about-s-btn5.png" />
					</a>
				</div>
		</div>
    </div>

	<div class="advantage-section">
		<div class="container">
			<h2 class="advantage-h2 section-header text-center">ПРЕИМУЩЕСТВА КЛИНИКИ</h2>
			<div class="advantages-items">
				<div class="corner-block corner-top-left"></div>
				<div class="corner-block corner-top-right"></div>
				<div class="corner-block corner-bottom-left"></div>
				<div class="corner-block corner-bottom-right"></div>
				<div class="row">
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Сертифицированные профессионалы</h3>
							<p class="advantage-p">
								Доктора клиники являются настоящими профессионалами своего дела. У нас работают ведущие врачи Николаева. Но это не мешает им постоянно повышать свою квалификацию, обучаясь новых техникам и методикам.
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Широкий спектр услуг</h3>
							<p class="advantage-p">
								Златадерма - это безусловный лидер по предоставлению огромного множества услуг в сфере косметологи (аппаратной, инъекционной и эстетической), гинекологии и пластической хирургии (в том числе и интимной пластике).
							</p>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Лояльные цены</h3>
							<p class="advantage-p">
								В условиях слабой экономики в стране, мы предоставляем конкурентные цены, доступны каждому в той или иной мере. Также вы всегда найдете выгодные акции в Златадерме, которые делают наши услуги еще более доступными.
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Оборудование</h3>
							<p class="advantage-p">
								В нашей клинике предоставлено оборудование мирового класса. Ни в одной другой клинике в Николаеве и в Южному регионе вы не найдете оборудования столь высокого уровня, как наше. Вы будете в восторге от нашего оборудования!
							</p>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Удобное месторасположение</h3>
							<p class="advantage-p">
								Мы находимся в таком месте, куда легко добраться из любой точки города. В то же время, мы не в самом центре, что позволяет посещать клинику так сказать "без лишних глаз".
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="advantage-item">
							<h3 class="advantage-h3">Стерилизация инструмента</h3>
							<p class="advantage-p">
								Последнее, но не менее важное - мы уделяем огромное внимание стерилизации наших инструментов. Нигде больше вы не найдете такой подход к такой серьезной процедуре.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-you-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="about-you-h2 section-header">O BAC <span class="rhombus"></span></h2>
					<p class="about-you-p">
					Рассказ о нашей клинике мы, однозначно, должны начать с вас – наших пациентов. Если вы приходите к нам, либо только планируете записаться, это значит, что вы человек, который заботится о своем здоровье и красоте. Вы знаете, что мудрые люди, в первую очередь, инвестируют в свое здоровье и внешность. А мы делаем все возможное, чтоб реализовать ваши пожелания и помочь вам, нашим пациентам, осуществить мечты.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="why-section">
		<div class="container">
			<h2 class="why-h2 section-header">Почему выбирают Златадерму <span class="rhombus"></span></h2>
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
			<h2 class="us-h2 section-header">О нас <span class="rhombus"></span></h2>
			<div class="row">
				<div class="col-md-8">
					<p>
						Итак, клиника «Златадерма» была создана не так давно, но, планируя открыть такой медицинский центр, я точно знала чего хочу – собрать коллектив профессионалов, любящий до фанатизма свое дело и готовый стать командой, которая даст надежду многих пациентам. Мое желание было настолько велико, что лучшие специалисты города согласились работать в клинике, о которой никто еще не знал.
					</p>
					<p>
						Благодаря этим профессионалам, я узнала, что, если мы хотим достичь высочайшего результата в работе с пациентами, необходимо оснастить наш центр <a href="https://lazerdot.com.ua/oborudovanie/">лучшим косметологическим оборудованием</a>, разработанным на основе передовых технологий в этой отрасли. Это невероятно сложный и интересный процесс. Во-первых, это очень дорого, т.к. все оборудование заказывалось в других странах, но на компромиссы я была не готова, потому что была установка – нужно только самое лучшее!
					</p>
					<p>
						Но как выбрать, верить рекламным роликам и брошюрам компаний? Я решила, что у меня только один вариант – тестировать каждый аппарат на себе. Находя те единичные клиники в Украине, которые уже пользуются данным оборудованием, я записывалась на процедуру.
					</p>
					<p>
						Сейчас могу сказать с уверенностью, что вложила душу в клинику Златадерма и для меня каждый пациент также важен, как для садовника цветок в саду.
					</p>
					<p>
						Коллектив клиники — это высоко квалифицированный персонал, ориентированный на инновации в косметологии и пластической хирургии, готовый поделиться полученным опытом с вами. И я благодарна им за это.
					</p>
					<p>
						Приходите к нам в клинику, и мы докажем, что качество жизни может быть выше!
					</p>
				</div>
				<div class="col-md-4">
					<img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/lv.jpeg" alt="косметологическая клиника Николаев" />
				</div>
			</div>
			<h3 class="us-slogan text-center">С уважением, директор клиники ЗлатаДерма</h3>
			<div class="us-sign"><img src=""/></div>
		</div>
	</div>
	<div class="certificate-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/img/sert-1.png" alt="клиника пластической хирургии" />
				</div>
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/img/sert-2.png" alt="клиника косметологии" />
				</div>
			</div>
		</div>
	</div>
	<div class="doctors-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="acardeon-h2 section-header">наши ведущие врачи <span class="rhombus"></span></h2>
					<div id="doctors-items">
						<div class="doctor-item">
						  <div class="doctor-intro">
						  	<div class="row">
						  		<div class="col-sm-1">
									<img src="<?php bloginfo('template_url'); ?>/img/doc-1.png" alt="отзывы о Златадерме" />
								</div>
						  		<div class="col-sm-11">
									<div class="name">Константинов Артур Иванович</div>
									<div class="spec">Врач-хирург</div>
								</div>
							</div>
						  </div>
						  <div class="doctor-descr">
							<div class="education">
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
							</div>
							<div class="exper-certs-block">
								<div class="row">
									<div class="col-md-4">
										<h3>Опыт работы:</h3>
										<ul>
											<li>с 1997 г. по 1999 г. – Николаевский хирургический центр;</li>
											<li> с 1999 г. по 2001 г. – БСМП, 1-е хирургическое отделение;</li>
											<li>с 2001 г. и по настоящее время – Николаевская центральная районная больница, хирургическое отделение.</li>
										</ul>
									</div>
									<div class="col-md-8">
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
									</div>
								</div>
							  </div>
							</div>
						</div>
						<div class="doctor-item">
						  <div class="doctor-intro">
						  	<div class="row">
						  		<div class="col-sm-1">
									<img src="<?php bloginfo('template_url'); ?>/img/doc-1.png" alt="отзывы о Златадерме" />
								</div>
						  		<div class="col-sm-11">
									<div class="name">Константинов Артур Иванович</div>
									<div class="spec">Врач-хирург</div>
								</div>
							</div>
						  </div>
						  <div class="doctor-descr">
							<div class="education">
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
							</div>
							<div class="exper-certs-block">
								<div class="row">
									<div class="col-md-4">
										<h3>Опыт работы:</h3>
										<ul>
											<li>с 1997 г. по 1999 г. – Николаевский хирургический центр;</li>
											<li> с 1999 г. по 2001 г. – БСМП, 1-е хирургическое отделение;</li>
											<li>с 2001 г. и по настоящее время – Николаевская центральная районная больница, хирургическое отделение.</li>
										</ul>
									</div>
									<div class="col-md-8">
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
									</div>
								</div>
							  </div>
							</div>
						</div>
						<div class="doctor-item">
						  <div class="doctor-intro">
						  	<div class="row">
						  		<div class="col-sm-1">
									<img src="<?php bloginfo('template_url'); ?>/img/doc-1.png" alt="отзывы о Златадерме" />
								</div>
						  		<div class="col-sm-11">
									<div class="name">Константинов Артур Иванович</div>
									<div class="spec">Врач-хирург</div>
								</div>
							</div>
						  </div>
						  <div class="doctor-descr">
							<div class="education">
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
							</div>
							<div class="exper-certs-block">
								<div class="row">
									<div class="col-md-4">
										<h3>Опыт работы:</h3>
										<ul>
											<li>с 1997 г. по 1999 г. – Николаевский хирургический центр;</li>
											<li> с 1999 г. по 2001 г. – БСМП, 1-е хирургическое отделение;</li>
											<li>с 2001 г. и по настоящее время – Николаевская центральная районная больница, хирургическое отделение.</li>
										</ul>
									</div>
									<div class="col-md-8">
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
									</div>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>