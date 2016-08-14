<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<div class="container header-top">
		<div class="row">
			<div class="col-lg-4 header-info left-align">
				<i class="fa fa-phone" aria-hidden="true"></i> 403-4216 / 890-8733
			</div>
			<div class="col-lg-4 centered">
				<img class="header-company-logo" src="<?php bloginfo('template_directory'); ?>/resources/images/company-logo.png"/>
			</div>
			<div class="col-lg-4 header-info right-align">
				<i class="fa fa-envelope" aria-hidden="true"></i> reygi8@yahoo.com
			</div>
		</div>
	</div>

	<!-- site nav -->
     <div class="navbar main navbar-inverse header-navigation">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo get_home_url(); ?>/rimport">Home</a></li>
              <li><a href="<?php echo get_home_url(); ?>/about-us">About US</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul> 
          </div>
        </div>
     </div>
    <!-- /site nav -->