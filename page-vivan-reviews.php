<?php
/*
  Template Name: New Lazerdot Reviews
 */
?>

<?php
$inform_message_class_name = '';
$inform_message_text = '';
function renderer_helper($is_error, $message_text){
        if ($is_error){
                $inform_message_class_name = 'error-message';
                $inform_message_text = $message_text . __('Please try again.');
        } else {
                $inform_message_class_name = 'success-message';
                $inform_message_text = $message_text;
        }
}

//check if the request type is POST than call the plugin function	
if($_SERVER['REQUEST_METHOD'] === 'POST') $vivan_reviews_add_review($_POST, $renderer_helper);

?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-md-12">

                <div class="text-center">
                    <a id="show-review-form" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Оставить свой отзыв</a>
                </div>

                <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="reviews-content">
                </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>
