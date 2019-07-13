<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta charset="<?php bloginfo('charset')?>">
	<title><?php bloginfo('name')?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />

	<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

<?php wp_head(); ?>

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header id="header">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-4">

						<?php $phone_no = ot_get_option( 'phone_no'); ?>

							<?php if($phone_no) : ?>

							<div class="top-number"><p><i class="fa fa-phone-square"> <?php echo $phone_no; ?></i></p></div>
								<?php endif ;?>
							</div>
						<div class="col-sm-6 col-xs-8">
						<div class="social">
								<ul class="social-share">
								<?php 
								/* get the slider array */
										$socialicons = ot_get_option( 'social_link', array() );
										
										if ( ! empty( $socialicons ) ) {
											foreach( $socialicons as $socialicon ) {
											echo '
											<li><a href="'.$socialicon['href'].'" alt="'.$socialicon['title'].'" target="_blank"><i class="fa fa-'.$socialicon['name'].'"></i></a></li>';
											}
										}
								?>
								</ul>
								<div class="search">
									<form role="form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
										<input type="search" class="search-form" name="s" id="s" autocomplete="off" placeholder="Search">
										<a href=""><i class="fa fa-search"></i></a>
									</form>
								</div>
						</div>
						</div>
					</div>
				</div><!--/.container-->
			</div><!--/.top-bar-->

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.html"><span>M</span>oderna</a>
					</div>
					<div class="navbar-collapse collapse ">
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'main_menu',
								'menu_class'      => 'nav navbar-nav', 
							));
						?>
					</div>
				</div>
			</div>
		</header>