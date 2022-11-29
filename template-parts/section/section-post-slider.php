<?php
$news = get_field( 'news', 2 );

$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 12
);

$posts = get_posts( $args );

?>

<div class="section section-post-slider">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="section-post-slider__article">
                    <div class="section-heading">
                        <p class="title"><?php echo $news['title']; ?></p>
                    </div>
                    <div class="section-content">
                        <p><?php echo $news['content']; ?></p>
                        <a href="<?php echo $news['button']['url']; ?>" title="<?php echo $news['button']['title']; ?>"
                           class="btn"><?php echo $news['button']['title']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="section-post-slider__posts">
                    <div class="slider-post owl-carousel">
						<?php foreach ( $posts as $post ): ?>
                            <div class="slide">
                                <div class="slide__post">
                                    <a href="<?php echo get_the_permalink( $post->ID ); ?>"
                                       title="<?php echo $post->post_title; ?>">
                                        <div class="slide__background"
                                             style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'post-slider-thumbnail' ); ?>);">
                                            <div class="slide__date"><?php echo get_the_time( 'd.m.Y', $post->ID ); ?></div>
                                            <div class="slide__heading">
                                                <p class="title"><?php echo $post->post_title; ?></p>
                                                <span class="btn"><?php _e( 'przeczytaj całość', 'Stolmar' ); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>