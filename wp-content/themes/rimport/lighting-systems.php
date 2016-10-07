<?php

/*
Template Name: Lighting Systems
*/

get_header();

?>

<div class="container-fluid background-tools lightings">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Studio & Theater Lightings</h1>
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
    <div class="col-md-9 col-xs-12 main-container">
      <div>
        <h4>Description</h4>
        <p>Stage lighting instruments(or lanterns / Luminaires in Europe) are used in stage lighting to illuminate theatrical productions, concerts, and other performances taking place in live performance venues. They are also used to light television studios and sound stages.</p>
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
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/dexel.png"/></div>
              <div class="company-name">DEXEL LIGHTING</div>
              <div class="address">
                Buenos Aires, Argentina
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/lupo.png"/></div>
              <div class="company-name">LUPO LIGHTING</div>
              <div class="address">
                10097Collegno(Torino) Italy
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/lsi.png"/></div>
              <div class="company-name">LSI PROJECTS LTD</div>
              <div class="address">
                Surrey GU21 5JY U.K.
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 entered">
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
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/kupo.png"/></div>
              <div class="company-name">KUPO CO. LTD.</div>
              <div class="address">
                Taipei, Taiwan
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/mgc.png"/></div>
              <div class="company-name">MGC LAMPS LTD.</div>
              <div class="address">
                United Kingdom
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/lampo.png"/></div>
              <div class="company-name">LAMPO LIGHTING DESIGNERS</div>
              <div class="address">
                Castel Goffredo (MN) Italy
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/strand.png"/></div>
              <div class="company-name"> STRAND LIGHTING ASIA LTD.</div>
              <div class="address">
                Hongkong/England
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h4>Preview of our works</h4>
        <div>
    			<div id="owl-example" class="owl-carousel gallery">
    				<?php
    					$url = get_template_directory_uri();
    					$no_of_images = 61;
    					for ($x = 1; $x < $no_of_images + 1; $x++) {
    					    echo '<div>
    					    		<a href="' . $url . '/resources/images/products/lightings/image' . $x . '.jpg" data-lightbox="roadtrip">
    					    			<div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/lightings/image' . $x . '.jpg");">
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
      autoHeight: false,
      responsiveClass:true,
      responsive:{
          400:{
              items:1,
              nav:false
          },
          600:{
              items:2,
              nav:false
          },
          900:{
              items:3,
              nav:false
          }
      }
  });
 
});
</script>

<?php

get_footer();

?>