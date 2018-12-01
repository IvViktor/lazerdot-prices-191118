<?php
/*
  Template Name: Prices single item
 */
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div id="content" class="prices-content">

    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <div class="container content-data">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                 <div class="row">
                     <div class="col-xs-12 content-intro">
                         <a href="https://lazerdot.com.ua/praysy/" class="back-link">Назад к списку цен</a>
                     </div>
                     <div class="col-xs-12 prices-content">
						<?php the_content();?>
                     </div>
                 </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
               <div class="prices-sidebar-header">
                    Прайсы на услуги
               </div>
               <?php 
                    wp_nav_menu(
                        array(
                           'theme_location' => 'left_sidebar_menu',
                           'menu_class' => 'side-menu',
                           'menu_id' => 'prices-menu',
                           'depth' => 2
                        )
                    );
               ?>
            </div>
        </div>
    </div>


</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
