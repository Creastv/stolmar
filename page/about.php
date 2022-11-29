<?php
get_header();

$about    = get_field( 'about' );
$progress = get_field( 'progress' );
$finished = get_field( 'finished' );

$bullets = get_field( 'bullets' );
?>

<section id="main" class="page-about">
	<?php get_template_part( 'template-parts/section/section', 'header' ); ?>
    <div id="page-content">
        <div class="page-full__wrapper">
            <div class="page-full__panel left">
                <div class="page-full__background" data-aos="fade-right" data-aos-duration="1000"
                     data-aos-easing="ease-in-sine"></div>
            </div>
            <div class="page-full__panel right">
                <div class="page-full__content">
                    <div class="page-about__content">
                        <div class="row">
                            <div class="col-lg-6">
								<?php echo $about['left']; ?>
                                <div class="bullets">
                                <?php foreach ( $bullets as $number ): ?>
                                <div class="bullets--item">
									<p><span class="num"><?php echo $number['numer']; ?></span><?php echo $number['desc']; ?></p>
                                </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<?php echo $about['right']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-about__columns">
            <div class="row">
                <div class="col-12 col-lg-6 page-about__left">
                    <?php if ( ! empty( $finished ) ): ?>
                        <div class="page-about__experience">
                            <div class="section-heading">
                                <p class="title">Inwestycje zrealizowane</p>
                            </div>
                             <a href="#" class="btn">wyszukaj mieszkanie</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 page-about__right">
                    <?php if ( ! empty( $finished ) ): ?>
                        <div class="page-about__experience">
                            <div class="section-heading">
                                <p class="title">Inwestycje zrealizowane</p>
                            </div>
                            <a href="#" class="btn">zobacz nasze realizacje</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
