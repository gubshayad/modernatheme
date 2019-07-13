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
		
					<?php if(have_posts())?>
                    <style>
                        .author_profile{overflow:hidden;}
                        .author_profile h2{font-size:20px;}
                        .author-details img{width:200px; height:100px; float:left; margin-right:30px; }
                        .author-details p{}
                    </style>

                    <div class="author_profile">
                        <h2>Author Profile</h2>
                        <div class="author-details">
                            <img src="http://placehold.it/250x300" alt="">
                            <h2><?php the_author(); ?></h2>
                            <p><?php the_author_meta('description') ?></p>
                        </div>
                        <div class="author-link">
                            <a href="<?php the_author_meta('user_url') ?>"><i class="fa fa-globe"></i> View details</a> | <a href="mailto:<?php the_author_meta( 'user_email') ?>"><i class="fa fa-globe"></i> Author Email</a>
                        </div>
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

