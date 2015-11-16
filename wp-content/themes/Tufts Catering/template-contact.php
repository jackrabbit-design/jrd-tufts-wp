<?php /* Template Name: Contact */
get_header(); the_post(); ?>

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
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						
							<div id='map-resp' style="height: 520px; position: relative; width: 100%;"></div>
						</div>
<script>

L.mapbox.accessToken = 'pk.eyJ1Ijoia2V2aW5qcmQiLCJhIjoiY2lnaTYzYmp4ODRqeXcwbHU3N3BycnBieiJ9.K3qj1gEXt8w3s-aSa9iT6w';
//var map = L.mapbox.map('map-resp', 'alejandrojjs.nmoefom9');
var map = L.mapbox.map('map-resp', 'kevinjrd.o507np6i');

var myLayer = L.mapbox.featureLayer().addTo(map);

// Disable drag and zoom handlers.
map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();

// Disable tap handler, if present.
if (map.tap) map.tap.disable();


var geoJson = [{
	"type": "FeatureCollection",
	"features": [{
		"type": "Feature",
		"properties": {
			//"title": "89 Curtis St",
			//"description": "",
			"icon": {
	            "iconUrl": "<?php bloginfo('url'); ?>/ui/images/marked.png",
	            "iconSize": [75, 87], // size of the icon
	            "iconAnchor": [72, 50], // point of the icon which will correspond to marker's location
	            "popupAnchor": [0, 0], // point from which the popup should open relative to the iconAnchor
	            "className": "dot"
	        }
		},
		"geometry": {
			"coordinates": [-71.125035, 42.406319],
			"type": "Point"
		},
		"id": "00cc9f35e1e4a8bc0646c4cb2116aaa1"
	}],
	"id": "kevinjrd.o507np6i"
}]
/*
var geoJson = [{
    "type": "Feature",
    "geometry": {
        "type": "Point",
        "coordinates": [-71.125, 42.406]
    },
    "properties": {
	        "layers": ["grayscale"],
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
*/

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
        					<div class="our-locations">
        					<h4>Address</h4>
							<div class="address acol-one"><?php the_field('address'); ?></div>
							<div class="address acol-two"><?php the_field('address_2'); ?></div>
        					</div>
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
						<div style="position: relative; width: 100%; height: 100%;">
							<div id='map' style="height: 520px; position: relative; width: 100%;"></div>
						</div>
<script>
	
L.mapbox.accessToken = 'pk.eyJ1Ijoia2V2aW5qcmQiLCJhIjoiY2lnaTYzYmp4ODRqeXcwbHU3N3BycnBieiJ9.K3qj1gEXt8w3s-aSa9iT6w';
//var map = L.mapbox.map('map-resp', 'alejandrojjs.nmoefom9');

var map = L.mapbox.map('map', 'kevinjrd.o507np6i');

var myLayer = L.mapbox.featureLayer().addTo(map);

// Disable drag and zoom handlers.
map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();

// Disable tap handler, if present.
if (map.tap) map.tap.disable();
/*

var geoJson = [{
    "type": "Feature",
    
    "geometry": {
        "type": "Point",
        "coordinates": [-71.125, 42.406]
    },
    "properties": {
	    "layers": ["grayscale"],
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
*/


var geoJson = [{
	"type": "FeatureCollection",
	"features": [{
		"type": "Feature",
		"properties": {
			//"title": "89 Curtis St",
			//"description": "",
			"icon": {
	            "iconUrl": "<?php bloginfo('url'); ?>/ui/images/marked.png",
	            "iconSize": [75, 87], // size of the icon
	            "iconAnchor": [72, 50], // point of the icon which will correspond to marker's location
	            "popupAnchor": [0, 0], // point from which the popup should open relative to the iconAnchor
	            "className": "dot"
	        }
		},
		"geometry": {
			"coordinates": [-71.125035, 42.406319],
			"type": "Point"
		},
		"id": "00cc9f35e1e4a8bc0646c4cb2116aaa1"
	}],
	"id": "kevinjrd.o507np6i"
}]

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
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $c; ?>l"><?php the_sub_field('direction_title'); ?><span class="glyphicon glyphicon-plus"></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $c; ?>l" class="panel-collapse collapse">
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
                    <?php $r = 1; while(has_sub_field('right_column_directions')): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $r; ?>r"><?php the_sub_field('direction_title'); ?><span class="glyphicon glyphicon-plus"></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $r; ?>r" class="panel-collapse collapse">
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
                    <?php $r++; endwhile; ?>
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
					
						<?php gravity_form( 1, true, false); ?>
                 
					</div>
                 
				</div>
			</div>
		</section>


    <?php get_footer(); ?>