<?php

/*
*
* This is single post page template.
*
*/

get_header();

?>


<!-- Page banner -/Start -->
<?php get_template_part('template-part/common-page-banner'); ?>
<!-- Page banner -/End -->


<!-- Blog section -/Start -->
<section class="blog-section single-blog-page">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="row">
                    <?php get_template_part('template-part/post-setup'); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>


    </div>
</section>
<!-- Blog section -/End -->



<?php

get_footer();
