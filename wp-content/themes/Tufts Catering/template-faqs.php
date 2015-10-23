<?php /* Template Name: FAQs */
get_header(); the_post(); ?>

    <?php 
        $bgimg = get_field('default_page_banner','options');
        $bgimgurl = $bgimg['sizes']['page-banner'];
        $bgimg2 = get_field('page_banner_image'); 
        if(isset($bgimg2['sizes']['page-banner'])){ $bgimgurl = $bgimg['sizes']['page-banner']; } ?>
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
        <?php if(get_field('page_description')): ?>
            <div class="col-md-12">
                <h3 class="title-section"><?php the_field('page_description'); ?></h3>
            </div>
        <?php endif; ?>
            <div class="tabs-content">
            <div class="dotted-line gray"></div>
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <?php $t = 1; while(has_sub_field('faq_tabs')): ?>
                <li<?php if($t == 1){ ?> class="active"<?php } ?>><a href="#<?php echo str_replace(' ','-',strtolower(get_sub_field('tab_name'))); ?>" data-toggle="tab"><?php the_sub_field('tab_name'); ?></a></li>
            <?php $t++; endwhile; ?>
            </ul>
            <div id="my-tab-content" class="tab-content">
            <?php $b = 1; while(has_sub_field('faq_tabs')): ?>
                <div class="tab-pane <?php if($b == 1){ ?>active<?php } ?>" id="<?php echo str_replace(' ','-',strtolower(get_sub_field('tab_name'))); ?>">
                <div class="directions">
                <div class="panel-group" id="accordionRight">
                <?php $a = 1; while(has_sub_field('faqs')): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionRight" href="#collapse<?php echo $b; ?><?php echo $a; ?>"><?php the_sub_field('faq_title'); ?><span class="glyphicon glyphicon-plus"></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $b; ?><?php echo $a; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php the_sub_field('faq_answer'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                <?php $a++; endwhile; ?>
                </div>
                <!-- /.panel-group -->
                </div>
                </div>
                <?php $b++; endwhile; ?>
            </div>
            </div>
        </div>
        <!-- /.row -->
        </div>

    </div>
    <!-- /.container -->

    </section>
    <!-- /.container -->


        <section class="features-intro">
        <hr>
			<div class="container">
				<div class="row">
                    <div class="col-md-12">
                        <h3 class="title-section">Get in touch with Tufts Catering</h3>
                    </div>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="col-md-4">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Name: <span>*</span></label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Department:</label>
                                    <input type="text" class="form-control" id="department" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email Address: <span>*</span></label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Phone Number:</label>
                                    <input type="tel" class="form-control" id="phone" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Message:</label>
                                    <textarea rows="5" cols="100" class="form-control" id="message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="controls center">
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>


                    </form>
				</div>
			</div>
		</section>


    <?php get_footer(); ?>
