<?php

/*
Template Name: Contact Us
*/

get_header();

?>

<div class="container-fluid map dark">
	<iframe style="pointer-events:none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1027.6922833765116!2d121.0223282521959!3d14.56943623415935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9af5d1e6ee3%3A0xc59b91a9ba4c1e18!2sKiku+Sui+Star%2C+1656+Pe%C3%B1afrancia%2C+Makati%2C+1208+Metro+Manila!5e0!3m2!1sen!2sph!4v1471230901671" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container body-copy">
	<div class="body-copy-header centered">
		<h1 class="hr">Contact Us</h1>
		<h5>Any upcoming project right around the corner? We are here to help!</h5>
	</div>
	<div class="row">
        <div class="col-lg-12">

            <form id="contact-form" action="" method="POST" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Firstname *</label>
                                <input id="r_form_name" type="text" name="r_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Lastname *</label>
                                <input id="r_form_lastname" type="text" name="r_surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="r_form_email" type="email" name="r_email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="r_form_phone" type="tel" name="r_phone" class="form-control" placeholder="Please enter your phone (optional)">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="r_form_message" name="r_message" class="form-control" placeholder="Type your message here *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-send rimport-btn light-dark" value="Send message">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<div class="container-fluid dark">
	<div class="container short body-copy">
		<p class="centered no-margin-bottom">
			<span class="strong">(Call/Text or Email Us)</span>&nbsp; <i class="fa fa-phone" aria-hidden="true"></i> 403-4216 / 890-8733 &nbsp;|&nbsp; <i class="fa fa-mobile" aria-hidden="true"></i> 0917-536-1564 &nbsp;|&nbsp; <i class="fa fa-envelope" aria-hidden="true"></i> reygi8@yahoo.com
		</p>
	</div>
</div>

<div class="container-fluid background-tools short contact">
	<div>
		<div class="container body-copy short">
			<div class="body-copy-header centered light no-margin">	
			<span class="light align-with-button">You might want to go back and review our products and services again. <text class="visible-xs"><br></text></span>&nbsp;<a class="btn rimport-btn light no-margin" href="<?php echo get_home_url(); ?>/lighting-systems">Review Now &nbsp; <i class="fa fa-history" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // configure
    $from = 'rimportind16@gmail.com'; 
    $sendTo = 'reygi8@yahoo.com';
    $subject = 'New inquiry from rimportindustries.com "contact us" form';
    $fields = array('r_name' => 'Name', 'r_surname' => 'Surname', 'r_phone' => 'Phone', 'r_email' => 'Email', 'r_message' => 'Message'); // array variable name => Text to appear in email
    $okMessage = 'Contact form successfully submitted. Thank you, We will get back to you soon!';
    $errorMessage = 'There was an error while submitting the form. Please try again later';

    // let's do the sending
    try
    {
        $emailText = "";

        foreach ($_POST as $key => $value) {

            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

        mail($sendTo, $subject, $emailText, "From: " . $from);

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
    catch (\Exception $e)
    {
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    }

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        
        header('Content-Type: application/json');
        ?>

        <script>
            alert('<?php echo $encoded ?>');
        </script>
        <?php
    }
    else {
        ?>

        <script>
            alert('<?php echo $responseArray['message']; ?>');
        </script>
        <?php
    }
}
?>


<?php

get_footer();

?>