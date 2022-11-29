<?php $header = get_field( 'header', 'option' ); ?>

<div class="header__navigation--contact">
    <a  href="tel:+48<?php echo $header['mobile']; ?>" title="Zadzwoń: <?php echo $header['mobile']; ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tel-icon.png"
             alt="Tel" width="13" height="21">
        <?php echo $header['mobile']; ?> 
    </a>
    <?php if($header['mobile_two']) { ?>
        <span class="sep-menu">lub</span>
        <a href="tel:<?php echo $header['mobile_two']; ?>" title="Zadzwoń do nas: <?php echo $header['mobile_two']; ?>"><?php echo $header['mobile_two']; ?></a>
    <?php } ?>
    <a class="email" href="mailto:<?php echo $header['email']; ?>" title="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-icon.png"
             alt="E-mail" width="20" height="17">
        <span><strong><?php echo $header['email']; ?></strong></span>
    </a>
</div>