<?php
$tresc = get_field('tresc');
$bullets = get_field('bullets');
?>

<div id="page-content">
	<img class="sold-inv-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/background-sold.jpg" alt="">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-3">
                <?php get_template_part('single/gallery/aside'); ?>
				
            </div>
			<div id="content" class="col-md-8 col-lg-9">
				<?php if(! empty( $bullets)) {?>
				<div class="sold-bullets">
				<?php foreach ( $bullets as $bullet ): ?>
					<div class="sold-bullets--item">
						<p>
							<span><?php echo $bullet['bold']; ?></span>
							<?php echo $bullet['normal']; ?>
						</p>
				</div>
				<?php endforeach; ?>
				</div>
				<?php } ?>
				<?php if($tresc['opis']) { ?>
				<div class="sold-desc">
					<?php echo $tresc['opis']; ?>
				</div>
				<?php } ?>
				<?php get_template_part('single/gallery/masonry'); ?>
            </div>
		</div>
	</div>
</div>
