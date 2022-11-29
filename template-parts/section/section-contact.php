<?php $contact = get_field( 'contact', 'option' ); ?>

<div class="section section-contact">
    <div class="container">
        <div class="section-contact__wrapper">
            <div class="row">
                <div class="">
                    <div class="section-contact__meet">
                        <span><?php echo $contact['superscription']; ?></span>
                        <p><?php echo $contact['title']; ?></p>
                    </div>
                </div>
                <div class="">
                    <div class="section-contact__phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-contact-icon.png"
                             alt="Mobile Icon" width="45" height="69">
                        <a href="tel:<?php echo $contact['mobile']; ?>" title="Zadzwoń: +48 <?php echo $contact['mobile']; ?>"><?php echo $contact['mobile']; ?></a>
                        <?php if($contact['mobile_two']) { ?>
                            <span>lub</span>
                            <a href="tel:<?php echo $contact['mobile_two']; ?>" title="Zadzwoń: +48 <?php echo $contact['mobile_two']; ?>"><?php echo $contact['mobile_two']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>