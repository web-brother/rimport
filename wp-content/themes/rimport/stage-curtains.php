<?php

/*
Template Name: Stage Curtains
*/

get_header();

?>

<div class="container-fluid background-tools stage-curtains">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Stage Curtains and Motorized Hangers and Flying Mechanisms</h1>
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
        <p>Theater drapes and stage curtains are large pieces of cloth that are designed to mask backstage areas of a theater from spectators. They are designed for a variety of specific purposes and come in several types; many are made from black or other dark colored, light-absorbing material, and heavyweight velour is the current industry standard for these. Theater drapes represent a portion of any production's soft goods, a category which includes any cloth-based element of the stage or scenery (though not including cloth theater costumes or wardrobe).</p>
        <!-- <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
            No documents available
          </div>
        </div> -->
      </div>
      <!-- <div>
        <h4>Featured Suppliers</h4>
      </div> -->
      <div>
        <div>
          <h4>Preview of our works</h4>
          <div>
      			<div id="owl-example" class="owl-carousel gallery">
      				<?php
      					$url = get_template_directory_uri();
      					$no_of_images = 11;
      					for ($x = 1; $x < $no_of_images + 1; $x++) {
      					    echo '<div>
      					    		<a href="' . $url . '/resources/images/products/stage-curtains/image' . $x . '.JPG" data-lightbox="roadtrip">
      					    			<div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/stage-curtains/image' . $x . '.JPG");">
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