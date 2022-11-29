<?php
/*
Template Name: Rodzic inwestycji
Template Post Type: page, investment
*/

get_header();
?>
<section id="main" class="single-investment">
	<?php
	get_template_part('single/investment/slider');
	get_template_part('single/investment/about');
	get_template_part('single/investment/flats');
	get_template_part('template-parts/section/section', 'contact');
	get_template_part('single/investment/timeline');
	get_template_part('single/investment/location');
	get_template_part('single/investment/seo');
	get_template_part('single/investment/gallery');
	?>
</section>
<?php get_footer(); ?>
