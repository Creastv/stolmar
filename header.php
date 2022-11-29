<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107280595-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107280595-1');
</script>
	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
	

<div class="preloader">
    <div class="logo-pre">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stolmar-logo.png"
		     alt="Stolmar Logo">
    </div>
</div>
<?php 
$slides  = get_field( 'slides' );
if($slides){
$classLogo = "has-slider";
}?>
<header id="header" class="<?php echo $classLogo; ?>">
    <div class="container">
        <div class="header__wrapper">
			<?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
            <div class="header__navigation">
				<?php
				get_template_part( 'template-parts/header/header', 'contact' );
				get_template_part( 'template-parts/header/header', 'social' );
				?>
				<div class="header__navigation--hamburger">
                <i></i>
                <span>Menu</span>
            </div>
            </div>
        </div>
    </div>
	<?php get_template_part( 'template-parts/header/header', 'menu' ); ?>
</header>