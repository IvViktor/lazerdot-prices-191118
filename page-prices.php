<?php
/*
  Template Name: Prices
 */
?>

<?php get_header(); ?>

<div id="content" class="prices-content">

    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <div class="container content-data">
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
                     <?php 
                        $plate_items_keys = array(
                            1 => array('plate_image_1','plate_item_text_1','plate_item_target_1'),
                            2 => array('plate_image_2','plate_item_text_2','plate_item_target_2'),
                            3 => array('plate_image_3','plate_item_text_3','plate_item_target_3'),
                            4 => array('plate_image_4','plate_item_text_4','plate_item_target_4'),
                            5 => array('plate_image_5','plate_item_text_5','plate_item_target_5'),
                            6 => array('plate_image_6','plate_item_text_6','plate_item_target_6')
                            );
                        foreach ($plate_items_keys as $plate_item_number => $plate_item_data):
                          $plate_image = get_field($plate_item_data[0]);
                          $plate_item_text = get_field($plate_item_data[1]);
                          $plate_item_target = get_field($plate_item_data[2]);
                          if(empty($plate_image) || empty($plate_item_text) || empty($plate_item_target)) continue;
                      ?>
                           <div class="col-md-4 col-sm-6">
                              <a class="plate-item-link" href="<?php echo $plate_item_target; ?>">
                                  <div class="image-wrapper">
                                      <img src="<?php echo $plate_image['url']?>" alt="<?php echo $plate_image['alt']?>" />
                                  </div>
                                  <div class="plate-item-text">
                                      <?php echo $plate_item_text; ?>
                                  </div>
                              </a>
                           </div>
                      <?php endforeach;?>
                 </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>