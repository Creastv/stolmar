<?php
get_header();

$company = get_field( 'company' );
$map  = get_field( 'mapa' );
$sales   = get_field( 'sales' );

?>
<section id="main" class="page-contact">
	<?php get_template_part( 'template-parts/section/section', 'header' ); ?>
    <div id="page-content">
        <div class="page-contact__main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="page-contact__address">
                            <div>
                                <?php if($company['title']) { ?>
                                <p class="subtitle"><?php echo $company['title']; ?></p>
                                <?php } ?>
                                <p class="title"><?php echo $company['brand']; ?></p>
                                <address><?php echo $company['address']; ?></address>
                                
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php if($company['col-left']) { ?>
                                    <?php echo $company['col-left']; ?>
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <?php if($company['col-right']) { ?>
                                    <?php echo $company['col-right']; ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="page-contact__form">
                            <p class="title">Chcesz, żebyśmy oddzwonili lub napisali?</p>
                            <p class="subtitle">Wpisz numer telefonu oraz / lub adres email -<b> odezwiemy się w przeciągu
                                24 godzin!</b></p>
							<?php echo do_shortcode( '[contact-form-7 id="3987" title="Formularz - Strona kontakt"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="page-contact">
            <div class="container">
                <div class="page-contact-container">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
						<?php foreach ( $sales['personels'] as $person ): ?>
                                <div class="page-contact-item">
                                    <div class="page-contact-featured">
                                        <?php echo wp_get_attachment_image($person['avatar'], 'contact-person-thumbnail'); ?>
                                    </div>
                                    <div class="page-contact-content">
                                        <p class="title"><?php echo $person['name']; ?></p>
                                        <?php if($person['position']) { ?>
                                           <span> <?php echo $person['position']; ?></span>
                                        <?php } ?>
                                        <ul>
                                            <?php if($person['mobile']) { ?>
                                            <li>
                                                <div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-medium-icon.png"
                                                         alt="Mobile medium" width="22" height="35">
                                                </div>
                                                <a href="tel:+48 <?php echo $person['mobile']; ?>"
                                                   title="Zadzwoń do nas: +48 530 717 718"><span>+48</span> <?php echo $person['mobile']; ?></a>
                                            </li>
                                            <?php } ?>
                                            <?php if($person['email']) { ?>
                                            <li>
                                                <div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-medium-icon.png"
                                                         alt="Email medium" width="34" height="28">
                                                </div>
                                                <a href="mailto:<?php echo $person['email']; ?>" title="Napisz do nas: <?php echo $person['email']; ?>"><?php echo $person['email']; ?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
						<?php endforeach; ?>
                        </div>
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-9">
                            <div class="map">
                            <?php echo $map; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
