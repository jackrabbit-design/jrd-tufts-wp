<?php global $P;
    while(the_flexible_field("modules",$P)):
    
        if(get_row_layout() == "three_column_content"): 
?>     
        <!-- Features Section -->
        <section class="features-intro border">
        <!-- Page Content -->
        <div class="container">

            <!-- Marketing Icons Section -->
            <div class="row">
            <?php while(has_sub_field('three_column_module','options')): ?>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="wow fadeInUp center" data-wow-delay="0.1s">
                            <div class="panel-image">
                                <?php $timg = get_sub_field('threecol_image','options'); ?>
                                <?php if(isset($timg['sizes']['threecol-img'])){ ?><img src="<?php echo $timg['sizes']['threecol-img']; ?>" alt="<?php echo $timg['alt']; ?>" /><?php } ?>
                            </div>
                            <div class="panel-heading">
                                <h4><?php the_sub_field('threecol_headline','options'); ?></h4>
                            </div>
                            <div class="panel-body">
                                <?php the_sub_field('threecol_description','options'); ?>
                                <?php if(get_sub_field('threecol_button_link','options')): ?><a href="<?php the_sub_field('threecol_button_link','options'); ?>" class="btn btn-default"><?php the_sub_field('threecol_button_text','options'); ?></a><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <!-- /.row -->
    
        </div>
        <!-- /.container -->
    
        </section>
        <!-- /.container -->


<?php 
        elseif(get_row_layout() == "content_with_image_on_left"): 
?>
        
        <?php if(get_sub_field('pull_from_options')) { ?>
        
        
		        	<?php if(get_sub_field('options_content') == 'feature1') { ?> 
		        	
		        	<?php $bgimg = get_field('image_1', 'options'); ?>
		        	<section class="features-intro">
						<div class="container-fluid">
							<div class="row">
					            <div class="dotted-line"></div>
								<div class="col-md-6 nopadding features-intro-img">
									<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
								</div>
								<div class="col-md-6 nopadding">
									<div class="features-text" style="background-color: #<?php the_field('content_background_color_1', 'options'); ?>;">
					                    <div class="wow fadeInLeft center" data-wow-delay="0.1s">
											<h1><?php the_field('headline_1', 'options'); ?></h1>
											<?php the_field('description_1', 'options'); ?>
											<?php if(get_field('button_link_1', 'options')): ?><p><a class="fill" href="<?php the_field('button_link_1', 'options'); ?>"><?php the_field('button_text_1', 'options'); ?></a></p><?php endif; ?>
					                    </div>
									</div>
								</div>
							</div>
						</div>
					</section>

		        	
		        	
		        	
		        	<?php } elseif(get_sub_field('options_content')== 'feature2') { ?>
					
		        	<?php $bgimg = get_field('image_2', 'options'); ?>
		        	<section class="features-intro">
						<div class="container-fluid">
							<div class="row">
					            <div class="dotted-line"></div>
								<div class="col-md-6 nopadding features-intro-img">
									<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
								</div>
								<div class="col-md-6 nopadding">
									<div class="features-text" style="background-color: #<?php the_field('content_background_color_2', 'options'); ?>;">
					                    <div class="wow fadeInLeft center" data-wow-delay="0.1s">
											<h1><?php the_field('headline_2', 'options'); ?></h1>
											<?php the_field('description_2', 'options'); ?>
											<?php if(get_field('button_link_2', 'options')): ?><p><a class="fill" href="<?php the_field('button_link_2', 'options'); ?>"><?php the_field('button_text_2', 'options'); ?></a></p><?php endif; ?>
					                    </div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					
					<?php } ?>
        
        
        
       <?php } else { ?>
        
       <?php $bgimg = get_sub_field('image'); ?>
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line"></div>
					<div class="col-md-6 nopadding features-intro-img">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
					<div class="col-md-6 nopadding">
        				<div class="features-text" style="background-color: #<?php the_sub_field('content_background_color'); ?>;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
        						<h1><?php the_sub_field('headline'); ?></h1>
        						<?php the_sub_field('description'); ?>
        						<?php if(get_sub_field('button_link')): ?><p><a class="fill" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a></p><?php endif; ?>
                            </div>
        				</div>
					</div>
				</div>
			</div>
		</section>
        
        <?php } ?>
        
        
        

        
