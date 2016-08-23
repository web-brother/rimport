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
            <li>
              <a href="<?php echo get_home_url(); ?>/" class="<?php if(is_home()) {  echo 'is_active'; } ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo get_home_url(); ?>/about-us" class="<?php if(is_page('about-us')) {  echo 'is_active'; } ?>">About US</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="<?php echo get_home_url(); ?>/services"><i class="fa fa-lightbulb-o card-icon left-17" aria-hidden="true"></i>&nbsp; Studio & Theater Lightings</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-volume-up card-icon" aria-hidden="true"></i>&nbsp; Sound System</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-film card-icon" aria-hidden="true"></i>&nbsp; TV Broadcast Camera & Audio Equipments</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-television card-icon" aria-hidden="true"></i>&nbsp; TV Broadcast Transmitters</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-eye card-icon" aria-hidden="true"></i>&nbsp; Surveillance Equipments</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-sun-o card-icon" aria-hidden="true"></i>&nbsp; Solar System</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-bolt card-icon left-19" aria-hidden="true"></i>&nbsp; Power Generators</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/#allServices">See all</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo get_home_url(); ?>/contact-us" class="<?php if(is_page('contact-us')) {  echo 'is_active'; } ?>">Contact Us</a>
            </li>
            <li>
              <a href="#">Newsletter</a>
            </li>
          </ul> 
        </div>
      </div>
  </div>
  <!-- /site nav -->