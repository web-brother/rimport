<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title><?php if(is_home()) { echo "Rimport Industries"; } else { echo wp_title(''); } ?></title>
		<?php wp_head(); ?>
    <link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_directory'); ?>/resources/images/company-logo-short.png">
    <meta name="description" content="RINDUSTRIES, INC., was organized on February 15, 1990 primarily to cater to a lucrative and popular business in Video Cassette tapes rental. In 1991, RIMPORT had successfully pursued the supply and Installation of Radar Simulator System at the Naval Training Command at PN Cavite, Philippines. In 1992, RIMPORT pursued the Retrofitting or Refurbishment of eight (8) Naval Patrol Escort Crafts radars.">
    <meta name="keywords" content="Studio and Theater Lightings, Sound System, Sound Proofing, Camera, Audio, TV, Broadcast Transmitters, Stage Curtains, Seats, Surveillance, UPS, Power Generator, Solar">
    <meta name="author" content="Webrother">
	</head>
	<body <?php body_class(); ?>>

	<div class="container header-top">
		<div class="row">
			<div class="col-sm-4 header-info left-align hidden-xs">
				<i class="fa fa-phone" aria-hidden="true"></i> 403-4216 / 890-8733
			</div>
			<div class="col-sm-4 centered">
				<img class="header-company-logo" src="<?php bloginfo('template_directory'); ?>/resources/images/company-logo.png"/>
			</div>
			<div class="col-sm-4 header-info right-align hidden-xs">
				<i class="fa fa-envelope" aria-hidden="true"></i> reygi8@yahoo.com
			</div>
		</div>
	</div>

  <div id="sticky-anchor"></div>
	<!-- site nav -->
  <div id="sticky" class="navbar main navbar-inverse header-navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" id="clogo"><img class="header-company-logo" src="<?php bloginfo('template_directory'); ?>/resources/images/company-logo-short.png"/></a>
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
                  <a href="<?php echo get_home_url(); ?>/lighting-systems">
                    <i class="fa fa-lightbulb-o card-icon left-17" aria-hidden="true"></i>&nbsp; Studio & Theater Lightings
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/sound-systems">
                    <i class="fa fa-volume-up card-icon" aria-hidden="true"></i>&nbsp; Sound Systems/Proofing
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/audio-camera-equipments">
                    <i class="fa fa-film card-icon" aria-hidden="true"></i>&nbsp; TV Broadcast Camera & Audio Equipments
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/tv-broadcast-transmitters">
                    <i class="fa fa-television card-icon" aria-hidden="true"></i>&nbsp; TV Broadcast Transmitters
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/stage-curtains">
                    <i class="fa fa-cogs card-icon" aria-hidden="true"></i>&nbsp; Stage Curtains & Seats
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/surveillance-equipments">
                    <i class="fa fa-eye card-icon" aria-hidden="true"></i>&nbsp; Surveillance Equipments
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/solar-system">
                    <i class="fa fa-sun-o card-icon" aria-hidden="true"></i>&nbsp; Solar System
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/power-generators">
                    <i class="fa fa-bolt card-icon left-19" aria-hidden="true"></i>&nbsp; Power Generators & UPS
                  </a>
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
            <!-- <li>
              <a href="#">Newsletter</a>
            </li> -->
          </ul> 
        </div>
      </div>
  </div>
  <!-- /site nav -->
<script type="text/javascript">
  jQuery(function($) {
    function sticky_relocate() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset().top;
        if (window_top > div_top) {
            $('#sticky').addClass('stick');
            $('#sticky-anchor').height($('#sticky').outerHeight());
            $('#clogo').fadeIn('100');
            $('#clogo').addClass('with-bg');
        } else {
            $('#sticky').removeClass('stick');
            $('#sticky-anchor').height(0);
            $('#clogo').hide();
            $('#clogo').removeClass('with-bg');
        }
    }

    $(window).scroll(sticky_relocate);
    sticky_relocate();

  });
</script>