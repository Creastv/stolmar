<?php
get_header();
$cooperation = get_field( 'cooperation' );
?>
<section id="main" class="page-cooperation">
	<?php get_template_part( 'template-parts/section/section', 'header' ); ?>
    <div id="page-content">
        <div class="page-full__wrapper">
            <div class="page-full__panel left">
                <div class="page-full__background" data-aos="fade-right" data-aos-duration="1000"
                     data-aos-easing="ease-in-sine"></div>
            </div>
            <div class="page-full__panel right">
                <div class="page-full__content">
                    <div class="section-heading">
                        <i class="line"
                           data-aos="fade-down"
                           data-aos-delay="400"
                           data-aos-duration="1000"
                           data-aos-easing="ease-in-sine"
                        ></i>
                        <p class="title"><?php echo $cooperation['job']; ?></p>
                        <p class="subtitle"><?php echo $cooperation['city']; ?></p>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-full__article">
									<?php echo $cooperation['description']; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="page-full__contact">
									<?php echo $cooperation['contact']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
