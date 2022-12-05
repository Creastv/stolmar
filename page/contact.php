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
                                <h3><?php echo $company['title']; ?></h3>
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
                            <h3>Chcesz, żebyśmy oddzwonili lub napisali?</h3>
                            <p class="subtitle">Wpisz numer telefonu oraz / lub adres email -<b> odezwiemy się w przeciągu 24 godzin!</b></p>
							<br>
                            <?php echo do_shortcode( '[contact-form-7 id="3987" title="Formularz - Strona kontakt"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <br><br>
        <div class="container">
            <div class="row">
                <?php if(get_field('info_dodatkowe')) { ?>
                <div class="col-12 ">   
                  <?php the_field('info_dodatkowe'); ?>
                </div>
                <?php } ?>
                <div class="col-12 ">   
                <?php echo $map; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
