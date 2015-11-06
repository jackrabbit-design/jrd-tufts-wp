<?php /* Template Name: Menu Category */
get_header(); the_post(); ?>

    <!-- Full Page Image Background Carousel Header -->
    <header class="header-image">
        <div class="headline-category">
            <div class="container">
                <div class="centered">
                    <h1 style="color: #5f636a;"><?php if(get_field('title_override') != ''){ the_field('title_override'); } else { the_title(); } ?></h1>
                    <h3><?php the_field('page_description'); ?></h3>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
        <section class="features-intro category-section">
			<div class="container">
				<div id="menu-types" class="row">
				<?php 
				        $mcat = get_field('menu_category'); 
				        query_posts('post_type=menu&menu-type='.$mcat->slug.'&post_status=publish&posts_per_page=-1');
				        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				?>
					<div class="col-md-6">
						<div class="category">
                            <a href="<?php the_permalink(); ?>" title="Party Platters">
                                <?php // the_post_thumbnail('category'); 
	                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'category'); ?>
                               <img src="<?php echo $img[0]; ?>" />
                                <div class="category-name">
                                    <div class="line"></div>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </a>
                        </div>
					</div>
				<?php 
				        endwhile; else: endif; wp_reset_query(); 
				?>
				</div>
			</div>
		</section>
    <!-- /.Features Section -->

    <?php get_template_part('content','bottom'); ?>

<?php get_footer(); ?>