<?php 
/**
 * Template Name: page Home
 * 
 */
get_header(); ?>

<main style="padding: 120px 0 100px;" class="bg-secondary">
    <div class="container">
            <div class="col-md-7 offset-2">
               <?php the_content(); ?>
            </div>
    </div>
</main>


<?php 

if( get_theme_mod('up_select_footer') == 'dark' ) {
    get_footer('dark');
} else {
    get_footer('light');
}

?>