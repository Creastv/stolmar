<?php $slides = get_field( 'slides' ); ?>

<?php if ( ! empty( $slides ) ): ?>
    <div class="section section-slider">
        <div class="slider-main slider-main-home owl-carousel">
			<?php $i = 1;
			foreach ( $slides as $slide ): ?>
                <div class="slide"
                     style="background-image: url(<?php echo wp_get_attachment_image_url( $slide['background'], 'home-slide-background' ); ?>"
                     data-dot="<button><?php echo sprintf( '%02d', $i );; ?></button>">
                    <div class="container">
                        <div class="slide__wrapper">
							<?php if ( ! empty( $slide['attbiutes'] ) ): ?>
                                <div class="slide__attributes">
									<?php foreach ( $slide['attbiutes'] as $attribute ): ?>
                                        <div class="slide__attributes--item">
											<?php echo wp_get_attachment_image( $attribute['icon'], 'full' ); ?>
                                            <p><?php echo $attribute['name']; ?></p>
                                        </div>
									<?php endforeach; ?>
                                </div>
							<?php endif; ?>
                            <div class="slide__container">
                                <div class="slide__content">
                                    <div class="slide__heading">
                                        <span><?php echo $slide['superscription']; ?></span>
                                        <h2><?php echo $slide['title']; ?></h2>
                                    </div>
                                    <div class="slide__description">
                                        <p><?php echo $slide['content']; ?></p>
										<?php if ( ! empty( $slide['button'] ) ): ?>
                                            <a href="<?php echo $slide['button']['url']; ?>"
                                               title="<?php echo $slide['button']['title']; ?>"
                                               class="btn"><?php echo $slide['button']['title']; ?></a>
										<?php endif; ?>
                                    </div>
                                </div>
                                <div class="slide__flats">
                                    <i></i>
                                    <a href="<?php echo $slide['button']['url']; ?>" title="Inwestycje Stolmar">
                                        <?php if($slide['tresc_szukaj_domumieszkania']) { echo $slide['tresc_szukaj_domumieszkania']; } else { echo "mieszkanie"; }; ?>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
				<?php $i ++; endforeach; ?>
        </div>
        <div class="slider-main-nav">
            <span></span>
        </div>
         <div class="slider-arrow-nav">
            <div class="container">
                <div class="wraper-nav">
                    <span class="left-nav"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.png" >
                    </span>
                    <span class="got"></span>
                    <span class="right-nav">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.png" >
                    </span>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>