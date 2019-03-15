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


        <?php
        wp_deregister_script('jquery');
        wp_head();
        ?>
  <style>@charset "UTF-8";html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}header,menu,nav,section{display:block}[hidden]{display:none}a{background-color:transparent}b,strong{font-weight:700}h1{font-size:2em;margin:.67em 0}img{border:0}button,input{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857;color:#333;background-color:#fff}input,button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}img{vertical-align:middle}h1,h3,h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,h3{margin-top:20px;margin-bottom:10px}h4{margin-top:10px;margin-bottom:10px}h1{font-size:36px}h3{font-size:24px}h4{font-size:18px}p{margin:0 0 10px}ul{margin-top:0;margin-bottom:10px}.container{margin-right:auto;margin-left:auto;padding-left:10px;padding-right:10px}.container:before,.container:after{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:740px}}@media (min-width:992px){.container{width:960px}}@media (min-width:1200px){.container{width:960px}}.row{margin-left:-10px;margin-right:-10px}.row:before,.row:after{content:" ";display:table}.row:after{clear:both}.col-sm-3,.col-md-4,.col-xs-5,.col-sm-9{position:relative;min-height:1px;padding-left:10px;padding-right:10px}.col-xs-5{float:left}.col-xs-5{width:41.66667%}.col-xs-offset-6{margin-left:50%}@media (min-width:768px){.col-sm-3,.col-sm-9{float:left}.col-sm-3{width:25%}.col-sm-9{width:75%}}@media (min-width:992px){.col-md-4{float:left}.col-md-4{width:33.33333%}}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;touch-action:manipulation;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.42857;border-radius:4px}.clearfix:before,.clearfix:after{content:" ";display:table}.clearfix:after{clear:both}@-ms-viewport{width:device-width}
    .bazz-widget ::-webkit-input-placeholder{color:#FFF!important;font-style:normal!important}.bazz-widget :-moz-placeholder{color:#FFF!important;opacity:1;font-style:normal!important}.bazz-widget ::-moz-placeholder{color:#FFF!important;opacity:1;font-style:normal!important}.bazz-widget :-ms-input-placeholder{color:#FFF!important;font-style:normal!important}.bazz-widget{box-sizing:border-box;position:fixed!important;font-family:helvetica,sans-serif!important;width:65px;height:65px;border-radius:35px;background-color:#00AFF2;text-align:right;line-height:1;z-index:9997}.bazz-widget *{box-sizing:border-box}.bazz-widget-close{width:30px;height:30px;position:absolute;top:-10px;left:-10px;display:none;border-radius:50%;border:3px solid #FFF;background-color:#00AFF2;background-size:22px;font-size:0;z-index:9998}.bazz-widget-form{display:none;width:100%;text-align:center;overflow:hidden;height:65px;position:relative}.bazz-widget-form label{display:inline-block;width:32%;color:#FFF;text-align:left;vertical-align:middle;line-height:1.2;font-size:16px;font-weight:400;margin:0!important}.bazz-widget-form input{display:inline-block!important;width:32%!important;text-align:left;vertical-align:middle!important;height:30px!important;border-radius:20px!important;padding:0!important;color:#FFF!important;font-family:helvetica,sans-serif!important;font-size:16px!important;font-weight:400;letter-spacing:0;line-height:1;text-transform:none;margin:0!important}.bazz-widget-form input[type="tel"]{background:transparent!important;border:1px solid #FFF;padding-left:6px!important;padding-right:6px!important}.bazz-widget-form-submit{width:25%;margin-left:2%;border-width:1px;border-style:solid;text-align:center;font-family:helvetica,sans-serif!important;font-size:16px;border-radius:20px;height:30px;color:#FFF!important;display:inline-block;text-decoration:none!important;vertical-align:middle;line-height:28px;top:auto;bottom:auto;left:auto;right:auto;position:static}.bazz-widget-form input[hidden]{display:none!important}.bazz-widget .bazz-widget-button{width:65px;height:65px;border:none;text-align:center;border-radius:35px;position:relative;padding:0;z-index:2}.bazz-widget i{font-style:normal;font-family:helvetica,sans-serif!important;position:absolute;display:block;width:100%;height:100%;top:0;left:0;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-o-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-ms-transform-style:preserve-3d;-o-transform-style:preserve-3d;transform-style:preserve-3d}.bazz-widget i:last-child{-webkit-transform:rotateY(180deg);-moz-transform:rotateY(180deg);-ms-transform:rotateY(180deg);-o-transform:rotateY(180deg);transform:rotateY(180deg);color:#FFF;font-weight:700;font-size:14px;line-height:1.2;word-wrap:break-word;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.bazz-widget-inner-circle{width:65px;height:65px;position:absolute;top:0;right:0;border-radius:100px;opacity:.3;z-index:1}.bazz-widget-inner-border{width:65px;height:65px;position:absolute;top:0;right:0;border-radius:200px;border-width:1px;border-style:solid;z-index:1;opacity:1}.bazz-widget-your-name{color:#FFF!important;text-decoration:none!important;border-bottom:1px dashed #fff;line-height:1.2;height:auto;width:auto;top:auto;bottom:auto;left:auto;right:auto;position:static}.bazz-widget-form-top,.bazz-widget-form-bottom{width:100%;height:65px;padding-top:12px;position:relative}.bazz-widget-form-bottom label{width:45%;vertical-align:middle}.bazz-widget-form-bottom input{width:40%;vertical-align:middle;padding:0 6px!important;background:transparent!important;border:1px solid #FFF}.bazz-widget-name-close{width:34px;height:34px;display:inline-block;background:url(../images/ok.png) no-repeat center center #00AFF2;background-size:24px;border-radius:50%;border-width:1px;border-style:solid;margin-left:10px;vertical-align:middle;top:auto;bottom:auto;left:auto;right:auto;position:static}.bazz-widget-form-info{position:absolute;left:0;bottom:0;font-size:9px;text-align:center;width:100%;line-height:1;padding-bottom:2px;color:#666!important}@media only screen and (max-width :575px){.bazz-widget{display:none}}#after-header,#after-header .after-header-text::before{background-position:center;background-repeat:no-repeat;background-size:cover}body{font-family:'Roboto',sans-serif;font-weight:300;color:#1d1d1f;font-size:14px;line-height:1.43}h1{font-size:30px}h3{font-size:18px}h4{font-size:14px}.btn{font-size:14px;color:#abadb3;padding:10px 25px;font-weight:300;border:1px solid #abadb3;border-radius:20px}.bg-gray{background-color:#f5f5f5}.text-green{color:#00bfaf}ul{margin:0;padding:0;list-style-position:inside}input[type="tel"],input[type="text"]{border:1px solid #e5e5e5;border-radius:4px}input[type="text"]{height:40px;line-height:40px;padding:0 20px}#searchform{position:absolute;right:0;top:45px;width:270px;display:none;text-align:left;font-size:14px}#searchform div{display:block;width:100%;height:40px;position:relative}#searchform input[type="text"]{width:100%;border-radius:0;color:#4c5059;font-style:italic}#searchform button{position:absolute;right:0;padding:0 26px;height:100%;color:#00bfaf;background-color:transparent;border:none}#searchform button:before{position:absolute;display:block;top:0;right:0;width:50px;height:100%;text-align:center;font-family:FontAwesome;line-height:38px;content:"\f002"}#searchform-menu-item{position:relative}#searchform-menu-item .searchbutton{height:100%;background-color:transparent;color:transparent;border:none;outline:none}#searchform-menu-item .searchbutton:before,#searchform-menu-item .searchbutton:after{position:absolute;display:block;top:0;left:5px;width:40px;height:38px;text-align:center;font-family:FontAwesome;line-height:38px;font-size:18px}#searchform-menu-item .searchbutton:before{content:"\f002";-webkit-transform:scale(1) rotate(0deg);transform:scale(1) rotate(0deg)}#searchform-menu-item .searchbutton:after{content:"\f00d";-webkit-transform:scale(0) rotate(-90deg);transform:scale(0) rotate(-90deg)}header{position:relative;z-index:300;-webkit-box-shadow:0 5px 5px rgba(0,0,0,.1);box-shadow:0 5px 5px rgba(0,0,0,.1);background-color:#fff}header .container{padding-bottom:10px}header::after{position:absolute;height:30px;width:50%;background-color:#00bfaf;top:0;right:0;content:"";z-index:0}header .container{position:relative;z-index:5}header h4{position:relative;margin:0;padding:10px 15px;line-height:1;color:#fff;background-color:#00bfaf;font-weight:300;font-style:italic;font-size:10px;text-transform:uppercase;letter-spacing:3px;width:70%;float:right}header h4::before{content:"";position:absolute;top:0;left:-10px;height:0;width:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:30px solid #fff}header .address{text-align:right;font-style:italic;line-height:1;margin:22px 0;display:inline-block;margin-right:15px}header .address:after{content:"/";font-size:20px;margin-left:15px}header .address span{text-transform:none;color:#abadb3}header .work-time{display:inline-block;font-style:italic}@media (max-width:700px){header h4,header::after{display:none}}#logo{position:relative}#logo img{width:180px;height:auto}@media (min-width:992px){#logo{top:-20px;left:40px;position:absolute}}@media (max-width:767px){#logo img{width:150px}}@media (max-width:991px){header .address{text-align:center;margin:15px 0;line-height:inherit}#logo{margin:15px 0;display:block;text-align:center}}nav{height:40px;background-color:#f5f5f5;border-top:1px solid #e5e5e5;border-bottom:1px solid #e5e5e5}nav .container{min-height:100%}@media (max-width:991px){nav .container{width:100%}}@media (max-width:991px){nav{-webkit-perspective:800px;perspective:800px;-webkit-transform-style:preserve-3d;transform-style:preserve-3d}}nav menu{position:relative;text-align:center;padding:0;margin:0;font-size:0;list-style:none}nav menu>li{position:relative;z-index:5;max-height:40px;display:inline-block}nav menu>li>a,#searchform-menu-item .searchbutton{position:relative;display:inline-block;font-size:15px;font-weight:300;color:#4c5059;text-transform:uppercase;line-height:38px;padding:0 25px}nav menu>li>a::after{position:absolute;top:10px;right:0;content:"";height:20px;width:1px;background-color:#e5e5e5}nav menu>li>ul.sub-menu{opacity:0;visibility:hidden;list-style:none;margin:0;padding:0;font-size:14px;position:absolute;top:100%;left:0;width:auto;min-width:300px;border-top:1px solid #00bfaf;background-color:#f5f5f5;-webkit-box-shadow:5px 5px 8px rgba(0,0,0,.1);box-shadow:5px 5px 8px rgba(0,0,0,.1)}nav menu>li>ul.sub-menu a{display:block;text-align:left;padding:15px 15px;color:#4c5059}nav menu>li.columns>ul.sub-menu{-webkit-column-count:3;column-count:3;min-width:900px;left:-93px;padding-top:15px;padding-bottom:15px;padding:15px 100px 15px 15px;background-repeat:no-repeat;background-position:right bottom}@media (max-width:991px){nav menu{opacity:0;visibility:hidden;position:absolute;top:100%;right:0;left:0;display:block;border-top:1px solid #e5e5e5;-webkit-transform:rotateX(-90deg) scale(.8);transform:rotateX(-90deg) scale(.8);-webkit-transform-origin:50% 25%;transform-origin:50% 25%}nav menu>li{background-color:#f5f5f5!important;display:block;width:100%;max-height:100%}nav menu>li>a{width:100%}nav menu>li a::after{display:none}nav menu>li>ul.sub-menu{display:none;opacity:1;visibility:visible;position:static;width:100%;height:auto;overflow:hidden;min-width:0!important;padding:15px!important;top:auto;left:auto!important;-webkit-column-count:1!important;column-count:1!important;background-image:none!important;border-bottom:1px solid #00bfaf}nav menu>li>ul.sub-menu a{text-align:center;padding:5px 0;font-size:12px}}#after-header{position:relative;overflow:hidden;height:460px;width:100%;z-index:0;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-perspective:3000px;perspective:3000px}#after-header .container{position:relative;height:100%;-webkit-transform-origin:50% 50%;transform-origin:50% 50%}#after-header .after-header-text{position:relative;color:#fff;background-color:rgba(0,115,105,.5);height:auto;position:absolute;bottom:0;left:10px;padding:25px}#after-header .after-header-text::before{content:"";position:absolute;bottom:0;left:-660px;height:461px;width:665px;}#after-header .after-header-text h3,#after-header .after-header-text h4{text-transform:uppercase;margin:0;line-height:1.5}#after-header .after-header-text h3{font-size:24px}#after-header .after-header-text h4{font-size:18px}#after-header .after-header-text .btn{color:#fff;border:2px solid #fff;padding:10px 15px;margin-top:10px}@media (max-width:767px){#after-header{height:auto}#after-header .after-header-text{position:relative;margin:0 -15px;width:100%;width:calc(100% 30px);height:100%;left:0;text-align:center}#after-header .after-header-text::before{display:none}}.c-hamburger{display:block;position:absolute;right:15px;bottom:0;overflow:hidden;margin:-20px 0 0 0;padding:0;height:37px;width:37px;font-size:0;text-indent:-9999px;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-box-shadow:none;box-shadow:none;border-radius:4px;border:none}@media (min-width:992px){.c-hamburger{display:none}.contact-header-wrapper{height:100px}}@media (max-width:767px){.c-hamburger{right:15px}}.c-hamburger span{display:block;position:absolute;top:50%;left:5px;right:5px;height:2px;background:#00bfaf;margin-top:-2px}.c-hamburger span::before,.c-hamburger span::after{position:absolute;display:block;left:0;width:100%;height:2px;background-color:#00bfaf;content:""}.c-hamburger span::before{top:-10px}.c-hamburger span::after{bottom:-10px}.c-hamburger--htx{background-color:transparent}.home #content{position:relative;z-index:5;-webkit-box-shadow:0 -5px 5px rgba(0,0,0,.1),0 5px 5px rgba(0,0,0,.1);box-shadow:0 -5px 5px rgba(0,0,0,.1),0 5px 5px rgba(0,0,0,.1)}.home section{position:relative;z-index:5;padding:30px 0}@media (max-width:767px){.home section{text-align:justify;padding-top:5px}}header .address span{color:#000;font-weight:400}li#menu-item-2905 a{color:#fff;background-color:#00bfaf}li#menu-item-2905 a:after{display:none}@media (max-width:1400px){img{max-width:100%}}@media (max-width:580px){body{font-size:18px}h1{font-size:26px}}@media only screen and (max-width :575px){.bazz-widget{display:block!important}.bazz-widget{left:15px!important}.bazz-widget-form label{display:none!important}.bazz-widget-form input{width:52%!important}.bazz-widget-form-submit{width:35%!important}}.phone-numbers-wrapper{font-size:22px;color:#4c5059;font-family:"Garamond";font-weight:700;margin-bottom:25px}.phone-numbers-wrapper .number-item{text-align:center}.phone-numbers-wrapper .number-item a span{color:#00bfaf}.phone-numbers-wrapper .number-item:after{content:url(/wp-content/themes/zlata/img/green-dot.png);position:absolute;right:-4px;top:-4px}.phone-numbers-wrapper .number-item:last-child:after{visibility:hidden}.phone-numbers-wrapper .number-item:before{content:url(/wp-content/themes/zlata/img/green-dot.png);position:absolute;left:-4px;top:-4px;visibility:hidden}.phone-numbers-wrapper .number-item a{color:#4c5059}.contact-header-wrapper{text-align:right}@media (max-width:767px){.contact-header-wrapper{text-align:center}header .address:after{display:none}header .work-time{margin-bottom:20px}}@media (max-width:991px){.phone-numbers-wrapper .number-item:after,.phone-numbers-wrapper .number-item:before{display:none}#searchform-menu-item .searchbutton{display:none}#searchform{position:relative;display:block;margin:auto;padding:10px;top:0}#searchform input[type="text"]{line-height:35px;height:35px}#searchform div{height:35px}}</style>
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
                <div class="col-sm-9 contact-header-wrapper">
                    <div class="address">
                        Адрес клиники:  <span>Украина, г.Николаев, ул.Бузника 14</span>
                    </div>
                    <div class = "work-time">
                        <?php dynamic_sidebar( 'top-area-5' ); ?>
                    </div>
                    <div>
                        <div class="phone-numbers-wrapper row">
                            <div class="col-md-4 number-item"><?php dynamic_sidebar( 'top-area-1' ); ?></div>
                            <div class="col-md-4 number-item"><?php dynamic_sidebar( 'top-area-2' ); ?></div>
                            <div class="col-md-4 number-item"><?php dynamic_sidebar( 'top-area-3' ); ?></div>
                        </div>
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