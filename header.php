<!DOCTYPE html>
    <head>
       <title></title>
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


        <meta charset="utf-8">


        <!-- The little things -->
        <!-- link rel="profile" href="http://gmpg.org/xfn/11" / -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="News" href="https://lazerdot.com.ua/feed" >
        <!-- The little things -->

        <!-- GOOGLE FONTS -->
		<!-- <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> -->

        <!-- ./GOOGLE FONTS -->

        <?php
        wp_deregister_script('jquery');
        wp_head();
        ?>
		<!-- Top100 (Kraken) Counter -->
<script>
    (function (w, d, c) {
    (w[c] = w[c] || []).push(function() {
        var options = {
            project: 6197101,
        };
        try {
            w.top100Counter = new top100(options);
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src =
    (d.location.protocol == "https:" ? "https:" : "http:") +
    "//st.top100.ru/top100/top100.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(window, document, "_top100q");
</script>
<noscript>
  <img src="//counter.rambler.ru/top100.cnt?pid=6197101" alt="Топ-100" />
</noscript>
<!-- END Top100 (Kraken) Counter -->

</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- HEADER -->

    <header>

        <div class="container">
            <h4>лазерно-эстетической медицины, косметологии и пластической хирургии</h4>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-3">
                    <a id="logo" href="<?php echo get_home_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-gold.png" alt="лазерная косметология Николаев"/>
                    </a>
                </div>
                <div class="col-sm-9">
                    <div class="address">
                        Адрес:  <span>Украина, г.Николаев, ул.Бузника 14</span>
                    </div>
                    <div class = "working-hours">
                        <?php dynamic_sidebar( 'top-area-5' ); ?>
                    </div>
                    <div class = "widgets-flex">
                        <div class="phones">
                            <div><?php dynamic_sidebar( 'top-area-1' ); ?></div>
                            <div><?php dynamic_sidebar( 'top-area-2' ); ?></div>
                            <div><?php dynamic_sidebar( 'top-area-3' ); ?></div>
                        </div>
                        <div class = "search"><?php dynamic_sidebar( 'top-area-4' ); ?></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <nav>
            <div class="container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-nav',
                    'container' => false,
                    'echo' => true,
                    'items_wrap' => '<menu id="%1$s" class="%2$s">%3$s</menu>',
                    'depth' => 2,
                ));
                ?>

                <!-- BURGER -->
                <button class="c-hamburger c-hamburger--htx">
                    <span>toggle menu</span>
                </button>
                <!-- BURGER -->
            </div>
        </nav>

    </header>
    <!-- ./HEADER -->

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="preloader-container">
            <div class="outer">

            </div>
            <div class="inner"></div>
        </div>
    </div>
    <!-- ./PRELOADER -->

    <?php if (is_home()) { ?>
        <div id="after-header">
            <div class="container">

                <div class="after-header-text col-xs-5 col-xs-offset-6">
                    <h4>Мы предлагаем:</h4>
                    <h3>более 150 видов процедур<br />
                        для красоты и здоровья</h3>

                    <a href="https://lazerdot.com.ua/omolozhenie-lica/" class="btn">Выбрать процедуру</a>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container text-center">
            <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' // '); ?>
        </div>
    <?php } ?>