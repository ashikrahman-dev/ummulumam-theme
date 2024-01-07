<?php

/*

* Template Name: Gallery page

*/

get_header();


?>


<!-- Page banner -/Start -->
<?php get_template_part('template-part/common-page-banner'); ?>
<!-- Page banner -/End -->




<!-- Image gallery section -/Start  -->
<section class="image-gallery section-padding-100">
    <div class="container">
        <div class="section-heading mb-5">
            <h2 class="fs-42 fw-bold text-center">
                সম্মানিত কুরআন, সুন্নাহ ও ক্বওল শরীফ
            </h2>
        </div>
        <div class="row">
            <?php query_posts('post_type=sm-image&post_status=publish&posts_per_page=-1&order=ASC&paged=' . get_query_var('post'));

            if (have_posts()) :

                while (have_posts()) : the_post();

            ?>
                    <div class="col-md-3">
                        <div class="image-gallery-item">
                            <?php echo the_post_thumbnail('sm-image'); ?>
                        </div>
                    </div>

            <?php

                endwhile;
            endif;

            ?>
        </div>
    </div>
</section>
<!-- Image gallery section -/Start  -->




<?php

get_footer();
