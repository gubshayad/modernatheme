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
								<?php _e( 'Search results for:', 'moderna' ); ?>
								<div class="page-description"><?php echo get_search_query(); ?></div>
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