<?php
/**
 * Template Name: Contact Page
 *
 * @file           template-contact.php
 * @package        discoverydezigns 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0
 */
?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('content', 'title'); ?>

<?php get_template_part('content', 'social'); ?>

<?php get_template_part('content'); ?>

<?php
	
	if(isset($_POST['submit'])){
		if(
			isset($_POST['contactName']) && $_POST['contactName'] != '' &&
			isset($_POST['contactEmail']) && $_POST['contactEmail'] != '' &&
			isset($_POST['contactTelephone']) && $_POST['contactTelephone'] != '' &&
			isset($_POST['contactEnquiry']) && $_POST['contactEnquiry'] != ''
		){
			$name = $_POST['contactName'];
			$email = $_POST['contactEmail'];
			$telephone = $_POST['contactTelephone'];
			$enquiry = $_POST['contactEnquiry'];
			
			if(isset($_POST['contactCompany']) && $_POST['contactCompany'] != ''){
				$company = $_POST['contactCompany']; 
			}
			else {
				$company = "N/A";
			}
			
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					
        $emailTo = get_option('admin_email');
        $subject = 'From '.$name;
        $body = "Name: $name \n\nEmail: $email \n\Company: $company \n\nTelephone: $telephone \n\nComments: $enquiry";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
				$sent = true;
			}
			else {
				$error = true;
				$message = 'Need a valid email.';
			}
		}
		else {
			$error = true;
			$message = 'All fields required.';
		}
	}
?>

<section class="contact-form">
	<div class="container">
		<div class="row">
			<?php if(isset($sent) && $sent == true) { ?>
	      <h3 class="col-md-10 col-md-offset-1 text-center">Thank you for your message<br> We will be in touch soon</h3>
	    <?php } else { ?>

			<form action="#submit" method="post" class="col-md-8 col-md-offset-2">
				<?php the_content(); ?>
				<div class="row">
					<div class="form-group col-md-6">
				    <label class="sr-only" for="name">Name</label>
				    <input type="text" class="form-control input-lg" id="name" placeholder="Your Name" name="contactName">
				  </div>
				  <div class="form-group col-md-6">
				    <label class="sr-only" for="email">Email</label>
				    <input type="text" class="form-control input-lg" id="email" placeholder="Your Email" name="contactEmail">
				  </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
				    <label class="sr-only" for="company">Company</label>
				    <input type="text" class="form-control input-lg" id="company" placeholder="Your Company (if applicable)" name="contactCompany">
				  </div>
				  <div class="form-group col-md-6">
				    <label class="sr-only" for="telephone">Telephone</label>
				    <input type="text" class="form-control input-lg" id="telephone" placeholder="Telephone" name="contactTelephone">
				  </div>
				</div>

				<div class="form-group">
					<label class="sr-only" for="enquiry">Enquiry</label>
					<textarea id="enquiry" class="form-control input-lg" placeholder="Enquiry" rows="6" name="contactEnquiry"></textarea>
				</div>
				<?php if(isset($error) && $error == true) { ?>
				  <div class="alert alert-dismissible alert-dd-magenta fade in col-md-10">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  	<span aria-hidden="true">&times;</span>
					  </button>
					  <strong>Sorry!</strong> <?=$message?>
					</div>
	      <?php } ?>
				
				<button type="submit" id="submit" name="submit" class="btn btn-dd-teal btn-lg pull-right">Submit</button>
				
			</form>
			
			<?php } ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>


