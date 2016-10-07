<?php

/*
Template Name: Solar System
*/

get_header();

?>

<div class="container-fluid background-tools solar">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Solar System</h1>
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
        <p>Solar power is the conversion of sunlight into electricity, either directly using photovoltaics (PV), or indirectly using concentrated solar power. Concentrated solar power systems (Unified Solar) use lenses or mirrors and tracking systems to focus a large area of sunlight into a small beam. Photovoltaics convert light into an electric current using the photovoltaic effect. </p>
        <div class="panel panel-primary">
          <div class="panel-heading">Documents (References)</div>
          <div class="panel-body">
            <ul>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/solar-system/Solar System.docx" target="_blank">Solar System.docx</a></li>
            		<li><a href="<?php bloginfo('template_directory'); ?>/resources/docs/solar-system/SOLAR.docx" target="_blank">SOLAR.docx</a></li>
   
            	</ul>
          </div>
        </div>
      </div>
      <!-- <div>
        <h4>Featured Suppliers</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id tortor non metus vehicula luctus. Proin commodo eros lorem, non aliquam mi pulvinar non. Suspendisse dictum maximus malesuada. Donec cursus tortor facilisis massa luctus pulvinar. Nullam et commodo nisl. Ut vitae commodo nulla. Aenean aliquet sem sit amet orci luctus, eget blandit nunc tempor.</p>
      </div> -->
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