<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mark_One_Page_Theme
 */

get_header();
?>

    <section class="section-gap section-top ">
        <div class="container">
            <div class="row justify-content-md-center align-items-center text-lg-left text-center">
                <div class="col-md-4">
                    <img class="mb-lg-0 mb-5" src="assets/img/error-icon.png" alt="">
                </div>
                <div class="col-md-5 pl-lg-5">
                    <h1 class="font-size-60 text-primary"><?php _e('404 ERROR', 'venus'); ?></h1>
                    <p><?php _e('Sorry the page not found', 'venus'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-pill btn-theme"><?php _e('Back to Home', 'venus'); ?></a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();