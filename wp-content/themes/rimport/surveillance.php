<?php

/*
Template Name: Surveillance Equipments
*/

get_header();

?>

<div class="container-fluid background-tools surveillance">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Surveillance Equipments</h1>
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
        <p>Surveillance is the monitoring of the behavior, activities, or other changing information, usually of people for the purpose of influencing, managing, directing, or protecting them. This can include observation from a distance by means of electronic equipment (such as CCTV cameras), or interception of electronically transmitted information (such as Internet traffic or phone calls); and it can include simple, relatively no- or low-technology methods such as human intelligence agents and postal interception. The word surveillance comes from a French phrase for "watching over" ("sur" means "from above" and "veiller" means "to watch"), and is in contrast to more recent developments such as sousveillance.</p>
        <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
            <ul>
                <li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/surveillance/samsung.pdf" target="_blank">samsung.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/surveillance/Surveillance Catalogue.pdf" target="_blank">Surveillance Catalogue.pdf</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/surveillance/TMAS.pdf" target="_blank">TMAS.pdf</a></li>
            	</ul>
          </div>
        </div>
      </div>
      <div>
        <h4>Featured Suppliers</h4>
        <div class="row suppliers">
          <div class="col-lg-4 col-sm-6 centered">
            <div class="supplier">
              <div class="logo"><img src="<?php bloginfo('template_directory'); ?>/resources/images/suppliers/samsung.png"/></div>
              <div class="company-name">Samsung</div>
              <div class="address">
                &nbsp;
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
              $no_of_images = 1;
              for ($x = 1; $x < $no_of_images + 1; $x++) {
                  echo '<div>
                      <a href="' . $url . '/resources/images/products/surveillance/image' . $x . '.JPG" data-lightbox="roadtrip">
                        <div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/surveillance/image' . $x . '.JPG");">
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