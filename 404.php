<?php get_header(); ?>
 <?php get_template_part('template-parts/section/section', 'header'); ?>
<div id="error" class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>404</h1>
            <h2>Upss. Chyba się zgubiłeś?</h2>
            <a class="btn btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                Wróć do strony głównej</a>
        </div>
    </div>
</div>
<?php
get_footer();
?>