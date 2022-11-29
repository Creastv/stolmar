<?php get_header(); ?>
<section id="main" class="page-default">
	<?php get_template_part('template-parts/section/section', 'header'); ?>
    <div id="page-content">
        <div class="container">
			<?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
