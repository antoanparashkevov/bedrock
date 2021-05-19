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
