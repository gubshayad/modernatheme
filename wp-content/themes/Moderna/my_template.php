<?php /* Template Name: My template */ ?>

<?php get_header(); ?>
<!-- end header -->
<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
				<div id="main-slider" class="flexslider">
					<ul class="slides">

						<?php query_posts(array(
									'post_type'=>'slide',
									'posts_per_page'=> 4,
								)); ?>

						<?php while ( have_posts() ) : the_post(); ?>

						<li>
							<?php the_post_thumbnail('slide-img') ?>
							<div class="flex-caption">
								<h3><?php the_title()?></h3>
								<?php read_more(10);?>...
								<a href="<?php the_permalink(); ?>" class="btn btn-theme">Learn More</a>
							</div>
						</li>
						<?php endwhile; 
									
									// Reset Query
									wp_reset_query();
									?>

					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
</section>
<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row"> 

					<?php query_posts(array(
									'post_type'=>'service',
									'posts_per_page'=> 4,
								)); ?>

					<?php while ( have_posts() ) : the_post(); ?>

					<?php $service_icon = get_post_meta( get_the_ID(), 'Service_icon', true ) ?>

					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?php the_title();?></h4>
								<div class="icon">
									<i class="fa fa-<?php echo $service_icon ?> fa-3x"></i>
								</div>
								<?php the_excerpt(); ?>

							</div>
							<div class="box-bottom">
								<a href="<?php the_permalink() ?>">Learn more</a>
							</div>
						</div>
					</div>

					<?php
						endwhile;			
							wp_reset_query();
					?>

				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">


					<?php query_posts(array(
									'post_type'=>'Portfolio',
									'posts_per_page'=> 4,
								)); ?>

					<?php while ( have_posts() ) : the_post(); ?>

					<?php $service_icon = get_post_meta( get_the_ID(), 'Service_icon', true ) ?>
					<?php $portfolio_thumbn = wp_get_attachment_image_src( get_post_thumbnail_id ($post->ID), 'large'); ?>

							<li class="col-lg-3 design" data-id="id-0" data-type="web">
								<div class="item-thumbs">
									<!-- Fancybox - Gallery Enabled - Title - Full Image -->

									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1"
										href="<?php echo $portfolio_thumbn[0] ?>">

										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
									</a>
									<!-- Thumb Image and Description -->

									<?php the_post_thumbnail('portfolio-thumb')?>

								</div>
							</li>

					<?php
						endwhile;			
							wp_reset_query();
					?>
					
						</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
</section>
<?php get_footer();?>