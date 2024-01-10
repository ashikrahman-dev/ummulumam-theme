<?php

/*
*
* This is single post page template.
*
*/

get_header();

?>


<!-- Page banner -/Start -->

<?php // get_template_part('template-part/common-page-banner'); 
?>



<!-- Page banner -/End -->


<!-- Blog section -/Start -->
<section class="blog-section single-blog-page">
    <div class="container">

        <div class="single-post-breadcrumb">
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex align-items-center mb-0 gap-2">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url(); ?>" class="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.02 2.83998L3.63 7.03998C2.73 7.73998 2 9.22998 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.28998 21.19 7.73998 20.2 7.04998L14.02 2.71998C12.62 1.73998 10.37 1.78998 9.02 2.83998Z" stroke="#757A89" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 17.99V14.99" stroke="#757A89" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.91003 19.92L15.43 13.4C16.2 12.63 16.2 11.37 15.43 10.6L8.91003 4.08002" stroke="#757A89" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </li>
                        <li class="breadcrumb-item fw-medium text-clr-secondary" aria-current="page">
                            <a href="#" class="text-decoration-none text-clr-secondary">
                                লিখা লিখি
                            </a>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.91003 19.92L15.43 13.4C16.2 12.63 16.2 11.37 15.43 10.6L8.91003 4.08002" stroke="#757A89" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </li>
                        <li class="breadcrumb-item fw-medium text-clr-blue" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="row">
                    <?php get_template_part('template-part/post-setup'); ?>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
</section>
<!-- Blog section -/End -->



<?php

get_footer();
