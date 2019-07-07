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
							<div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
						</div>
						<div class="col-sm-6 col-xs-8">
						<div class="social">
								<ul class="social-share">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
								<div class="search">
									<form role="form">
										<input type="text" class="search-form" autocomplete="off" placeholder="Search">
										<i class="fa fa-search"></i>
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