<?php
/*
  Template Name: HOME(INDEX)
 */
?>
<?php get_header(); ?>

<div id="content">

    <section class="bg-gray">
        <div class="container">
            <h1 class="text-green">О клинике косметологии и пластической хирургии</h1>
            <p>

            </p>Каждый человек хочет выглядеть красиво и ухоженно. Клиника "Златадерма" помогает вернуть былую красоту, замедлить естественные следы старения, удалить нежелательные волосы, исправить недостатки внешности, смоделировать фигуру по наилучшим стандартам с помощью самых современных и проверенных медицинских процедур.</p>

            <p>Клиника лазерно-эстетической медицины, косметологии и пластической хирургии "Златадерма" - это эффективное омоложение и лечение кожи. Используя самые инновационные продукты в области косметологи и <a href="https://lazerdot.com.ua/category/plasticheskaya-khirurgiya/">пластической хирургии в Николаеве</a>, мы работаем только на результаты и гарантируем исключительное качество наших процедур!

            </p>
        </div>
    </section>
    

    <section>
        <div class="container">
            <h2 class="title">Услуги</h2>
            <?php   wp_reset_postdata();
                    if(have_posts()): the_post(); ?>
            <?php   //NOTE: ACF checkbox field type return array of values by default
                    $zlata_cust_serv_displ = get_field('zlata_services_display_custom');
                    if(is_array($zlata_cust_serv_displ) && in_array('display', $zlata_cust_serv_displ)):  ?> 
            <div class="index-services-section">
                <div class="row">
                <?php   $service_item_1 = get_field('service_item_1');
                        if ($service_item_1): ?>
                    <div class="col-xs-6 services-item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="item-icon" href="<?php echo $service_item_1['link_href']; ?>">
                                    <img src="<?php echo $service_item_1['service_icon']['url']; ?>" alt="<?php echo $service_item_1['service_icon']['alt']; ?>" />
                                </a>
                            </div>
                            <div class="col-md-8 item-content">
                                <h3><?php echo $service_item_1['title']; ?></h3>
                                <p> <?php echo $service_item_1['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php   endif;
                        $service_item_2 = get_field('service_item_2');
                        if ($service_item_2): ?>
                    <div class="col-xs-6 services-item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="item-icon" href="<?php echo $service_item_2['link_href']; ?>">
                                    <img src="<?php echo $service_item_2['service_icon']['url']; ?>" alt="<?php echo $service_item_2['service_icon']['alt']; ?>" />
                                </a>
                            </div>
                            <div class="col-md-8 item-content">
                                <h3><?php echo $service_item_2['title']; ?></h3>
                                <p> <?php echo $service_item_2['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
                <div class="row">
                <?php   $service_item_3 = get_field('service_item_3');
                        if ($service_item_3): ?>
                    <div class="col-xs-6 services-item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="item-icon" href="<?php echo $service_item_3['link_href']; ?>">
                                    <img src="<?php echo $service_item_3['service_icon']['url']; ?>" alt="<?php echo $service_item_3['service_icon']['alt']; ?>" />
                                </a>
                            </div>
                            <div class="col-md-8 item-content">
                                <h3><?php echo $service_item_3['title']; ?></h3>
                                <p> <?php echo $service_item_3['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php   endif;
                        $service_item_4 = get_field('service_item_4');
                        if ($service_item_4): ?>
                    <div class="col-xs-6 services-item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="item-icon" href="<?php echo $service_item_4['link_href']; ?>">
                                    <img src="<?php echo $service_item_4['service_icon']['url']; ?>" alt="<?php echo $service_item_4['service_icon']['alt']; ?>" />
                                </a>
                            </div>
                            <div class="col-md-8 item-content">
                                <h3><?php echo $service_item_4['title']; ?></h3>
                                <p> <?php echo $service_item_4['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
                <div class="row">
                <?php   $service_item_5 = get_field('service_item_5');
                        if ($service_item_5): ?>
                    <div class="col-xs-6 services-item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="item-icon" href="<?php echo $service_item_5['link_href']; ?>">
                                    <img src="<?php echo $service_item_5['service_icon']['url']; ?>" alt="<?php echo $service_item_5['service_icon']['alt']; ?>" />
                                </a>
                            </div>
                            <div class="col-md-8 item-content">
                                <h3><?php echo $service_item_5['title']; ?></h3>
                                <p> <?php echo $service_item_5['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php   endif;
                        $service_item_6 = get_field('service_item_6');
                        if ($service_item_6): ?>
                    <div class="col-xs-6 services-item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="item-icon" href="<?php echo $service_item_6['link_href']; ?>">
                                    <img src="<?php echo $service_item_6['service_icon']['url']; ?>" alt="<?php echo $service_item_6['service_icon']['alt']; ?>" />
                                </a>
                            </div>
                            <div class="col-md-8 item-content">
                                <h3><?php echo $service_item_6['title']; ?></h3>
                                <p> <?php echo $service_item_6['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
            <?php else: ?>

            <ul class="list-blog">
                <li>
                    <div class="lblog-photo">
                        <img src="<?php bloginfo('template_url'); ?>/img/temp/s1.jpg" alt="медицинский центр"/>
                    </div>

                    <div class="lblog-content">
                        <h3>Косметология</h3>
                        <p>Данная отрасль занимается эстетическими проблемами организма человека. Косметолог определяет состояние кожи и дает рекомендации по устранению проблем. Далее мы приступаем к работе с вашей кожей.</p>
                    </div>
                </li>
                <li>
                    <div class="lblog-photo">
                        <img src="<?php bloginfo('template_url'); ?>/img/temp/s4.jpg" alt="косметология николаев"/>
                    </div>

                    <div class="lblog-content">
                        <h3>Аппаратная косметология</h3>
                        <p>Различные косметические процедуры мы проводим при помощи профессиональной и надежной аппаратуры, что  позволяет добиться желаемых результатов качественней и быстрей.</p>
                    </div>
                </li>
                <li>
                    <div class="lblog-photo">
                        <img src="<?php bloginfo('template_url'); ?>/img/temp/s2.jpg" alt="клиника косметологии и пластической хирургии"/>
                    </div>

                    <div class="lblog-content">
                        <h3>Дерматология</h3>
                        <p>В этой области медицины изучаются патологии и заболевания кожных покровов  организма человека, ее строение и функционирование. Мы занимаемся диагностикой и лечением кожных заболеваний.</p>
                    </div>
                </li>
                <li>
                    <div class="lblog-photo">
                        <img src="<?php bloginfo('template_url'); ?>/img/temp/s5.jpg" alt="косметологическая клиника николаев"/>
</div>

                    <div class="lblog-content">
                        <h3>Гинекология</h3>
                        <p>Предлагаем услуги профессионального гинеколога, который поможет выявить существующие проблемы и назначить необходимое профилактическое лечение.</p>
                    </div>
                </li>
<li>
                    <div class="lblog-photo">
                        <img src="<?php bloginfo('template_url'); ?>/img/temp/s6.jpg" alt="косметология николаев"/>
</div>

                    <div class="lblog-content">
                        <h3>&#1051;&#1077;&#1095;&#1077;&#1085;&#1080;&#1077; &#1072;&#1082;&#1085;&#1077; &#1091; &#1087;&#1086;&#1076;&#1088;&#1086;&#1089;&#1090;&#1082;&#1086;&#1074;</h3>
                        <p>&#1052;&#1099; &#1087;&#1088;&#1077;&#1076;&#1083;&#1072;&#1075;&#1072;&#1077;&#1084; &#1094;&#1077;&#1083;&#1099;&#1081; &#1082;&#1086;&#1084;&#1087;&#1083;&#1077;&#1082;&#1089; &#1087;&#1088;&#1086;&#1094;&#1077;&#1076;&#1091;&#1088; &#1076;&#1083;&#1103; &#1083;&#1077;&#1095;&#1077;&#1085;&#1080;&#1103; &#1087;&#1088;&#1086;&#1073;&#1083;&#1077;&#1084; &#1087;&#1086;&#1076;&#1088;&#1086;&#1089;&#1090;&#1082;&#1086;&#1074;&#1086;&#1081; &#1082;&#1086;&#1078;&#1080;. &#1042;&#1088;&#1072;&#1095; &#1087;&#1086;&#1076;&#1073;&#1077;&#1088;&#1077;&#1090; &#1084;&#1077;&#1090;&#1086;&#1076;, &#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1081; &#1087;&#1086;&#1076;&#1093;&#1086;&#1076;&#1080;&#1090; &#1080;&#1084;&#1077;&#1085;&#1085;&#1086; &#1074;&#1072;&#1084;. &#1069;&#1092;&#1092;&#1077;&#1082;&#1090;&#1080;&#1074;&#1085;&#1086;&#1077; &#1088;&#1077;&#1096;&#1077;&#1085;&#1080;&#1077; &#1076;&#1083;&#1103; &#1102;&#1085;&#1086;&#1096;&#1077;&#1081; &#1080; &#1076;&#1077;&#1074;&#1091;&#1096;&#1077;&#1082;.</p>
                    </div>
                </li>
                <li>
                    <div class="lblog-photo">
                        <img src="<?php bloginfo('template_url'); ?>/img/temp/s3.jpg" alt="златадерма николаев отзывы"/>
                    </div>

                    <div class="lblog-content">
                        <h3>Пластическая хирургия</h3>
                        <p>Включает в себя коррекцию формы носа, а также подбородка и ушей, подтяжка кожи лица, блефаропластика и пластика бровей, коррекция губ; липосакция, увеличение или уменьшение и коррекция груди, омоложение рук; увеличение ягодиц и многое другое.</p>
                    </div>
                </li>
            </ul>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
    

    <section class="bg-gray girl-right">
        <div class="container">
            <h2>Популярные услуги</h2>

            <div class="row">
                <div class="col-md-8">

                    <ul class="list-theme">

                        <li><strong>Блефаропластика</strong>;</li>
                        <li><strong>Биоревитализация</strong>;</li>
                        <li><strong>Водоструйная липосакция Body Jet</strong>;</li>
                        <li><strong>Лазерное омоложение кожи</strong>;</li>
                        <li><strong>Лазерная эпиляция</strong>;</li>
                        <li><strong>Лазерный пилинг</strong>;</li>
                        <li><strong>Лазерная шлифовка, удаление пигментации</strong>;</li>
                        <li><strong><a href="https://lazerdot.com.ua/services/plastika-grudi/">Пластика груди</a></strong>;</li>
                        <li><strong>Липосакция</strong>;</li>
 <li><strong>Лечение угрей (в т.ч. лазерное лечение акне)</strong>;</li>
<li><strong>Контурная пластика препаратом Radiesse</strong>;</li>
<li><strong>Плазмолифтинг</strong>;</li>
                        <li><strong>Подтяжка кожи нитями Aptos</strong>;</li>
 <li><strong><a href="https://lazerdot.com.ua/services/konturnaya-plastika-gub/">Увеличение губ</a></strong>;</li>
                       <li><strong>Удаление рубцов, шрамов, растяжек, новообразований лазером</strong>;</li>
                        <li><strong><a href="https://lazerdot.com.ua/services/chistka-kozhi-litsa/">Чистка лица</a></strong>;</li>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-green">
        <div class="container">
            <h2>Цена и качество</h2>

            <p>Клиника лазерно-эстетической медицины, косметологии и пластической хирургии Златадерма использует политику низких цен. Красота должна быть доступной каждому. В то же время наш медицинский центр никогда не экономит на качестве оборудования, препаратов и услуг.</p>
            <p>У нас только самое прогрессивное современное медицинское оборудование, которое есть всего в нескольких экземплярах по всей Украине. Все это гарантирует качество проведенных косметологических и хирургических процедур, сделанных в клинике Златадерма.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="title">Команда</h2>
            <p class="large"><b>Наша команда - наша гордость!</b></p>
            <p>У нас работают профессионалы, а профессионала отличает уважение к себе и, соответственно, к своей работе и пациентам. Наши специалисты используют только самые передовые методики и инструменты в своей работе!</p>
            <img src="<?php bloginfo('template_url') ?>/img/temp/image1.jpg" class="right" alt="косметологическая клиника николаев"/>
            <p>Отличительная черта Николаевского медицинского центра Златадерма — отношение к своим пациентам. Это не просто вежливое отношение к людям, нет. Мы подходим к каждому человеку индивидуально! С каждым пациентом проводятся консультации врача с целью выяснения того, что действительно нужно именно этому человеку.</p>
            <p>Для нас важно знать, какие результаты вы ожидаете получить. Исходя из этого, предлагаем различные варианты, подробно рассказывая о всех процедурах. Наша частная медицинская клиника подберет оптимальную стратегию омоложения или лечения кожи, учитывая ваши пожелания и возможности.</p>
            <p>Мы стараемся сразу рассказать о результатах нашей лазерной и эстетической медицины. Наша клиника очень дорожит своей хорошей репутацией, достигнутой за многие годы  плодотворной работы. Пациенты ценят нас за честность, обращаясь к нам вновь и вновь. Вы не найдете плохие отзывы о нас, если будете искать "<a href="https://lazerdot.com.ua/otzyvy/">Златадерма в Николаеве: отзывы</a>".</p>

            <div class="clearfix"></div>

            <p class="text-center">Приходите в клинику лазерно-эстетической медицины, косметологии и пластической хирургии Златадерма.</p>
            <h3 class="ariston">Мы работаем для вас!</h3>
        </div>
    </section>

    <section class="bg-green" id="stock-home">
        <div class="container">
            <h2 class="title">Акции</h2>

            <div id="home-slider">

                <ul class="slider-dots">
                </ul>

					<div class="slides">
						<div class="slide">
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/img/baners/banner_hb.jpg" alt="подарочный сертификат"/>
							</a>
						</div>
						<div class="slide">
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/img/baners/bunner-2.jpg" alt="водоструйная липосакция"/>
							</a>
						</div>
<!--<div class="slide">
<a href="">
								<img src="<?php /*bloginfo('template_url'); */?>/img/baners/banner-grud.png" alt="пластика груди"/>
							</a>
			</div>-->
				<div class="slide">
<a href="">
								<img src="<?php bloginfo('template_url'); ?>/img/baners/dermatolog.jpg" alt="ищу дерматолога"/>
							</a>
		</div class="slide">				</div>
</div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="title">новости</h2>

            <ul class="list-blog">
                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 4
                );
                $posts = new WP_Query($args);
                ?>
                <?php
                while ($posts->have_posts()) {
                    $posts->the_post();
                    ?>
                    <li>
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="lblog-photo">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php } ?>

                        <div class="lblog-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="readmore">Подробнее</a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</div>



<!--div id="map">

</div -->
<div>
<center><a href="http://goo.gl/maps/9yJCDyLUMaU2"><img src="/wp-content/themes/zlata/img/map.jpg" alt="Клиника лазерно-эстетической медицины"></a></center>
</div>

<?php get_footer(); ?>