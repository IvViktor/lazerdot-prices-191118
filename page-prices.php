<?php
/*
  Template Name: Prices
 */
?>

<?php get_header(); ?>

<div id="content">

    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
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
            <div class="col-md-9">
                 <div class="row">
                     <div class="col-12 content-intro">
                         <?php the_content();?>
                     </div>
                     <div class="col-md-4 col-sm-6">
                    
                     </div>
                 </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>
