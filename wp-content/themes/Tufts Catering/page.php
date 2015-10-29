<?php get_header(); the_post(); ?>
    
    <?php 
        $bgimg = get_field('default_page_banner','options');
        $bgimgurl = $bgimg['sizes']['page-banner'];
        $bgimg2 = get_field('page_banner_image'); 
        if(isset($bgimg2['sizes']['page-banner'])){ $bgimgurl = $bgimg2['sizes']['page-banner']; } ?>
    <!-- Full Page Image Background Carousel Header -->
    <header class="header-image" style="background-image: url(<?php echo $bgimgurl; ?>);">
        <div class="headline">
            <div class="container">
                <h1><?php if(get_field('title_override') != ''){ the_field('title_override'); } else { the_title(); } ?></h1>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="features-intro">
    <!-- Page Content -->
    <div class="container">

        <div class="centered">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-section"><?php the_field('page_description'); ?></h3>
            </div>
            <div class="tabs-content">
                <div class="dotted-line gray"></div>
            </div>
        </div>
        <!-- /.row -->
        </div>

    </div>
    <!-- /.container -->
    </section>
    <!-- /.container -->

    <!-- Features Section -->
        <section class="features-intro">
			<div class="container">
                <!-- Intro Content -->
                <div class="row">
                    <div class="general-content">
                        <?php get_template_part('content','general'); ?>
                    </div>
                </div>
                <!-- /.row -->
			</div>
		</section>
    
    
    <?php get_template_part('content','bottom'); ?>

<?php get_footer(); ?>