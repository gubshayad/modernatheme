   <?php if(have_posts()): the_post(); ?>
        <?php while(have_posts()): the_post(); ?>
    <article>
        <div class="post-slider">
            <div class="post-heading">
                <h3><a href="#"><?php the_title() ?></a></h3>
            </div>
            <!-- start flexslider -->
            <div id="post-slider" class="flexslider">
                <ul class="slides">      
                    <li>
                        <?php the_post_thumbnail( 'post-img', ' ' )?>
                    </li>
                    <li>
                        <?php the_post_thumbnail( 'post-img', ' ' )?>
                    </li>
                    <li>
                        <?php the_post_thumbnail( 'post-img', ' ' )?>
                    </li>
                </ul>
            </div>
            <!-- end flexslider -->
        </div>
        <?php the_content(); ?>
        <div class="bottom-article">
            <ul class="meta-post">
                <li><i class="icon-calendar"></i><a href="#"><?php the_date() ?></a></li>
                <li><i class="icon-user"></i><a href="#"><?php the_author_posts_link(); ?></a></li>
                <li><i class="icon-folder-open"></i><?php the_category( ', ' ); ?></li>
                <li><?php comments_popup_link( '<i class="icon-comments"></i> No comments', '<i class="icon-comments"></i> One comment', '<i class="icon-comments"></i> % comments', '', '' ) ?></li>
            </ul>
            <a href="<?php the_permalink() ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
        </div>
    </article>
<?php endwhile; ?>    
<?php endif; ?>

<?php if(function_exists('wp_pagenavi')) {wp_pagenavi();} else{include('navigation.php');}?>