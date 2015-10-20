<?php /* Template Name: Home Page */
get_header(); the_post(); ?>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="parallax">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('ui/images/slider1.jpg');"></div>
                <div class="carousel-caption">
                    <h1>if You can imagiNe it wE can cReate it</h1>
                    <a href="#" >Learn more</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('ui/images/sustainability.jpg');"></div>
                <div class="carousel-caption">
                    <h1>SustAinabiLity</h1>
                    <a href="#" >Learn more</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('ui/images/bio.jpg');"></div>
                <div class="carousel-caption">
                    <h1>let Us cater to you</h1>
                    <a href="#" >Learn more</a>
                </div>
            </div>
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

    <!-- Features Section -->
    <section class="features-intro">
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="wow fadeInUp center" data-wow-delay="0.1s">
                        <div class="panel-image">
                            <img alt="" src="ui/images/planning.png">
                        </div>
                        <div class="panel-heading">
                            <h4>Planning & Facilities</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend.</p>
                            <a href="#" class="btn btn-default">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default liner">
                    <div class="wow fadeInUp center" data-wow-delay="0.3s">
                        <div class="panel-image">
                            <img alt="" src="ui/images/explore.png">
                        </div>
                        <div class="panel-heading">
                            <h4>Explore Our Menus</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend.</p>
                            <a href="#" class="btn btn-default">VIEW MENUS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="wow fadeInUp center" data-wow-delay="0.5s">
                        <div class="panel-image">
                            <img alt="" src="ui/images/order.png">
                        </div>
                        <div class="panel-heading">
                            <h4>Order Online</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend.</p>
                            <a href="#" class="btn btn-default">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    </section>
    <!-- /.container -->

    <!-- Features Section -->
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line"></div>
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div class="features-bg" style="background-image: url(ui/images/graduation.jpg)"></div>
					</div>
					<div class="col-md-6 nopadding">
        				<div class="features-text" style="background-color: #f38a00;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
        						<h1>GRaduation is Upon us!</h1>
        						<p>Tufts Catering is privileged to be your partner for planning a successful on-campus event-knowledgeable, responsive, and committed to quality. And our food is really delicious, too.</p>
        						<p><a class="fill" href="#">PLAN YOUR EVENT</a></p>
                            </div>
        				</div>
					</div>
					<div class="col-md-6 nopadding features-intro-img visible-lg visible-md hidden-sm">
						<div class="features-bg" style="background-image: url(ui/images/graduation.jpg)"></div>
					</div>
				</div>
			</div>
		</section>
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line"></div>
					<div class="col-md-6 nopadding features-intro-img">
						<div class="features-bg" style="background-image: url(ui/images/cater.jpg)"></div>
					</div>
					<div class="col-md-6 nopadding">
						<div class="features-text" style="background-color: #5f636a;">
                            <div class="wow fadeInRight center" data-wow-delay="0.1s">
        						<h1>let Us cater to you</h1>
        						<p>Tufts Catering is privileged to be your partner for planning a successful on-campus event-knowledgeable, responsive, and committed to quality. And our food is really delicious, too.</p>
        						<p><a class="fill" href="#">LEARN ABOUT US</a></p>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="features-intro">
			<div class="container-fluid">
				<div class="row">
                    <div class="dotted-line gray"></div>
					<div class="col-md-6 nopadding features-intro-img hidden-md hidden-lg">
						<div class="features-bg" style="background-image: url(ui/images/bio.jpg)"></div>
					</div>
					<div class="col-md-6 nopadding">
						<div class="features-text bio" style="background-color: #fff;">
                            <div class="wow fadeInLeft center" data-wow-delay="0.1s">
        						<div class="img-bio"><img alt="" src="ui/images/lenny.png" /></div>
                                <div class="name-bio">
                                    <h2>Lenny Goldstein</h2>
                                    <span>Associate Director, Tufts Hillel</span>
                                </div>
                                <div class="description-bio"><p>I use Tufts Catering for events ranging from simple lunches for ten people to full gourmet dinners for 250. No matter what the scale or the occasion, the management and service staff work with me every step of the way to make sure that each event is executed without a hitch.</p></div>
                            </div>
						</div>
					</div>
					<div class="col-md-6 nopadding features-intro-img visible-lg visible-md hidden-sm">
						<div class="features-bg" style="background-image: url(ui/images/bio.jpg)"></div>
					</div>
				</div>
			</div>
		</section>
    <!-- /.row -->

<?php get_footer(); ?>