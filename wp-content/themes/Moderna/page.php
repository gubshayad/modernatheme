<?php get_header();?>

		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li><a href="#">Features</a><i class="icon-angle-right"></i></li>
							<li class="active"><?php the_title(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="internal-inner">
							<?php if(have_posts()): while(have_posts()) : the_post()?>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							<?php endwhile;?>	
							<?php else:?>
								<h2>404 not found</h2>
							<?php endif;?>

						
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php get_footer(); ?>