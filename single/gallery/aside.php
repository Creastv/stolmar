<?php
$queried_object = get_queried_object();

$args = array(
	'post_type'      => 'galleries',
	'posts_per_page' => - 1
);

$posts = get_posts( $args );
?>
<aside>
    <div class="section-heading">
        <p class="title">Wybierz inwestycję:</p>
    </div>
    <div class="section-content">
        <ul>
			<?php
			foreach ( $posts as $post ):
				$address = get_field( 'address', $post->ID );
				$year = get_field( 'year', $post->ID );
				?>
                <li <?php echo $post->ID == $queried_object->ID ? ' class="active"' : ''; ?>>
                <?php if ( wp_is_mobile() ) { ?>
                    <a href="<?php echo get_the_permalink( $post->ID ); ?>/#inwestycja" title="<?php echo $post->post_title; ?>">
                <?php } else { ?>
                    <a href="<?php echo get_the_permalink( $post->ID ); ?>" title="<?php echo $post->post_title; ?>">
                <?php } ?>
                        <p class="title"><?php echo $post->post_title; ?></p>
                        <p class="address"><?php echo $address ?></p>
                        <p class="year">rok budowy: <strong><?php echo $year ?: '---' ?></strong></p>
                    </a>
                </li>
			<?php endforeach;
			wp_reset_postdata(); ?>
        </ul>
    </div>
</aside>