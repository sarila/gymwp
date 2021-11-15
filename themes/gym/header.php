<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php wp_head(); ?>
</head>
<body>

	<header class="site-header">
		<!-- container -->
		<div class="container header-grid">
			<!-- Nav Bar -->
			<div class="navigation-bar">
				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
					</a>
				</div>
				<!-- logo -->

				<?php 
					$args = array(
						'theme_location' => 'main-menu',
						'container' => 'nav',
						'container_class' => 'main-menu'
					);
					wp_nav_menu($args);
				?>
			</div>
			<!-- navbar -->
		</div>
		<!-- container -->
	</header>
