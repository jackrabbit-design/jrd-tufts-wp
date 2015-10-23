<?php /* Template Name: Contact */
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
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div style="position: relative; width: 100%; height: 100%;"><div id='map-resp' style="height: 520px; position: relative; width: 100%;"></div></div>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoiYWxlamFuZHJvampzIiwiYSI6ImNpZnEyOWJiaDZyYWdzaWtxbzlhaXcyZzAifQ.CqyCw-Fqu1WJbK1M_zZa1g';
var map = L.mapbox.map('map-resp', 'alejandrojjs.nmoefom9');

var myLayer = L.mapbox.featureLayer().addTo(map);

var geoJson = [{
    "type": "Feature",
    "geometry": {
        "type": "Point",
        "coordinates": [-71.125, 42.406]
    },
    "properties": {
        "title": "TUFTS - Catering",
        "icon": {
            "iconUrl": "<?php bloginfo('url'); ?>/ui/images/marked.png",
            "iconSize": [75, 87], // size of the icon
            "iconAnchor": [25, 25], // point of the icon which will correspond to marker's location
            "popupAnchor": [0, -25], // point from which the popup should open relative to the iconAnchor
            "className": "dot"
        }
    }
}];

// Set a custom icon on each marker based on feature properties.
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;

    marker.setIcon(L.icon(feature.properties.icon));
});

// Add features to the map.
myLayer.setGeoJSON(geoJson);
</script>
					</div>
					<div class="col-md-6 nopadding">
        				<div class="features-text bio" style="background-color: #5f636a;">
      						<ul>
                                <li><strong>Tufts Catering</strong></li>
                                <?php if(get_field('address')): ?><li><?php the_field('address'); ?></li><?php endif; ?>
                                <?php if(get_field('address_2')): ?><li><?php the_field('address_2'); ?></li><?php endif; ?>
                                <?php if(get_field('city_state_zip')): ?><li><?php the_field('city_state_zip'); ?></li><?php endif; ?>
                            </ul>
                            <?php if(get_field('days') || get_field('hours')): ?>
                            <ul>
                                <li><strong>Hours</strong></li>
                                <li><span><?php the_field('days'); ?></span> <?php the_field('hours'); ?></li>
                            </ul>
                            <?php endif; ?>
                            <ul>
                                <li><strong>Contact</strong></li>
                                <?php if(get_field('phone')): ?><li><span>Phone</span> <?php the_field('phone'); ?></li><?php endif; ?>
                                <?php if(get_field('fax')): ?><li><span>Fax</span> <?php the_field('fax'); ?></li><?php endif; ?>
                                <?php if(get_field('email')): ?><li><span>Email</span> <a href="mailto:<?php the_field('email'); ?>" title="Email Us"><?php the_field('email'); ?></a></li><?php endif; ?>
                            </ul>
        				</div>
					</div>
					<div class="col-md-6 nopadding visible-lg visible-md hidden-sm">
						<div style="position: relative; width: 100%; height: 100%;"><div id='map' style="height: 520px; position: relative; width: 100%;"></div></div>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoiYWxlamFuZHJvampzIiwiYSI6ImNpZnEyOWJiaDZyYWdzaWtxbzlhaXcyZzAifQ.CqyCw-Fqu1WJbK1M_zZa1g';
var map = L.mapbox.map('map', 'alejandrojjs.nmoefom9');

var myLayer = L.mapbox.featureLayer().addTo(map);

var geoJson = [{
    "type": "Feature",
    "geometry": {
        "type": "Point",
        "coordinates": [-71.125, 42.406]
    },
    "properties": {
        "title": "TUFTS - Catering",
        "icon": {
            "iconUrl": "<?php bloginfo('url'); ?>/ui/images/marked.png",
            "iconSize": [75, 87], // size of the icon
            "iconAnchor": [25, 25], // point of the icon which will correspond to marker's location
            "popupAnchor": [0, -25], // point from which the popup should open relative to the iconAnchor
            "className": "dot"
        }
    }
}];

// Set a custom icon on each marker based on feature properties.
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;

    marker.setIcon(L.icon(feature.properties.icon));
});

// Add features to the map.
myLayer.setGeoJSON(geoJson);
</script>
					</div>
				</div>
			</div>
		</section>
    <!-- /.row -->


    <!-- Features Section -->
        <section class="features-intro">
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-section">Directions</h3>
            </div>
            <div class="col-md-6">
                <div class="directions">
                <div class="panel-group" id="accordion">
                
                    <?php $c = 1; while(has_sub_field('left_column_directions')): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $c; ?>"><?php the_sub_field('direction_title'); ?><span class="glyphicon glyphicon-plus"></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $c; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ol>
                                <?php while(has_sub_field('direction_list')): ?>
                                    <li><?php the_sub_field('direction_list_item'); ?></li>
                                <?php endwhile; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <?php $c++; endwhile; ?>
                </div>
                <!-- /.panel-group -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="directions">
                <div class="panel-group" id="accordionRight">
                    <?php $c = 1; while(has_sub_field('right_column_directions')): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $c; ?>"><?php the_sub_field('direction_title'); ?><span class="glyphicon glyphicon-plus"></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $c; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ol>
                                <?php while(has_sub_field('direction_list')): ?>
                                    <li><?php the_sub_field('direction_list_item'); ?></li>
                                <?php endwhile; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <?php $c++; endwhile; ?>
                </div>
                <!-- /.panel-group -->
                </div>
            </div>
        </div>
        <!-- /.row -->

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