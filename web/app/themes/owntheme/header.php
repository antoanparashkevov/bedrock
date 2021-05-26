<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package owntheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>		
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
   
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'owntheme' ); ?></a>

        <div class="announcement-bar pt-3 pb-3">
            <div class="container">
                <div class="row">
                   <div class="col-md-4">
                      <ul class="announcement-bar__list">
                          <li>
							  
                              <i class="bi bi-envelope-fill text-secondary"></i>
                              <a href="mailto:info@printerers.com">info@printerers.com</a>
                          </li>
                          <li>
                              <i class="bi bi-telephone-fill text-secondary"></i>
                              <a href="tel: +91 0800 123 4567">+91 0800 123 4567</a>
                          </li>
                      </ul>
                   </div>
                    <div class="col-md-8  d-flex justify-content-end">
                        <ul class="announcement-bar__list">
                            <li>
                                <a href='https://www.linkedin.com/'> <i  class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                               <a href="https://www.twitter.com/"> <i class="bi bi-twitter"></i></a>
                                
                            </li>
                            <li>
                                <a href="https://www.facebook.com/"> <i class="bi bi-facebook"></i></a>
                              
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

	<header id="masthead" class="site-header">

	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
            <a class="navbar-brand text-dark" href="#">zendex</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Contact</a>
                </li>
                </ul>
        	</div>
		</div>
	</nav>


	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-bs-interval="5000">
	
  <div class="carousel-inner">

    <div class="carousel-item active">
	
      <img class="d-block w-100" src="http://dtaccu.wpengine.com/wp-content/uploads/2018/08/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://dtaccu.wpengine.com/wp-content/uploads/2018/08/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://dtaccu.wpengine.com/wp-content/uploads/2018/08/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	

	

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$owntheme_description = get_bloginfo( 'description', 'display' );
			if ( $owntheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $owntheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'owntheme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
