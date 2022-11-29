<?php $about = get_field( 'about' ); ?>

<?php if ( ! empty( $about ) ): ?>
    <div class="section section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="section-about__finder">
                        <div class="section-heading">
                            <?php if($about['aside']['superscription']) { ?>
                            <p class="superscription"><?php echo $about['aside']['superscription']; ?></p>
                            <?php } ?>
                            <p class="title"><?php echo $about['aside']['title']; ?></p>
                        </div>
                        <div class="finder__numbers">
                            <?php foreach ( $about['aside']['bullets'] as $number ): ?>
                                <div class="finder__number">
									<p><span class="num"><?php echo $number['numer']; ?></span><?php echo $number['desc']; ?></p>
                                    
                                </div>
							<?php endforeach; ?>
                        </div>
                        <div>
                            <a href="<?php echo $about['aside']['button']['url']; ?>"
                               title="<?php echo $about['aside']['button']['title']; ?>"
                               class="btn"><?php echo $about['aside']['button']['title']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                    <div class="section-about__content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-5">
                                <div class="section-about__trust">
                                    <p class="title"><?php echo $about['title']; ?></p>
                                    <div class="area">
                                        <span><?php echo $about['area']; ?></span>
                                        <p><?php echo $about['areaDescription']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-7">
                                <div class="section-about__description">
	                                <?php echo $about['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>