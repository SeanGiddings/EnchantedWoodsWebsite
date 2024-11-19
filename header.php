<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title>
	Christmas Trails | Louisville KY's Premiere
	Christmas Experience
  </title>
  <meta name="description" content="Christmas Trails" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Federo&display=swap" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177636836-1"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Luckiest+Guy&family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-177636836-1');
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v21.0"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
	<header id="header">

	  <!--NavBar-->
	  <!-- <div class="header__container">
		<?php
		$menuItems = wp_get_nav_menu_items( 'Main Navigation' );
		?>
		<nav class="navbar navbar-expand-lg navbar-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav"> -->

			  <!-- <?php
				foreach ( $menuItems as &$item ) {
					$menuItemMarkup  = '<li class="nav-item nav__item nav__' . strtolower( $item->title ) . '">';
					$menuItemMarkup .= '<a class="nav-link nav__link" target="' . $item->target . '" href="' . $item->url . '">' . $item->title . '</a>';
					$menuItemMarkup .= '</li>';
					echo $menuItemMarkup;
				}
				?> -->

			  <!--<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Reviews
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="#">Facebook Reviews</a>
			  <a class="dropdown-item" href="#">Accolades</a>
			</div>
		  </li>--->
		  <!-- </div> -->
		  <div class="header__socialmedia">
			<a href="https://www.facebook.com/profile.php?id=61568327801106" target="_blank">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_facebook.png" alt="facebook icon" class="footer__facebook socialmedia__icon" />
			</a>
		  </div>
		<!-- </nav> -->


		<!--Logo-->

		<a class="header__brand img-fluid" href="/">
		  <img id="logo" class="header__logo header__logo-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Grim Trails Haunted House Logo" aria-label="Grim Trails Haunted House Logo" />
		</a>
	  </div>

	  <?php do_action( 'announcements_section' ); ?>

	  <?php if ( is_active_sidebar( 'announcement__section' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'announcement__section' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

	</header>
	<div id="container">
