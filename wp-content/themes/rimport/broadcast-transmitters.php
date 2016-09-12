<?php

/*
Template Name: Broadcast Transmitters
*/

get_header();

?>

<div class="container-fluid background-tools transmitters">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Acoustic Treatment/Sound Proofing and Transmitter Antenna System</h1>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid with-sidebar">
  <div class="row">
    <div class="col-md-3 sidebar hidden-xs hidden-tablet">
      <ul class="links">
        <?php include('services-sidebar.php'); ?>
      </ul>
    </div>
    <div class="col-md-9 main-container">
      <div>
        <h4>Description</h4>
        <p>A broadcast transmitter refers to an installation used for broadcasting, including radio transmitter or television transmitter equipment, the antenna, and often the location of the broadcasting station.</p>
        <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
            <ul>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/10 KW.pdf" target="_blank">10 KW.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/ABE_solution.pdf" target="_blank">ABE_solution.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/B_xx_LB10_03_2011.pdf" target="_blank">B_xx_LB10_03_2011.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/IRD5001AW.pdf" target="_blank">IRD5001AW.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/MTX A 5K_U (system).pdf" target="_blank">MTX A 5K_U (system).pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/MTX A 5K_V-dd.pdf" target="_blank">MTX A 5K_V-dd.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/MTX A 5K_V.pdf" target="_blank">MTX A 5K_V.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/MTX A 10K_U-dd.pdf" target="_blank">MTX A 10K_U-dd.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/MTX_Series_2014_A4.pdf" target="_blank">MTX_Series_2014_A4.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/MTX_Series_New_Features_2014.pdf" target="_blank">MTX_Series_New_Features_2014.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/broadcast-transmitters/Transmitting_Arrays.pdf" target="_blank">Transmitting_Arrays.pdf</a></li>
            	</ul>
          </div>
        </div>
      </div>
      <div>
        <h4>Featured Suppliers</h4>
        <div class="row suppliers">
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/abe.png"/></div>
              <div class="company-name">ABE ELETTRONICA</div>
              <div class="address">
                 Via Leonardo da Vinci, Italy
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div>
          <h4>Preview of our products</h4>
          <div>
      			<div id="owl-example" class="owl-carousel gallery">
      				<?php
      					$url = get_template_directory_uri();
      					$no_of_images = 2;
      					for ($x = 1; $x < $no_of_images + 1; $x++) {
      					    echo '<div>
      					    		<a href="' . $url . '/resources/images/products/broadcast-transmitters/image' . $x . '.jpeg" data-lightbox="roadtrip">
      					    			<div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/broadcast-transmitters/image' . $x . '.jpeg");">
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