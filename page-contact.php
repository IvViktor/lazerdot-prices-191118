<?php
/*
  Template Name: Contact
 */
?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title">Контакты</h1>

        <div class="row">

            <div class="col-md-4">
                <h3>Мы находимся по адресу:</h3>
                <p>
                    <i class="fa fa-location-arrow text-green" aria-hidden="true"></i> Украина, г.Николаев, ул. Бузника, 14<br />
                    <span class="text-green">Маршрут:</span> &#1087;&#1086; &#1087;&#1088;.&#1062;&#1077;&#1085;&#1090;&#1088;&#1072;&#1083;&#1100;&#1085;&#1086;&#1084;&#1091; &#1086;&#1089;&#1090;&#1072;&#1085;&#1086;&#1074;&#1082;&#1072; &#1057;&#1090;&#1072;&#1076;&#1080;&#1086;&#1085;
                </p>
                
                <h3>Email:</h3>
                <p><i class="fa fa-envelope text-green" aria-hidden="true"></i> <a href="mailto:lazerdot@list.ru">zlatadermaukr@gmail.com</a></p>
               
                
                <h3>Телефоны:</h3>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> (0512) 71-35-45</p>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> (0512) 71-35-75</p>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> +38 (073) 242 - 42 - 42</p>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> +38 (068) 242 - 42 - 42</p>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> +38 (095) 242 - 42 - 42</p>
                
                <h3>Мы в социальных сетях:</h3>
                
                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/zlataderma/">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/zlataderma" target="_blank">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                    </li>
<li>
                        <a href="https://www.instagram.com/zlataderma/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-md-8">
                <div class="contact-image">
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/img/contact.jpg" alt="&#1083;&#1091;&#1095;&#1096;&#1072;&#1103; &#1082;&#1083;&#1080;&#1085;&#1080;&#1082;&#1072; &#1053;&#1080;&#1082;&#1086;&#1083;&#1072;&#1077;&#1074;&#1072;"/>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div id="map"></div>

<?php get_footer(); ?>