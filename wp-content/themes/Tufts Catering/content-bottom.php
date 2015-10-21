<?php 
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
        
<?php 
        elseif(get_row_layout() == "content_with_image_on_right"): 
?>
        
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