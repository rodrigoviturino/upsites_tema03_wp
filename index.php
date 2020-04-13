<?php get_header(); ?>

<main style="padding: 120px 0 100px;" class="bg-secondary">
    <div class="container">
        <div class="row justify-content-cente text-center">
            
            <div class="col-md-5 offset-3">
                <h2 class="text-white">We are specialists in the construction industry<span style="color:orangered;">.</span></h2>
            </div>

            <div class="col-md-7 offset-2">
               
            </div>
            
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