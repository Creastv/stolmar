<?php $footer = get_field( 'footer', 'option' ); ?>
<div class="section-form__meta">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-medium-icon.png" alt="Mobile medium" width="22" height="35">
                    <a href="tel:<?php echo $footer['contact']['phone']; ?>" title="Zadzwoń do nas: <?php echo $footer['contact']['phone']; ?>"><?php echo $footer['contact']['phone']; ?></a>
                    <?php if($footer['contact']['phone_two']) { ?>
                    <span>lub</span>
                    <a href="tel:<?php echo $footer['contact']['phone_two']; ?>" title="Zadzwoń do nas: <?php echo $footer['contact']['phone_two']; ?>"><?php echo $footer['contact']['phone_two']; ?></a>
                    <?php } ?>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-medium-icon.png" alt="Email medium" width="34" height="28">
                    <a href="mailto:<?php echo $footer['contact']['email']; ?>" title="Napisz do nas: <?php echo $footer['contact']['email']; ?>"><?php echo $footer['contact']['email']; ?></a>
                </li>
                <?php if($footer['contact']['instagram']) { ?>
                <li>
                    <?php if($footer['contact']['instagram'] && $footer['contact']['facebook']) { ?>
                    <a href="<?php echo $footer['contact']['instagram']; ?>" title="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/insta-medium-icon.png" alt="Instagram medium" width="30" height="30">
                    </a>
                    <?php } ?>
                    <?php if($footer['contact']['facebook']) { ?>
                    <a href="<?php echo $footer['contact']['facebook']; ?>" title="Faceook">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb-medium-icon.png" alt="Facebook medium" width="16" height="30">
                    </a>
                    <?php } ?>
                </li>
                 <?php } ?>
            </ul>
        </div>
<div class="section-form">
    <div class="section-form__contact">
        <div class="section-form__details">
            <div class="section-heading">
                <p class="superscription"><?php echo $footer['aside']['superscription']; ?></p>
                <p class="title"><?php echo $footer['aside']['title']; ?></p>
            </div>
            <div class="section-form__details--address">
				<?php echo $footer['aside']['address']; ?>
            </div>
            <div class="section-form__details--state">
				<div class="group">
                    <div>
                        <p><b><?php echo  $footer['aside']['t_col_left'];?></b></p>
                        <?php echo  $footer['aside']['col_left'];?>
                    </div>
                    <div>
                        <p><b><?php echo  $footer['aside']['t_col_right'];?></b></p>
                        <?php echo  $footer['aside']['col_right'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-form__navigation">
        <div class="section-form__menus">
            <div class="row">
                <div >
                    <div class="section-form__cform">
                        <div class="section-heading">
                            <p class="title"><span>Masz pytania?</span> Napisz do nas</p>
                        </div>
						<?php echo do_shortcode( '[contact-form-7 id="3944" title="Formularz kontaktowy"]' ); ?>
                    </div>
                </div>
                <div >
                    <div class="section-form__navs">
                        <div class="section-form__menu">
	                    <?php
	                        $defaults = array(
		                        'theme_location'  => 'footer',
		                        'menu'            => 'Prawe menu',
		                        'container_class' => '',
		                        'container_id'    => '',
		                        'menu_class'      => 'menu',
		                        'menu_id'         => '',
		                        'echo'            => true,
		                        'fallback_cb'     => 'wp_page_menu',
		                        'before'          => '',
		                        'after'           => '',
		                        'link_before'     => '',
		                        'link_after'      => '',
		                        'items_wrap'      => '<ul>%3$s</ul>',
		                        'depth'           => 0,
		                        'walker'          => ''
	                        );
	                    wp_nav_menu( $defaults );
	                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>