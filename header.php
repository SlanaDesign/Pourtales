<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<!-- nav -->
				<nav  class="nav" role="navigation">
			<?php		wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu-id' => 'primary-menu',
		'menu_class' => 'menu',
) );
?>
				</nav>
				<!-- /nav -->

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<?php echo get_the_post_thumbnail(2); ?>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav id="site-navigation" class="nav main-navigation" role="navigation">
				<?php		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu-id' => 'primary-menu-2',
			'menu_class' => 'menu',
	) );
	?>
					</nav>
					<!-- /nav -->



			</header>
			<!-- /header -->
			<nav id="menu-langue" class="nav menu-langue" role="navigation">
		<?php		wp_nav_menu( array(
		'theme_location' => 'menu-3',
		'menu-id' => 'menu-langue',
		'menu_class' => 'menu-langue',
		) );
		?>
			</nav>
