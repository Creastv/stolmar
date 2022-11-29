<?php
$details = get_field( 'details' );
$slides  = get_field( 'slides' );
?>

<?php if ( ! empty( $slides ) ): ?>
    <div class="section section-slider">
        <i class="line" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"></i>
        <div class="slider-main owl-carousel">
			<?php $i = 1;
			foreach ( $slides as $slide ): ?>
                <div class="slide"
                     style="background-image: url(<?php echo wp_get_attachment_image_url( $slide, 'home-slide-background' ); ?>"
                     data-dot="<button><?php echo sprintf( '%02d', $i );; ?></button>">
                </div>
				<?php $i ++; endforeach; ?>
        </div>
        <div class="content-slider-inv">
            <div class="container">
            <div class="section-slider__details">
                <div>
                    <h2 class="title"><?php echo $details['name']; ?></h2>
                    <p><?php echo $details['address']; ?></p>
                    <!-- <?php if($details['content']) { ?>
                    <div class="desc">
                       <?php echo $details['content']; ?>
                    </div>
                    <?php } ?> -->
                </div>
                <div>
                    <?php if($details['link_buttona']) { ?>
                    <a href="<?php echo $details['link_buttona']; ?>" title="kliknij i znajdź mieszkanie" class="btn">
                    <?php } else { ?>
                    <a href="#flats-table" title="kliknij i znajdź mieszkanie" class="btn">
                    <?php } ?>
                        <?php if($details['tresc_button']) { ?>
                        <?php echo $details['tresc_button'];?>
                        <?php } else { ?>
                        kliknij i znajdź mieszkanie
                        <?php } ?>
                    </a>
                </div>
           </div>
           </div>
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
        <a href="#" class="scroll-down">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/scroll-down.png" alt="Scroll Down" width="37" height="80">
            <span>przewiń do dołu</span>
        </a>
    </div>
    <script>
        const scrollBtn = document.querySelector(".scroll-down");
        scrollBtn.addEventListener("click", () => {
            event.preventDefault();
            window.scrollTo({
                top: window.innerHeight - 200,
                behavior: "smooth"
            });
        });
    </script>
<?php else : ?> 
   <?php get_template_part('template-parts/section/section', 'header'); ?>
<?php endif; ?>


