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
					<div class="col-lg-8">
		
					<?php if(have_posts()): while(have_posts()) : the_post()?>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							<?php endwhile;?>	
							<?php else:?>
								<h2>404 not found</h2>
							<?php endif;?>
					
					
						<div id="pagination">
							<span class="all">Page 1 of 3</span>
							<span class="current">1</span>
							<a href="#" class="inactive">2</a>
							<a href="#" class="inactive">3</a>
						</div>
					</div>
					<div class="col-lg-4">
						<aside class="right-sidebar">
						<?php dynamic_sidebar('blog_sidebar')?>
							
						</aside>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>