<?php /* Template Name: Home Page */
get_header(); the_post(); ?>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="parallax">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <?php $i = 0; while(has_sub_field('banner_slides')): ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i == 0){ ?>class="active"<?php } ?>></li>
        <?php $i++; endwhile; ?>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
        <?php $i = 1; while(has_sub_field('banner_slides')): ?>
            <div class="item<?php if($i == 1){ ?> active<?php } ?>">
                <div class="fill" style="background-image:url('<?php $slideimg = get_sub_field('slide_image'); if(isset($slideimg['sizes']['home-banner'])){ echo $slideimg['sizes']['home-banner']; } ?>');"></div>
                <div class="carousel-caption">
                    <h1><?php the_sub_field('slide_title'); ?></h1>
                    <?php if(get_sub_field('slide_link_url')): ?><a href="<?php the_sub_field('slide_link_url'); ?>" ><?php the_sub_field('slide_link_text'); ?></a><?php endif; ?>
                </div>
            </div>
        <?php $i++; endwhile; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    </header>
    
    <?php get_template_part('content','bottom'); ?>

<?php get_footer(); ?>