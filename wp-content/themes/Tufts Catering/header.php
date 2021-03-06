<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?></title>
	
	
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('url'); ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('url'); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('url'); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('url'); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('url'); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('url'); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('url'); ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('url'); ?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('url'); ?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('url'); ?>/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('url'); ?>/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#f38a00">
<meta name="msapplication-TileImage" content="<?php bloginfo('url'); ?>/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">	
	
    
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php if(is_page_template('template-contact.php')){ ?>
		<script src='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.js'></script>
		<link href='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.css' rel='stylesheet' />	
	<?php } ?>
</head>

<body <?php body_class('cbp-spmenu-push'); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navigate">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle c-hamburger c-hamburger--htx" id="showLeftPush">
                    <span>toggle menu</span>
                </button>
                <h1>
                	<a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="TUFTS - Catering">
                		<img alt="" src="<?php bloginfo('url'); ?>/ui/images/logo.png"/></a>
                		<span class="rounded-tip"></span>
                	</h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <?php $MainArgs = array(
            	'theme_location' => 'main-menu',
            	'container' => 'div',
            	'container_id' => 'bs-example-navbar-collapse-1',
            	'container_class' => 'navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left',
            	'menu_class' => 'nav navbar-nav navbar-right',
            	'menu_id' => 'header-menu',
            	'depth' => 2,
            	'walker' => new tuft_walker
            ); wp_nav_menu($MainArgs); 

            // <div class="navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">
            //     <ul class="nav navbar-nav navbar-right">
            //         <li>
            //             <a href="#">ORDER ONLINE</a>
            //         </li>
            //         <li class="dropdown">
            //             <a href="#" class="dropdown-toggle" data-toggle="dropdown">PLAN <b class="caret"></b></a>
            //             <ul class="dropdown-menu">
            //                 <li>
            //                     <a href="#">Overview</a>
            //                 </li>
            //                 <li>
            //                     <a href="#">Facilities & Room Types</a>
            //                 </li>
            //                 <li>
            //                     <a href="#">Service Types</a>
            //                 </li>
            //             </ul>
            //         </li>
            //         <li>
            //             <a href="#">MENUS</a>
            //         </li>
            //         <li>
            //             <a href="#">ORDER</a>
            //         </li>
            //         <li>
            //             <a href="#">LEARN</a>
            //         </li>
            //         <li>
            //             <a href="#">CONTACT</a>
            //         </li>
            //     </ul>
            // </div>
?>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>