<?php

/*
Template Name: Sound Systems
*/

get_header();

?>

<div class="container-fluid background-tools sound-system">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Professional Sound Reinforcement Systems/Public Address System</h1>
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
        <p>A sound reinforcement system is the combination of microphones, signal processors, amplifiers, and loudspeakers that makes live or pre-recorded sounds louder and may also distribute those sounds to a larger or more distant audience. In some situations, a sound reinforcement system is also used to enhance or alter the sound of the sources on the stage, typically by using electronic effects, as opposed to simply amplifying the sources unaltered.</p>
        <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
          	<ul>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/sound-system/beacon flyer1.pdf" target="_blank">beacon flyer1.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/sound-system/light speaker.jpg" target="_blank">light speaker.jpg</a></li>
                <li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/sound-system/acoustic_panel_board.jpg" target="_blank">Acoustic Panel Board.jpg</a></li>
            	</ul>
          </div>
        </div>
      </div>
      <div>
        <h4>Featured Suppliers</h4>
        <div class="row suppliers">
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/fbt.png"/></div>
              <div class="company-name">FBT ELECTTRONICA SPA</div>
              <div class="address">
                 Recanati (MC) Italy
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/dsppa.png"/></div>
              <div class="company-name">DSPPA AUDIO CO. LTD</div>
              <div class="address">
                Guangzhou, China
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/strongtech.png"/></div>
              <div class="company-name">STRONG TECHNOLOGY</div>
              <div class="address">
                Barcelona Spain
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/soundking.png"/></div>
              <div class="company-name">SOUNDKING ELECTRONICS</div>
              <div class="address">
                818 Chengxin Road, Yingzhou Investment Industry Park, Ningbo, China
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/arx.png"/></div>
              <div class="company-name">ARX SYSTEMS, INC.</div>
              <div class="address">
                Australia/UK
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/soundtech.png"/></div>
              <div class="company-name">SOUNDTECH</div>
              <div class="address">
                Mundelein, IL 60060, U.S.A
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
    					$no_of_images = 28;
    					for ($x = 1; $x < $no_of_images + 1; $x++) {
    					    echo '<div>
    					    		<a href="' . $url . '/resources/images/products/sound-system/image' . $x . '.jpg" data-lightbox="roadtrip">
    					    			<div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/sound-system/image' . $x . '.jpg");">
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