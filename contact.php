<!DOCTYPE html>
<html lang="en">
<?php include('partials/head.php'); ?>
	
<body>

	<div class="body-inner">

	<?php include('partials/topbar.php'); ?>
	<?php include('partials/header.php'); ?>
	<?php include('partials/nav.php'); ?>

	<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner2.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">Contact</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Contact</li>
			            <li><a href="#"> Contact One</a></li>
		          	</ul>
	        		</div>
	        	</div>
       	</div>
    	</div><!-- Subpage title end -->
	</div><!-- Banner area end --> 


	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="ts-service-wrapper">
						<div class="ts-service-icon-wrapper">
							<span class="ts-service-icon">
							   <i class="fa fa-map-marker"></i>
							</span>
						</div>
						<div class="ts-service-info">
							<h3>Address</h3>
							<p>Sandhani Center, 3021 Horizon Circle</p>
						</div>
					</div>
				</div><!-- Col 1 end -->

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="ts-service-wrapper">
						<div class="ts-service-icon-wrapper">
							<span class="ts-service-icon">
							   <i class="fa fa-phone"></i>
							</span>
						</div>
						<div class="ts-service-info">
							<h3>Phone</h3>
							<p>+88 0123 4567 890</p>
						</div>
					</div>
				</div><!-- Col 2 end -->

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="ts-service-wrapper">
						<div class="ts-service-icon-wrapper">
							<span class="ts-service-icon">
							   <i class="fa fa-fax"></i>
							</span>
						</div>
						<div class="ts-service-info">
							<h3>Fax</h3>
							<p>+88 0123 4567 890</p>
						</div>
					</div>
				</div><!-- Col 3 end -->

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="ts-service-wrapper">
						<div class="ts-service-icon-wrapper">
							<span class="ts-service-icon">
							   <i class="fa fa-envelope-o"></i>
							</span>
						</div>
						<div class="ts-service-info">
							<h3>Email</h3>
							<p>info@Sandhani.us</p>
						</div>
					</div>
				</div><!-- Col 4 end -->
			
			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

	<section id="map-wrapper" class="no-padding">
		<div class="container-fluid">
			<div id="map" class="map"></div>
		</div>
	</section><!-- Map end -->

	<section id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
	    			<h3 class="title-normal">Contact Form</h3>
	    			<form id="contact-form" action="#" method="post" role="form">
	    				<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
								<input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control form-control-email" name="email" id="email" 
									placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control form-control-subject" name="subject" id="subject" 
									placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Send Message</button> 
						</div>
					</form>
	    		</div>
			</div>
		</div>
	</section><!-- Cotact form end -->



	<section class="footer-top no-padding">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-md-4 footer-box one">
					<i class="fa fa-map-marker">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Head Office</h3>
						<p>Sandhani Center, 3021 Horizon Circle Tukwila, WA-98000.</p>
					</div>
				</div><!--/ Box 1 end -->

				<div class="col-md-4 footer-box two">
					<i class="fa fa-phone">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Call Center</h3>
						<p>Mobile: (+8) 847-291-4353</p>
						<p>Phone: (+8) 847-291-4873</p>
					</div>
				</div><!--/ Box 2 end -->
				
				<div class="col-md-4 footer-box three">
					<i class="fa fa-envelope-o">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Email</h3>
						<p>info@Sandhani.com</p>
						<p>query@Sandhani.com</p>
					</div>
				</div><!--/ Box 3 end -->
				
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Footer top end -->
	<?php include('partials/footer.php'); ?>

	<!-- Javascript Files
	================================================== -->

	<?php include('partials/javascript.php'); ?>
	
	</div><!-- Body inner end -->
</body>
</html>