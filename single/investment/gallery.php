<?php $galleries = get_field( 'galleries' ); ?>

<?php if ( ! empty( $galleries ) ): ?>
    <div class="section section-gallery">
        <div class="container">
            <div class="section-heading">
                <i class="line"  ></i>
                <p class="title">Galeria</p>
            </div>
        </div>
        <div class="section-content">
            <div class="slider-investment owl-carousel">
			    <?php foreach ( $galleries as $gallery ): ?>
                    <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url( $gallery, 'full' ); ?>">
					    <?php echo wp_get_attachment_image( $gallery, 'single-investment-gallery-thumbnail' ); ?>
                    </a>
			    <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>