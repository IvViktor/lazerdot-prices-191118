<aside class="col-md-4">
    <?php get_search_form(); ?>

    <div class="widget stock">
        <h3 class="widget-title">Акции</h3>

        <ul>
            <li>
                <a class="img-wrap" href="https://lazerdot.com.ua/news/podarok-dlya-tela-i-dushi/">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/w4.jpg" alt="&#1053;&#1080;&#1082;&#1086;&#1083;&#1072;&#1077;&#1074; &#1082;&#1083;&#1080;&#1085;&#1080;&#1082;&#1080;"/>
                </a>
                <h3>&#1057;&#1077;&#1088;&#1090;&#1080;&#1092;&#1080;&#1082;&#1072;&#1090;&#1099; &#1074; &#1047;&#1083;&#1072;&#1090;&#1072;&#1076;&#1077;&#1088;&#1084;&#1077;</h3>

                <a class="read-more" href="https://lazerdot.com.ua/news/podarok-dlya-tela-i-dushi/">Подробнее</a>
            </li>
            <li>
                <a class="img-wrap" href="https://lazerdot.com.ua/news/my-razdaem-podarki-imeninnikam/">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/w5.jpg" alt="&#1083;&#1080;&#1084;&#1092;&#1086;&#1076;&#1088;&#1077;&#1085;&#1072;&#1078;&#1085;&#1099;&#1081; &#1084;&#1072;&#1089;&#1089;&#1072;&#1078; &#1074; &#1053;&#1080;&#1082;&#1086;&#1083;&#1072;&#1077;&#1074;&#1077;"/>
                </a>
                <h3>&#1040;&#1082;&#1094;&#1080;&#1103; &#1048;&#1084;&#1077;&#1085;&#1080;&#1085;&#1085;&#1080;&#1082;&#1072;&#1084; &#1052;&#1077;&#1089;&#1103;&#1094;&#1072;</h3>

                <a class="read-more" href="https://lazerdot.com.ua/news/my-razdaem-podarki-imeninnikam/">Подробнее</a>
            </li>
            <li>
                <a class="img-wrap" href="http://lazerdot.com.ua/services/observ/">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/w6.png" alt="&#1083;&#1080;&#1087;&#1086;&#1089;&#1072;&#1082;&#1094;&#1080;&#1103; &#1053;&#1080;&#1082;&#1086;&#1083;&#1072;&#1077;&#1074; &#1094;&#1077;&#1085;&#1099;"/>
                </a>
                <h3>&#1041;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1072;&#1103; &#1044;&#1080;&#1072;&#1075;&#1085;&#1086;&#1089;&#1090;&#1080;&#1082;&#1072; &#1050;&#1086;&#1078;&#1080;</h3>

                <a class="read-more" href="http://lazerdot.com.ua/news/pilotnyy-proekt-krasivaya-grud/">Подробнее</a>
            </li>
			 <li>
                <a class="img-wrap" href="https://lazerdot.com.ua/news/gostevoy-blog-post/">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/gp.jpg" alt="&#1083;&#1080;&#1087;&#1086;&#1089;&#1072;&#1082;&#1094;&#1080;&#1103; &#1053;&#1080;&#1082;&#1086;&#1083;&#1072;&#1077;&#1074; &#1094;&#1077;&#1085;&#1099;"/>
                </a>
                <h3>&#1041;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1072;&#1103; &#1044;&#1080;&#1072;&#1075;&#1085;&#1086;&#1089;&#1090;&#1080;&#1082;&#1072; &#1050;&#1086;&#1078;&#1080;</h3>

                <a class="read-more" href="https://lazerdot.com.ua/news/gostevoy-blog-post/">Подробнее</a>
            </li>
        </ul>
    </div>

    <div class="widget last-news">
        <h2 class="widget-title">Последние новости</h2>

        <ul>
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
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-wrap">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail(); ?>
                            <?php } ?>
                        </div>

                        <h4><?php the_title(); ?></h4>

                        <time><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('d F Y г.'); ?></time>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</aside>