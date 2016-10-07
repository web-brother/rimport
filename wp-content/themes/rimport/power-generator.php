<?php

/*
Template Name: Power Generator
*/

get_header();

?>

<div class="container-fluid background-tools generator">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Power Generator & UPS</h1>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid with-sidebar">
  <div class="row">
    <div class="col-md-3 sidebar hidden-tablet">
      <ul class="links">
        <?php include('services-sidebar.php'); ?>
      </ul>
    </div>
    <div class="col-md-9 main-container">
      <div>
        <h4>Description</h4>
        <p>In electricity generation, a generator is a device that converts mechanical energy to electrical energy for use in an external circuit. The source of mechanical energy may vary widely from a hand crank to an internal combustion engine. Generators provide nearly all of the power for electric power grids.</p>
        <p>UPS(uninterruptible power supply), is an electrical apparatus that provides emergency power to a load when the input power source or mains power fails. A UPS provide near-instantaneous protection from input power interruptions, by supplying energy stored in batteries, supercapacitors, or flywheels.</p>
        <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
            <ul>
              <li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/power-generator/APD17A-6 (1).pdf" target="_blank">APD17A-6 (1).pdf</a></li>
              <li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/power-generator/APD35C-6 (1).pdf" target="_blank">APD35C-6 (1).pdf</a></li>
              <li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/power-generator/APD125C-6.pdf" target="_blank">APD125C-6.pdf</a></li>
              <li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/power-generator/APD350C-6.pdf" target="_blank">APD350C-6.pdf</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div>
          <h4>Featured Suppliers</h4>
          <div class="row suppliers">
            <div class="col-lg-4 col-sm-6 centered">
              <div class="supplier">
                <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/aksa.jpg"/></div>
                <div class="company-name">AKSA POWER GENERATION</div>
                <div class="address">
                  TURKEY
                </div>
              </div>
            </div>
          </div>
      </div>
      <div>
        <h4>Preview of our products</h4>
        <div>
          <div id="owl-example" class="owl-carousel gallery">
            <?php
              $url = get_template_directory_uri();
              $no_of_images = 4;
              for ($x = 1; $x < $no_of_images + 1; $x++) {
                  echo '<div>
                      <a href="' . $url . '/resources/images/products/power-generator/image' . $x . '.jpg" data-lightbox="roadtrip">
                        <div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/power-generator/image' . $x . '.jpg");">
                        </div>
                      </a>
                    </div>';
              } 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('contact-us-banner.php'); ?>

<script type="text/javascript">
  jQuery(function($) {
 
  $("#owl-example").owlCarousel({
  		autoPlay: false,
  		items: 4,
  		pagination: true,
  		navigation: true,
  		rewindNav: false,
  		lazyLoad: true
  });
 
});
</script>

<?php

get_footer();

?>