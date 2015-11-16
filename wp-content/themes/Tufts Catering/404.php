<?php get_header(); ?>
    <?php 
        $bgimg = get_field('404_background','options');
        $bgimgurl = $bgimg['url'];
         ?>
    <!-- Full Page Image Background Carousel Header -->
    
    <div class="four-zero-four" style="background-image: url(<?php echo $bgimgurl; ?>);" >
	    
	            <div class="container">
					<?php the_field('404_text', 'options'); ?>
				</div>
	    
    </div>
    


  
<?php get_footer(); ?>