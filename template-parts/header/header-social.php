<?php $header = get_field( 'header', 'option' ); ?>

<div class="header__navigation--social">
	<?php if ( $header['instagram'] ): ?>
        <a href="<?php echo $header['instagram']; ?>" title="Instagram" rel="nofollow" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/insta-icon.png"
                 alt="Inst" width="18" height="18">
        </a>
	<?php endif; ?>
	<?php if ( $header['facebook'] ): ?>
        <a href="<?php echo $header['facebook']; ?>" title="Facebook" rel="nofollow" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb-icon.png"
                 alt="Fb" width="9" height="18">
        </a>
	<?php endif; ?>
	<?php if ( $header['linkedin'] ): ?>
        <a href="<?php echo $header['linkedin']; ?>" title="LinkedIn" rel="nofollow" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/in-icon.png"
                 alt="In" width="18" height="17">
        </a>
	<?php endif; ?>
</div>