<?php 
        elseif(get_row_layout() == "content_with_image_on_right"): 
?>

        <?php if(get_sub_field('pull_from_options')) { ?>
        
        
		<?php if(get_sub_field('options_content') == 'feature1') { ?> 

        <?php $bgimg = get_field('image_1','options'); ?>
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line"></div>
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
					<div class="col-md-6 nopadding">
        				<div class="features-text" style="background-color: #<?php the_field('content_background_color_1','options'); ?>;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
        						<h1><?php the_field('headline_1','options'); ?></h1>
        						<?php the_field('description_1','options'); ?>
        						<?php if(get_field('button_link_1','options')): ?><p><a class="fill" href="<?php the_field('button_link_1','options'); ?>"><?php the_field('button_text','options'); ?></a></p><?php endif; ?>
                            </div>
        				</div>
					</div>
					<div class="col-md-6 nopadding features-intro-img visible-lg visible-md hidden-sm">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
				</div>
			</div>
		</section>					

		<?php } elseif(get_sub_field('options_content')== 'feature2') { ?>
				  	
        <?php $bgimg = get_field('image_2','options'); ?>
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line"></div>
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
					<div class="col-md-6 nopadding">
        				<div class="features-text" style="background-color: #<?php the_field('content_background_color_2','options'); ?>;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
        						<h1><?php the_field('headline_2','options'); ?></h1>
        						<?php the_field('description_2','options'); ?>
        						<?php if(get_field('button_link_2','options')): ?><p><a class="fill" href="<?php the_field('button_link_2','options'); ?>"><?php the_sub_field('button_text_2','options'); ?></a></p><?php endif; ?>
                            </div>
        				</div>
					</div>
					<div class="col-md-6 nopadding features-intro-img visible-lg visible-md hidden-sm">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
				</div>
			</div>
		</section>
		
						  	
				  	<?php } ?>
				  	
				  	
		  <?php } else { ?>		  	
        
        <?php $bgimg = get_sub_field('image'); ?>
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line"></div>
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
					<div class="col-md-6 nopadding">
        				<div class="features-text" style="background-color: #<?php the_sub_field('content_background_color'); ?>;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
        						<h1><?php the_sub_field('headline'); ?></h1>
        						<?php the_sub_field('description'); ?>
        						<?php if(get_sub_field('button_link')): ?><p><a class="fill" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a></p><?php endif; ?>
                            </div>
        				</div>
					</div>
					<div class="col-md-6 nopadding features-intro-img visible-lg visible-md hidden-sm">
						<div class="features-bg" style="background-image: url(<?php if(isset($bgimg['sizes']['module-img'])){ echo $bgimg['sizes']['module-img']; } ?>)"></div>
					</div>
				</div>
			</div>
		</section>
		
		<?php } ?>


<?php 
        elseif(get_row_layout() == "testimonial"): 

        $post_object = get_sub_field('testimonial_to_display');
        if( $post_object ): $post = $post_object; setup_postdata( $post ); 
        $sideimg = '';
        $bgimg = get_field('side_image'); if(isset($bgimg['sizes']['module-img'])){ $sideimg = $bgimg['sizes']['module-img']; }
	?>
	
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line gray"></div>
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div class="features-bg" style="background-image: url(<?php echo $sideimg; ?>)"></div>
					</div>
					<div class="col-md-6 nopadding">
						<div class="features-text bio" style="background-color: #fff;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
                                <?php $author = get_field('author_image'); ?>
                                <div class="img-bio"><?php if(isset($author['sizes']['author'])){ ?><img src="<?php echo $author['sizes']['author']; ?>" alt="<?php echo $author['alt']; ?>" /><?php } ?></div>
                                <div class="name-bio">
                                    <h2><?php the_field('author'); ?></h2>
                                    <span><?php the_field('author_title'); ?></span>
                                </div>
                                <div class="description-bio"><p><?php the_field('testimonial'); ?></p></div>
                            </div>
						</div>
					</div>
					<div class="col-md-6 nopadding features-intro-img visible-lg visible-md hidden-sm">
						<div class="features-bg" style="background-image: url(<?php echo $sideimg; ?>)"></div>
					</div>
				</div>
			</div>
		</section>
		<?php wp_reset_postdata(); endif; ?>

<?php   endif; endwhile; ?>