<?php get_header();
$inv = get_field('inv');
 ?>
<section id="main" class="page-default">
	<?php get_template_part('template-parts/section/section', 'header'); ?>
    <div id="page-content">
        <div class="container">
			<?php the_content(); ?>

            <div class="commercial-inv">
                <?php foreach ( $inv  as $in ): ?>
                    <div class="commercial-inv-wraper">
                    <div class="commercial-inv--left">
                        <?php $image = $in['img_inv'];
                        if( !empty( $image ) ):   echo wp_get_attachment_image( $image, 'medium_large' );  endif;
                        ?>
                    </div>
                    <div class="commercial-inv--right">
                        <div class="commercial-inv--name">
                            <p><?php echo $in['name']; ?></p>
                            <span><?php echo $in['address']; ?></span>
                        </div>
                        <div class="commercial-inv--locals">
                        <?php foreach ( $in['lokale']  as $lokal ): ?>
                            <div class="commercial-inv--local">
                                <a href="<?php echo $lokal['plik']; ?>" target='_blank'>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22.2px"
                                        height="11.2px" viewBox="0 0 22.2 11.2" style="enable-background:new 0 0 22.2 11.2;" xml:space="preserve">
                                        <path d="M0,5.4c0.1-0.3,0.4-0.4,0.7-0.4c6.5,0,12.9,0,19.4,0c0.1,0,0.2,0,0.3,0c-0.1-0.1-0.1-0.2-0.2-0.2c-1.3-1.3-2.6-2.6-3.9-3.9
                                            c-0.3-0.3-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c0.1,0.1,0.1,0.1,0.2,0.2c1.6,1.6,3.2,3.2,4.8,4.8c0.1,0.1,0.2,0.2,0.3,0.3
                                            c0,0.1,0,0.2,0,0.3C22.1,5.8,22,6,21.9,6.1c-1.6,1.6-3.2,3.2-4.8,4.8c-0.3,0.3-0.5,0.3-0.8,0.1c-0.2-0.2-0.2-0.4-0.1-0.7
                                            c0.1-0.1,0.1-0.2,0.2-0.2c1.3-1.3,2.5-2.5,3.8-3.8c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0,0,0-0.1c-0.1,0-0.2,0-0.2,0c-6.5,0-13,0-19.5,0
                                            C0.4,6.1,0.1,6,0,5.7C0,5.6,0,5.5,0,5.4z"/>
                                    </svg>
                                    <span><?php echo $lokal['tekst']; ?></span>
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf.png" alt="pdf" width="23" height="28">
                                </a>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
