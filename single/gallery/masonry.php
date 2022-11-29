<?php $galleries = get_field( 'galleries' ); ?>

<?php if ( ! empty( $galleries ) ): ?>
    <div id="inwestycja" class="masonry">
		<?php foreach ( $galleries as $gallery ): ?>
            <div class="masonry-brick">
                <a data-fancybox="gallery" href="<?php echo wp_get_original_image_url( $gallery ); ?>" title="Powiększ zdjęcie">
					<?php echo wp_get_attachment_image( $gallery, 'gallery-image-thumbnail' ); ?>
                </a>
            </div>
		<?php endforeach; ?>
    </div>
<?php endif; ?>