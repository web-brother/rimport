<?php

/*
Template Name: Camera and Audio
*/

get_header();

?>

<div class="container-fluid background-tools broadcast">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Audio Equipment and Camera System and Accessories</h1>
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
        <p>A professional video camera (often called a television camera even though the use has spread beyond television) is a high-end device for creating electronic moving images (as opposed to a movie camera, that earlier recorded the images on film). Originally developed for use in television studios, they are now also used for music videos, direct-to-video movies, corporate and educational videos, marriage videos etc. Since the 2010s, most of the professional video cameras are digital professional video cameras.</p>
        <p>Audio equipment refers to devices that reproduce, record, or process sound. This includes microphones, radio receivers, AV receivers, CD players, tape recorders, amplifiers, mixing consoles, effects units, and loudspeakers.</p>
        <!-- <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
            No documents available
          </div>
        </div> -->
      </div>
      <div>
        <h4>Featured Suppliers</h4>
        <div class="row suppliers">
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/systec.png"/></div>
              <div class="company-name">SYSTEC  INTERNATIONAL INC.</div>
              <div class="address">
                 Osaka Japan
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/b&h.png"/></div>
              <div class="company-name">B&H PHOTO VIDEO</div>
              <div class="address">
                  420 Ninth Avenue, New York City
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h4>Some of our works</h4>
        <div>
    			<div id="owl-example" class="owl-carousel gallery">
    				<?php
    					$url = get_template_directory_uri();
    					$no_of_images = 7;
    					for ($x = 1; $x < $no_of_images + 1; $x++) {
    					    echo '<div>
    					    		<a href="' . $url . '/resources/images/products/camera-audio/image' . $x . '.JPG" data-lightbox="roadtrip">
    					    			<div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/camera-audio/image' . $x . '.JPG");">
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