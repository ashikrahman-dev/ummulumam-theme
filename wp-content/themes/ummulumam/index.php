<?php

/*
*
* The main template file.
*
*/

get_header();

?>


<!-- Page banner -/Start -->
<?php get_template_part('template-part/common-page-banner'); ?>
<!-- Page banner -/End -->


<!-- Blog section -/Start -->
<section class="blog-section">
    <div class="container">
        <div class="row">

            <?php get_template_part('template-part/blog-setup'); ?>

        </div>


    </div>
</section>
<!-- Blog section -/End -->



<?php

get_footer();
