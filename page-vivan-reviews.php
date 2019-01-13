<?php
/*
  Template Name: New Lazerdot Reviews
 */
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