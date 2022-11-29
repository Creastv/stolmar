<?php get_header(); ?>
    <section id="main" class="page-home">
        <?php
        get_template_part('page/home/home', 'slider');
        get_template_part('page/home/home', 'about');
        get_template_part('page/home/home', 'investment');
        get_template_part('template-parts/section/section', 'contact');
        get_template_part('template-parts/section/section', 'post-slider');
        ?>
    </section>
<?php get_footer();