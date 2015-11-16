<?php get_header(); the_post(); ?>

    <?php 
        $bgimg = get_field('default_page_banner','options');
        $bgimgurl = $bgimg['sizes']['page-banner'];
        $bgimg2 = get_field('page_banner_image'); 
        if(isset($bgimg2['sizes']['page-banner'])){ 
        		$bgimgurl = $bgimg2['sizes']['page-banner']; 
        } ?>
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

<?php if(get_field('menu_content')): $tabcount = count(get_field('menu_content')); endif; ?>
<?php //while(has_sub_field('repeater_field_name')): ?>

    <!-- Features Section -->
    <section class="features-intro">
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
        <?php if($tabcount > 1){ ?>
            <div class="tabs-content">
                <div class="col-md-12">
                    <a href="#" class="nav-tabs-dropdown dropdownes-title">Tabs</a>
                    <ul id="nav-tabs-wrapper" class="nav nav-tabs">
                    <?php $t = 1; while(has_sub_field('menu_content')): ?>
                        <li class="dropdownes-list<?php if($t == 1){ ?> active<?php } ?>"><a href="#<?php echo clean(str_replace(' ','-',strtolower(get_sub_field('tab_name')))); ?>" data-toggle="tab"><?php the_sub_field('tab_name'); ?></a></li>
                    <?php $t++; endwhile; ?>
                    </ul>
                </div><?php } ?>
            <div id="my-tab-content" class="tab-content">
            <?php $t = 1; while(has_sub_field('menu_content')) : ?>
                <div class="tab-pane<?php if($t == 1){ ?> active<?php } ?>" id="<?php echo clean (str_replace(' ','-',strtolower(get_sub_field('tab_name')))); ?>">
                    <div class="menus">
                        <div class="col-md-7">
                        	<div id="left-sidebar">
								<?php while(the_flexible_field("tab_menu_sections")):
    
										if(get_row_layout() == "description_table"): 
							?> 
		                            <div class="menu-type">
		                            <?php if(get_sub_field('section_header')): ?>
		                                <div class="title-menu-type">
		                                    <h3><?php the_sub_field('section_header'); ?></h3>
		                                    <span><?php the_sub_field('section_price'); ?></span>
		                                </div>
		                            <?php endif; ?>
		                                <div class="description-menu-type">
		                            <?php while(has_sub_field('description_sections')): ?>
		                            <?php if(get_sub_field('description_section_width') == 'full'){ ?>
		                                    <!-- <div class="col-md-12"> -->
		                                    	<?php if($headlineItalic = get_sub_field('description_section_headline_italic')): ?><p><em><?php echo $headlineItalic; ?></em></p><?php endif; ?>
		                                        <?php if(get_sub_field('description_section_headline')): ?><span><?php the_sub_field('description_section_headline'); ?></span><?php endif; ?>
		                                       
		                                       	<?php while(has_sub_field('description_section_items')): ?>
		                                        <?php the_sub_field('item_name'); ?>
		                                        <?php endwhile; ?>
		                                    <!-- </div> -->
		                            <?php } else { ?>
		                                    <div class="col-md-6">
		                                        <?php if(get_sub_field('description_section_headline')): ?><span><?php the_sub_field('description_section_headline'); ?></span><?php endif; ?>
		                                        <?php if($headlineItalic = get_sub_field('description_section_headline_italic')): ?><p><em><?php echo $headlineItalic; ?></em></p><?php endif; ?>
		                                        <?php while(has_sub_field('description_section_items')): ?>
		                                        <?php the_sub_field('item_name'); ?>
		                                        <?php endwhile; ?>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <?php if(get_sub_field('description_section_2_headline')): ?><span><?php the_sub_field('description_section_2_headline'); ?></span><?php endif; ?>
		                                        <?php if($headlineItalic2 = get_sub_field('description_section_2_headline_italic')): ?><p><em><?php echo $headlineItalic2; ?></em></p><?php endif; ?>
		                                      <?php while(has_sub_field('description_section_2_items')): ?>
		                                        <?php the_sub_field('item_name'); ?>
		                                        <?php endwhile; ?>
		                                    </div>
		                            <?php } endwhile; ?>
		                                </div>
		                            </div>
                        
							<?php 
							        elseif(get_row_layout() == "pricing_table"): 
							?>
                        
                            <div class="menu-type">
                                <div class="title-menu-type">
                                    <h3><?php the_sub_field('section_header'); ?></h3>
                                </div>
                                <div class="description-menu-type">
                                  <?php $numcols = get_sub_field('number_of_pricing_columns'); ?>
                                    <table class="table" border="0">
                                    <?php if(get_sub_field('section_description')): ?>
                                        <tr>
                                            <td><small><em><?php the_sub_field('section_description'); ?></em></small></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    <?php endif; ?>
                                  
                                    <?php $r = 1; $th = get_sub_field('use_first_row_as_table_header'); while(has_sub_field('table_rows')): ?>
                                    <?php if($th == 'yes' && $r == 1){ ?>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <?php if($numcols >= 1){ ?><th><?php the_sub_field('column_1'); ?></th><?php } ?>
                                            <?php if($numcols >= 2){ ?><th><?php the_sub_field('column_2'); ?></th><?php } ?>
                                            <?php if($numcols >= 3){ ?><th><?php the_sub_field('column_3'); ?></th><?php } ?>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td><?php the_sub_field('item_name'); if(get_sub_field('item_description')){ ?><br><small><?php the_sub_field('item_description'); ?></small><?php } ?></td>
                                            <?php if($numcols >= 1){ ?><td><?php the_sub_field('column_1'); ?></td><?php } ?>
                                            <?php if($numcols >= 2){ ?><td><?php the_sub_field('column_2'); ?></td><?php } ?>
                                            <?php if($numcols >= 3){ ?><td><?php the_sub_field('column_3'); ?></td><?php } ?>
                                        </tr>
                                    <?php } $r++; endwhile; ?>
                                        
                                    </table>
                                </div>
                            </div>
                        
