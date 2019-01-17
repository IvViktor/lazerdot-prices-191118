<?php
/*
  Template Name: New Lazerdot Reviews
 */
?>

<?php
$vivan_reviews_inform_message_class_name = null;
$vivan_reviews_inform_message_text = null;
function vivan_reviews_renderer_helper($is_error, $message_text){
	global $vivan_reviews_inform_message_class_name, $vivan_reviews_inform_message_text;
        if ($is_error){
                $vivan_reviews_inform_message_class_name = 'error-message';
                $vivan_reviews_inform_message_text = $message_text . __('Please try again.');
        } else {
                $vivan_reviews_inform_message_class_name = 'success-message';
                $vivan_reviews_inform_message_text = $message_text;
        }
}

//check if the request type is POST than call the plugin function	
if($_SERVER['REQUEST_METHOD'] === 'POST' && function_exists('vivan_reviews_add_review')) 
	vivan_reviews_add_review($_POST, 'vivan_reviews_renderer_helper');
?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-md-12">
                <?php if(isset($vivan_reviews_inform_message_class_name) && !empty($vivan_reviews_inform_message_text)): ?>
                    <div class="reviews-post-info">
                        <div class="<?php echo $vivan_reviews_inform_message_class_name; ?>">
                            <?php echo $vivan_reviews_inform_message_text; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="text-center">
                    <a id="show-review-form" href=""><i class="fa fa-pencil-square-o" ></i> Оставить свой отзыв</a>
                </div>
        		<form method="POST" id="reviews-form">
        			<input type="hidden" name="_vivan-reviews-visitor-review" value="_new-review" />
        			<input type="text" name="vivan_reviews_visitor_name" placeholder="Введите свое имя" required />
        			<input type="email" name="vivan_reviews_visitor_email" placeholder="Введите свой email" required />
        			<textarea name="vivan_reviews_visitor_review" rows="4" placeholder="Оставьте отзыв тут" required></textarea>
        			<div class="g-recaptcha" data-sitekey="6LfJI4kUAAAAAJC17ITIMUYwwFVTxfU_t8mRG27K" ></div>
        			<div class="submit-wrapper">
                        <input type="submit" value="Оставить отзыв" />
                    </div>
        		</form>
            </div>
        </div>
        <div class="row">
        	<?php $vivan_reviews_query_params = array(
        		'post_type' => 'vivan_visitor_review',
        		'posts_per_page' => 10
        	      );
        	      $vivan_reviews_query_params['paged'] = (get_query_var('page')) ? get_query_var('page') : 1;
        	      $vivan_reviews_query = new WP_Query($vivan_reviews_query_params);
        	      if ($vivan_reviews_query -> have_posts()):
        		while($vivan_reviews_query -> have_posts()): $vivan_reviews_query -> the_post();
        	?>
                <div class="col-md-12">
                    <div class="reviews-content">
    			<div class="visitor-name">
    				<?php echo get_post_meta( get_the_ID(), 'visitor_name', true ); ?>
    			</div>
    			<div class="review-text">
    				<?php the_content(); ?>
    			</div>
                    </div>
                </div>
	       <?php endwhile; endif; ?>
        </div>
    	<div class="row">
    		<div class="col-md-12">
    			<div class="reviews-pagination">
    				<?php 	$vivan_reviews_pagination_params = array(
    						'total' => $vivan_reviews_query -> $max_num_pages,
    						'current' => $vivan_reviews_query_params['paged'],
    						'mid_size' => 1,
    						'prev_text' => '<i class="fas fa-chevron-left"></i>',
    						'next_text' => '<i class="fas fa-chevron-right"></i>',
    						'type' => 'list'
    					);
    					echo paginate_links($vivan_reviews_pagination_params); 
    				?>
    			</div>
    		</div>
    	</div>
    </div>


</div>

<?php get_footer(); ?>
