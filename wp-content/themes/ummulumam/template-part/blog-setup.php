<?php

/**
 * This is blog setup template.
 * 
 * 
 */

if (have_posts()) :
    while (have_posts()) : the_post();

?>

        <div class="col-lg-3">
            <article class="single-post-wrap">

                <?php

                if (has_post_thumbnail()) :

                ?>
                    <div class="post-featured-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo the_post_thumbnail('post-thumbnails'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="post-content-wrapper">
                    <div class="post-heading">

                        <h2 class="post-title fs-22 fw-bold text-clr-primary mb-2">
                            <a href="<?php the_permalink(); ?>" class="text-clr-blue">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                    </div>
                    <div class="post-content fs-6">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </article>
        </div>

<?php

    endwhile;
else :
    _e('দুঃখিত! কোন পোস্ট নেই।');
endif;

?>

<div class="page-navigation-wrap justify-content-center d-flex">
    <?php if ('uum_page_nav') {
        uum_page_nav();
    } else { ?>
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>

    <?php } ?>
</div>