<?php endif; endwhile; ?>
</div>
       </div>                 </div>
                        <div class="col-md-1">
                        </div>                        
                        
                        <div class="col-md-4">
                        	<div id="sidebar">
                        
<?php 
    while(the_flexible_field("tab_sidebar_modules")):
    
        if(get_row_layout() == "general_content"): 
?> 
                        
                            
                            <?php if($img = get_sub_field('top_image')){ ?>
                            	<div class="menu-image">
                            		<img src="<?php echo $img['sizes']['side-bar-menu']; ?>" alt="<?php echo $img['alt']; ?>" />
                            	</div>
                            <?php } ?>
                            
                            <div class="menu-information">
                                <h3><?php the_sub_field('sidebar_headline'); ?></h3>
                                  <h4>Menu Key</h4>
								<p>VM: Vegetarian<br/>
								VG: Vegan<br/>
								GF: Gluten-Free</p>
                                <?php the_sub_field('sidebar_content'); ?>
                     
                            </div>
<?php 
        elseif(get_row_layout() == "place_an_order"): 
?>
                            <div class="order-section">
                                <h3><?php the_field('po_headline','options'); ?></h3>
                                <div class="col-xs-5">
                                    <img alt="" src="<?php the_field('po_left_image','options'); ?>" />
                                    <a class="order-button" href="<?php the_field('po_left_button_link','options'); ?>" title="Order Online" target="_blank"><?php the_field('po_left_button_link_text','options'); ?></a>
                                </div>
                                <div class="col-xs-2">
                                    <img alt="" src="<?php bloginfo('url'); ?>/ui/images/or-vertical.png" class="" height="192" width="32">
                                </div>
                                <div class="col-xs-5">
                                    <img alt="" src="<?php the_field('po_right_image','options'); ?>" />
                                    <p class="phone">CALL <br/><strong><?php the_field('po_phone_number_text','options'); ?></strong></p>
                                </div>
                            </div>
<?php endif; endwhile; ?>
                        </div>

                    </div>
                </div>
                <?php $t++; endwhile; ?>
            </div>
            <?php if($tabcount > 1){ ?></div><?php } ?>
        <?php //endif; ?>
        </div>
    </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    </section>
    <!-- /.container -->

    
    <?php get_template_part('content','bottom'); ?>

<?php get_footer(); ?>
