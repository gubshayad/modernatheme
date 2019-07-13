<?php /* Template Name: My blog */ ?>

<?php get_header(); ?>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
				<div class="col-lg-12">
					<?php if(have_posts()):?>
							<h1 class="page-title">
								<?php if ( is_day() ) : ?>
									<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
								<?php elseif ( is_month() ) : ?>
									<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
								<?php elseif ( is_year() ) : ?>
									<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
								<?php else : ?>
									<?php _e( 'Blog Archives', 'twentyten' ); ?>
								<?php endif; ?>
							</h1>

							<?php get_sidebar();?>
							
							<?php else:?>
								<h2>404 not found</h2>
						 <?php endif;?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>