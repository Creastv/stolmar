<?php
$title = get_field( 'editorTitle' );
$editor = get_field( 'editor' );
?>

<?php if ( ! empty( $editor ) ): ?>
    <div class="section section-seo">
        <div class="container">
            <div class="section-heading has-line">
                <i class="line" ></i>
                <h2 class="title">
                    <?php echo $title; ?>
                </h2>
            </div>
            <div class="section-content">
				<?php echo $editor; ?>
            </div>
        </div>
    </div>
<?php endif; ?>