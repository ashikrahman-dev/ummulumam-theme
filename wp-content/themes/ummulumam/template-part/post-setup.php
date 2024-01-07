<?php

/**
 * This is Post setup template.
 * 
 * 
 */



?>

<div class="col-lg-12">
    <article class="single-post-page-wrap">

        <div class="post-heading">

            <h1 class="post-title fs-38 fw-bold text-clr-blue">

                <?php the_title(); ?>

            </h1>

        </div>

        <div class="post-date-and-category d-flex gap-3 align-items-center">
            <span class=" text-clr-blue fs-14 d-flex gap-2 align-items-center fw-medium">
                <span>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.33301 1.83398V4.58398" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.667 1.83398V4.58398" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20801 8.33203H18.7913" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.25 7.79232V15.584C19.25 18.334 17.875 20.1673 14.6667 20.1673H7.33333C4.125 20.1673 2.75 18.334 2.75 15.584V7.79232C2.75 5.04232 4.125 3.20898 7.33333 3.20898H14.6667C17.875 3.20898 19.25 5.04232 19.25 7.79232Z" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.3869 12.5579H14.3951" stroke="#132247" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.3869 15.3079H14.3951" stroke="#132247" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.9963 12.5579H11.0045" stroke="#132247" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.9963 15.3079H11.0045" stroke="#132247" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.60271 12.5579H7.61095" stroke="#132247" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.60271 15.3079H7.61095" stroke="#132247" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </span> <?php echo get_the_date();  ?>
            </span>
            <p class="post-category-wrap d-flex gap-2 align-items-center fs-6 text-clr-blue">
                <span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.167 8.33268H15.8337C17.5003 8.33268 18.3337 7.49935 18.3337 5.83268V4.16602C18.3337 2.49935 17.5003 1.66602 15.8337 1.66602H14.167C12.5003 1.66602 11.667 2.49935 11.667 4.16602V5.83268C11.667 7.49935 12.5003 8.33268 14.167 8.33268Z" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4.16699 18.3327H5.83366C7.50033 18.3327 8.33366 17.4993 8.33366 15.8327V14.166C8.33366 12.4993 7.50033 11.666 5.83366 11.666H4.16699C2.50033 11.666 1.66699 12.4993 1.66699 14.166V15.8327C1.66699 17.4993 2.50033 18.3327 4.16699 18.3327Z" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.00033 8.33268C6.84127 8.33268 8.33366 6.8403 8.33366 4.99935C8.33366 3.1584 6.84127 1.66602 5.00033 1.66602C3.15938 1.66602 1.66699 3.1584 1.66699 4.99935C1.66699 6.8403 3.15938 8.33268 5.00033 8.33268Z" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.0003 18.3327C16.8413 18.3327 18.3337 16.8403 18.3337 14.9993C18.3337 13.1584 16.8413 11.666 15.0003 11.666C13.1594 11.666 11.667 13.1584 11.667 14.9993C11.667 16.8403 13.1594 18.3327 15.0003 18.3327Z" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </span>
                <?php echo get_the_category_list('/'); ?>
            </p>
        </div>

        <?php

        if (has_post_thumbnail()) :

        ?>
            <div class="post-featured-img">

                <?php echo the_post_thumbnail('post-thumbnails'); ?>

            </div>
        <?php endif; ?>

        <div class="post-content fs-18">
            <?php the_content(); ?>
        </div>
    </article>
</div>