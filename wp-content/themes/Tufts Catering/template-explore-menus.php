<?php /* Template Name: Explore Menus */
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
				<div class="row">
				<?php 
				        if($posts = get_field('pages_to_show')): 
				        
				        	foreach($posts as $post):
				        		setup_postdata($post); 
				?>
					<div class="col-md-6">
						<div class="category">
                            <a href="<?php the_permalink(); ?>" title="Party Platters">
                                <?php the_post_thumbnail('category'); ?>
                                <div class="category-name">
                                    <div class="line"></div>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </a>
                        </div>
					</div>
				<?php 
				       endforeach; wp_reset_postdata(); endif; 
				?>
				</div>
			</div>
		</section>
    <!-- /.Features Section -->

    <?php get_template_part('content','bottom'); ?>

<?php get_footer(); ?>