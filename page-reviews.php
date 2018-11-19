<?php
/*
  Template Name: Reviews
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

                <?php echo do_shortcode('[katb_input_testimonials group="All" form="1"]'); ?>

                <?php echo do_shortcode('[katb_testimonial group="all" number="all" by="date" id="" rotate="no" layout="0" schema="default"]'); ?>

            </div>

        </div>
    </div>


</div>

<?php get_footer(); ?>