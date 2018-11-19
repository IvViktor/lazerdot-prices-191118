<?php
/*
  Template Name: News
 */
?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-md-8">

                <?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

					$args = array(
					   'posts_per_page' => 10,
					   'paged' => $paged,
					   'post_type' => 'news'
					);
				
					if(isset($_GET['author_name'])) :
                            $curauth = get_userdatabylogin($author_name);
                        else :
                            $curauth = get_userdata(intval($author));
                        endif;

					$custom_query = new WP_Query( $args );

					while($custom_query->have_posts()) :
					   $custom_query->the_post();
				?>

                    <article>
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="blog-image">
                                <div class="img-wrap">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        <?php } ?>

                        <h2><?php the_title(); ?></h2>

                        <?php the_excerpt(); ?>

                        <div class="article-footer">
                            <!--<i class="fa fa-comment-o" aria-hidden="true"></i> 3-->

                            <div class="right">
								<span><?php the_author_posts_link(); ?></span> / <time><?php the_time('d F Y г.'); ?></time> / <a class="read-more" href="<?php the_permalink(); ?>">Подробнее</a>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>

                    <div class = "pagination"><?php if (function_exists("pagination")) {
					    pagination($custom_query->max_num_pages);
					} ?></div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>


</div>

<?php get_footer(); ?>