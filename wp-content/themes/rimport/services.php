<?php

/*
Template Name: Services
*/

get_header();

?>

<div class="container-fluid background-tools">
	<div>
		<div class="container body-copy">
			<div class="body-copy-header centered light no-margin">
				<h1 class="no-margin-top">Products and Services</h1>
				<h5>All services we can offer</h5>
			</div>
		</div>
	</div>
</div>

<?php include('submenu.php'); ?>

<div class="container body-copy">
	<div class="body-copy-header centered">
		<h4>WE ARE IMPORTERS, SALES AND SERVICE ENGINEERS OF</h4>
		<h1>ARCHITECTURAL LIGHTNING-DIMMING & CONTROL SYSTEMS</h1>
		<h5>OF THE FOLLOWING:</h5>
	</div>
	<div class="row centered body-copy-cards">
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-bed card-icon" aria-hidden="true"></i></div>
				5-STAR<br>HOTELS
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-lightbulb-o card-icon" aria-hidden="true"></i></div>
				STAGE<br>THEATRICAL LIGHTING
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-television card-icon" aria-hidden="true"></i></div>
				TV BROADCASTING<br>STUDIO LUMINAIRES
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-cogs card-icon" aria-hidden="true"></i></div>
				DIMMERS &<br>CONTROLS
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-volume-up card-icon" aria-hidden="true"></i></div>
				SOUND REINFORCEMENT<br>AUDO-VISUAL SYSTEMS
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-plug card-icon" aria-hidden="true"></i></div>
				OTHER ELECTORINIC<br>COMMUNICATIONS EQUIPMENTS
			</div>
		</div>
	</div>
</div>

<div class="container-fluid dark">
	<div class="container body-copy">
		<div class="row equal-height">
			<div class="col-lg-6">
				<div class="circle-container">
					<div class="body-copy-header centered">
						<h4>WE ARE</h4>
						<h1>LOCAL<br>DEALER</h1>
						<h5>OF THE FOLLOWING</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row centered body-copy-list">
					<div class="col-lg-6">
						<ul>
							<li>SWITCHES</li>
							<li>DIODES</li>
							<li>RECTIFIERS</li>
							<li>RESISTORS</li>
							<li>ELECTRICAL &<br>INDUSTRIAL FUSES</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul>
							<li>RELAYS</li>
							<li>SCRs</li>
							<li>I.Cs</li>
							<li>SDIs</li>
							<li>COAXIAL CABLES<br>MULTI-CONDUCTORS CABLES</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container body-copy">
	<div class="body-copy-header centered">
		<h4>WE ARE</h4>
		<h1>INSTALLATION ENGINEERS, MAINTENANCE & REPAIR-SERVICE CONTRACTORS</h1>
		<h5>OF THE FOLLOWING:</h5>
	</div>
	<div class="row centered body-copy-cards">
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-lightbulb-o card-icon" aria-hidden="true"></i></div>
				STAGE<br>THEATRICAL<br>LIGHTING
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-sliders card-icon" aria-hidden="true"></i></div>
				TV BROADCASTING STUDIO LIGHTING<br>& ARCHITECTURAL LIGHTING<br>OF DIMMERS & CONTROLS
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div><i class="fa fa-plug card-icon" aria-hidden="true"></i></div>
				OTHER RELATED<br>ELECTRONICS COMMUNICATIONS<br>EQUIPMENTS
			</div>
		</div>
	</div>
</div>

<div class="container-fluid dark">
	<div class="container body-copy">
		<div class="body-copy-header">
			<h3 class="no-margin-top">Some of our works</h3>
			<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum.</h5>
		</div>
		<div>
			<div id="owl-example" class="owl-carousel gallery">
				<?php
					$url = get_template_directory_uri();
					$no_of_images = 23;
					for ($x = 1; $x < $no_of_images + 1; $x++) {
					    echo '<div>
					    		<a href="' . $url . '/resources/images/products/lightings/image' . $x . '.JPG" data-lightbox="roadtrip">
					    			<div class="img-thumbnail" style="background-image: url(' . $url . '/resources/images/products/lightings/image' . $x . '.JPG");">
					    			</div>
					    		</a>
					    	</div>';
					} 
				?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid background-call">
	<div>
		<div class="container body-copy short">
			<div class="body-copy-header centered light no-margin">	
			<span class="light align-with-button">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum. </span>&nbsp;<a class="btn rimport-btn light no-margin" href="<?php echo get_home_url(); ?>/contact-us#email">Request a quote &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

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