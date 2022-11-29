<div id="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/category-bg.jpg);">
<i class="line aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"></i>
<div id="title-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                <?php if ( is_category() ) : single_cat_title();						
                    elseif (is_page() ) :
                        the_title();
                     elseif (is_singular('investment') && is_post_type('investment')) :
                            the_title(); 
                    elseif (is_post_type('investment')) :
                          _e( 'Inwestycje w sprzedaży', 'cr' );   
                    elseif (is_singular('galleries') ) : 
                        _e( 'Zrealizowane', 'cr' );
                    elseif (is_404() ) :
                        _e( '404', 'cr' );
                    elseif ( is_tag() ) :
                        single_tag_title();
                    elseif ( is_author() ) :
                        the_post();
                        printf( __( '%s', 'cr' ), get_the_author() );
                        rewind_posts();
                    elseif ( is_day() ) :
                        printf( __( 'Dzień: %s', 'cr' ), '<span>' . get_the_date() . '</span>' );
                    elseif ( is_month() ) :
                        printf( __( 'Miesiąc: %s', 'cr' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
                    elseif ( is_year() ) :
                        printf( __( 'Rok: %s', 'cr' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

                    elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                        _e( 'Asides', 'cr' );

                    elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                        _e( 'Images', 'cr');

                    elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                        _e( 'Videos', 'cr' );

                    elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                        _e( 'Quotes', 'cr' );

                    elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                        _e( 'Links', 'cr' );
                    else :
                        _e( 'Aktualności', 'cr' );
                endif; ?>

                </h1>
            </div>
        </div>
    </div>
</div>
</div>