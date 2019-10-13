<!DOCTYPE html>
<html lang="en">
<?php include('partials/head.php'); ?>
<body>

	<div class="body-inner">
	<?php include('partials/topbar.php'); ?>
	<?php include('partials/header.php'); ?>
	<?php include('partials/nav.php'); ?>
	<!-- Carousel -->
 	<div id="main-slide" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators visible-lg visible-md">
		  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
		   <li data-target="#main-slide" data-slide-to="1"></li>
		</ol><!--/ Indicators end-->

		<!-- Carousel inner -->
		<div class="carousel-inner">
			<div class="item active" style="background-image:url(images/slider-main/bg1.jpg)">
           	<div class="slider-content">
               <div class="col-md-12 text-center">
                   <h2 class="slide-title animated4"> Insuring Your Trust</h2>
                   <h3 class="slide-sub-title animated5">To Secure the Future, Protect Whats Important</h3>	
                   <p class="animated6">
                   	<a href="#" class="slider btn btn-primary">Learn More</a>
                   	<a href="#" class="slider btn btn-primary border">Get a Quote</a>
                   </p>	     
               </div>
           	</div>
		   </div><!--/ Carousel item end -->


		   <div class="item" style="background-image:url(images/slider-main/bg2.jpg)">
            <div class="slider-content">
              	<div class="col-md-12 text-center">
              		<div class="slider-img">
                    	<img class="pull-left" src="images/slider-main/bg2-a.png" alt="">
                  </div>
              		<div class="slider-text">
                     <h2 class="slide-title animated2"> Friendly Staff</h2>
                   	<h3 class="slide-sub-title animated3">To Help With Your Insurance Needs</h3>
                   	<p class="animated6"><a href="#" class="slider btn btn-primary">Contact Us Now</a></p>
                  </div>
              	</div>
            </div>
		    </div><!--/ Carousel item end -->
		    
		</div><!-- Carousel inner end-->

		<!-- Controllers -->
		<a class="left carousel-control" href="#main-slide" data-slide="prev">
	    	<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right carousel-control" href="#main-slide" data-slide="next">
	    	<span><i class="fa fa-angle-right"></i></span>
		</a>

		<span class="down-arrow-transparent"></span>

	</div><!--/ Carousel end -->  


	<section id="ts-features" class="ts-features">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="intro">
						<h2 class="intro-title">
							Want To Know About Company
							<span class="title-head"> We Are Insurance Company</span>
						</h2>
						<p class="intro-text">We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence give them peace of mind, and enable them to realize their dreams for their loved ones and their legacy. We have providing stability and reliability to our clients since 1859 to help them live their lives with confidence, to give them peace of mindsete, and enable them to realize their dreams for their loved ones and their legacy.</p>
					</div><!-- Intro end -->

					<div class=" intro-feature">
  						<div class="row">
						   <div class="col-md-4 col-sm-8 col-xs-16">
						      <div class="ts-service-wrapper">
						        	<div class="ts-service-icon-wrapper">
						          	<span class="ts-service-icon"><i class="fa fa-bar-chart"></i></span>
						        	</div>
						        	<div class="ts-service-info">
						          <h3>30 Years Experience</h3>
						          <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. Integer suscipit congue turpis nec finibus</p>
						        </div>
						      </div><!-- Service wrapper end -->
						   </div>

						   <div class="col-md-4 col-sm-8 col-xs-16">
						      <div class="ts-service-wrapper">
						        	<div class="ts-service-icon-wrapper">
						          	<span class="ts-service-icon"><i class="fa fa-car"></i></span>
						        	</div>
						        	<div class="ts-service-info">
						          <h3>Flexible Benefits</h3>
						          <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. Integer suscipit congue turpis nec finibus</p>
						        </div>
						      </div><!-- Service wrapper end -->
						   </div>

						   <div class="col-md-4 col-sm-8 col-xs-16">
						      <div class="ts-service-wrapper">
						        	<div class="ts-service-icon-wrapper">
						          	<span class="ts-service-icon"><i class="fa fa-users"></i></span>
						        	</div>
						        	<div class="ts-service-info">
						          <h3>Friendly Staff</h3>
						          <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. Integer suscipit congue turpis nec finibus</p>
						        </div>
						      </div><!-- Service wrapper end -->
						   </div>

						  </div><!--/ row end -->
					</div><!-- Intro feature end -->
				</div><!-- Col end -->

				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="quote-form">
						<h2>Request A Quote</h2>
						<div class="row">
		               <div class="col-xs-12 col-md-12">
		                  <div class="form-group">
									<input class="form-control" name="name" id="name" placeholder="Name" required>
								</div>
		               </div>
	               </div>
						<div class="row">
		               <div class="col-xs-12 col-md-12">
		                  <div class="form-group">
									<input class="form-control" name="email" id="email" placeholder="Email" required>
								</div>
		               </div>
	               </div>
                	<div class="row">
	                  <div class="col-xs-12 col-md-12">
	                    	<div class="form-group">
	                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject" required />
	                     </div>
	                  </div>
                	</div>
                 <div class="row">
	                 	<div class="col-xs-12 col-md-12">
	                 		<div class="form-group">
	                        <textarea class="form-control" placeholder="Message" rows="6" name="comment" required></textarea>
	                 		</div>
	                 	</div>
                 </div>
		      
					 	<div class="form-group">
							<input class="button btn btn-primary" type="submit" value="Send Message">
						</div>
					</div><!-- Quote form end -->
				</div><!-- Col end -->
			
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- About us end -->

	<section id="product-area" class="product-area" style="background-image:url(images/product-bg.jpg)">
		<div class="container">
			<div class="row text-center">
				<h2 class="title">
					We've Got You Covered
					<span class="title-head">Insurance Product</span>
				</h2>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-12">
					<div id="product-slide" class="owl-carousel owl-theme product-slide">
						<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/life-insurance.jpg" alt="">
								<h4 class="product-title">Life Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 1 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/home-insurance.jpg" alt="">
								<h4 class="product-title">Home Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella post before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 2 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/auto-insurance.jpg" alt="">
								<h4 class="product-title">Auto Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 3 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/bike-insurance.jpg" alt="">
								<h4 class="product-title">Bike Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella post-ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 4 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/boat-insurance.jpg" alt="">
								<h4 class="product-title">Boat Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella post-ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 5 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/pet-insurance.jpg" alt="">
								<h4 class="product-title">Pet Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella post-ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 6 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/travel-insurance.jpg" alt="">
								<h4 class="product-title">Travel Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella post-ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 7 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="images/insurance/business-insurance.jpg" alt="">
								<h4 class="product-title">Business Insurance</h4>
								<p class="product-desc">Master cleanse selvage 3 wolf moon retro. Hella post-ironic before they sold out pitchfork gastropub dreamcatcher. Flannel celiac lomo, kale</p>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 8 end -->

					</div><!-- Product slide -->
				</div><!-- Col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
		<div class="down-arrow-white"></div>
	</section><!-- Product area end -->

	<section id="featured-tab-area" class="featured-tab-area">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					We Are A Dedicated Firm
					<span class="title-head">Why Choose Sandhani</span>
				</h3>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-sm-12 col-xs-12 featured-tab clearfix">
					<ul class="nav nav-tabs">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-head">
									<i class="fa fa-globe pull-left">&nbsp;</i>
									<span class="tab-text-title">Trusted Since 1976</span>					
								</span>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-users pull-left">&nbsp;</i>
									<span class="tab-text-title">2.9M Users Never Wrong</span>					
								</span>
						  	</a>
						</li>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-android pull-left">&nbsp;</i>
									<span class="tab-text-title">Easy Quotes and Apps</span>					
								</span>
						  	</a>
						</li>

						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-life-ring pull-left">&nbsp;</i>
									<span class="tab-text-title">Secure and Stable</span>					
								</span>
						  	</a>
						</li>

						<li>
						  	<a class="animated fadeIn" href="#tab_e" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-user-secret pull-left">&nbsp;</i>
									<span class="tab-text-title">24/7 With Real Person</span>					
								</span>
						  	</a>
						</li>

					</ul>
					<div class="tab-content">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<img class="img-responsive pull-right" src="images/tab/featured-tab1.jpg" alt="">
				        	<div class="tab-wrapper">
				        		<h3 class="tab-content-title">A History of Trust and Dependability</h3>
					         <p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend. Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit.</p>
					         <ul class="list-round-arrow">
									<li>There are many variations of passages of Lorem Ipsum</li>
									<li>All the Lorem Ipsum generators on the Internet</li>
									<li>Tend to repeat predefined chunks as necessary</li>
									<li>The point of using Lorem Ipsum is thatl</li>
								</ul>
				        	</div>
				        </div>

				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				            <img class="img-responsive pull-left" src="images/tab/featured-tab2.png" alt="">
				            <h3>Harmony from the World heart</h3>
				            <h4>Simply dummy text of the printing</h4>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>		
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>					 
				        </div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_c">
				            <p class="tab-icon pull-left"><i class="fa fa-android">&nbsp;</i></p>
				            <h3>Harmony from the World heart</h3>
								<h4>Simply dummy text of the printing</h4>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        	</div>	

				        	<div class="tab-pane animated fadeInLeft" id="tab_d">
				            <p><img class="pull-right img-responsive" src="images/tab/featured-tab3.png" alt=""></p>
								<h3>Harmony from the World heart</h3>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        	</div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_e">
				            <p><img class="pull-left img-responsive" src="images/tab/featured-tab4.png" alt=""></p>
								<h3>Harmony from the World heart</h3>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        	</div>
		
					</div><!-- tab content -->
	    		</div><!-- Featured tab end -->
			</div><!--/ Content row end -->

		</div><!--/ Container end -->
	</section><!-- Featured tab end -->

	<section id="ts-content" class="ts-content no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding left">
					<h2>We are Here to Help</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="row">
						<div class="col-md-6 service-box"><i class="fa fa-pie-chart">&nbsp;</i>
							<div class="service-box-content">
								<h3>Financial Security</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 1 end -->
						
						<div class="col-md-6 service-box"><i class="fa fa-line-chart">&nbsp;</i>
							<div class="service-box-content">
								<h3>Savings and Investing</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 2 end -->
					</div><!-- 1st row end -->

					<div class="row">
						<div class="col-md-6 service-box"><i class="fa fa-briefcase">&nbsp;</i>
							<div class="service-box-content">
								<h3>Business Goals</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 3 end -->
					
						<div class="col-md-6 service-box"><i class="fa fa-graduation-cap">&nbsp;</i>
							<div class="service-box-content">
								<h3>Paying for Education</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 4 end -->
					</div>
				</div><!-- Content left -->

				<div class="col-md-6 ts-padding right" style="height:600px;background:url(images/content-bg.jpg) 50% 50% / cover no-repeat;">
					<a class='popup' href="http://player.vimeo.com/video/100195272?autoplay=1&amp;loop=1" style="position: relative;">
                  <div class="video-icon">
                  	<i class="fa fa-play"></i>
                  	<h2>Watch Our Video</h2>
               	</div>
            	</a>
				</div><!-- Content right -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Content end -->

	<section id="facts" class="facts no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 fact-text">
					<h2 class="intro-title">
						sucessful Milestone Area
						<span class="title-head"> The Importance Of Being Covered</span>
					</h2>
					<p>We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence, to give them peace of mind, and enable them to realize their dreams for their loved ones and their legacy.We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence, to give them peace of mind, and enable them to realize their dreams for their loved ones and their legacy.</p>
					<p><a class="btn btn-dark" href="#">Talk to Us</a></p>

				</div><!-- Col end -->

				<div class="col-md-6">
					<div class="facts-wrapper">
						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-umbrella"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">7968</span></h2>
								<h3 class="ts-facts-title">Insurance Policies</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-globe"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">127</span></h2>
								<h3 class="ts-facts-title">Countries World Wide</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-smile-o"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">2979</span></h2>
								<h3 class="ts-facts-title">Happy Customers</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-street-view"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">1798</span></h2>
								<h3 class="ts-facts-title">Insurance Agencies</h3>
							</div>
						</div>
					</div> <!-- Facts end -->
				</div><!-- Col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Facts end -->

	<section id="news" class="news">
		<div class="container">
			<div class="down-arrow-color"></div>
			<div class="row text-center">
				<h3 class="title">
					Get Up to Date
					<span class="title-head">Latest Update From News</span>
				</h3>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="images/news/news1.jpg" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Sandhani Approves Estimated $1.7 Billion Payout for Policyowners</a>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i> December 11, 2015
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> Admin
							</span>
							<div class="post-text">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  Ut urna dui, interdum non blandit sed.</p>
							</div>
						</div>	
						<a href="#" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 1st post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="images/news/news2.jpg" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Sandhani Enhanced Customer Self Service Experience</a>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i> December 11, 2015
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> Admin
							</span>
							<div class="post-text">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  Ut urna dui, interdum non blandit sed.</p>
							</div>
						</div>	
						<a href="#" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 2nd post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="images/news/news3.jpg" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Technological changes reshaping reinsurance industry</a>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i> December 11, 2015
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> Admin
							</span>
							<div class="post-text">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  Ut urna dui, interdum non blandit sed.</p>
							</div>
						</div>	
						<a href="#" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 3rd post col end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	<section id="testimonial" class="testimonial">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					We Love To Hear
					<span class="title-head">Words From Our Customers</span>
				</h3>
			</div><!--/ Title row end -->

			<div class="row">
				<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Leslie R. Kelley,</span>
				         <span class="quotes-subtext">Manager, Luina Private Firm</span>
				       	
				     </div>
				  </div><!--/ Item 1 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Kevin Dixon,</span>
				         <span class="quotes-subtext">Govt. Official</span>
				       	
				     </div>
				  </div><!--/ Item 2 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Michael J. Higgins,</span>
				         <span class="quotes-subtext">Rtd. Army Officer</span>
				       	
				     </div>
				  </div><!--/ Item 3 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="images/clients/testimonial4.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Tara Gray,</span>
				         <span class="quotes-subtext">Accountant, Private Firm</span>
				       	
				     </div>
				  </div><!--/ Item 4 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="images/clients/testimonial5.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Connie Tinker,</span>
				         <span class="quotes-subtext">Govt. Official</span>
				       	
				     </div>
				  </div><!--/ Item 5 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="images/clients/testimonial6.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Glen E. Green,</span>
				         <span class="quotes-subtext">School Teacher</span>
				       	
				     </div>
				  </div><!--/ Item 6 end -->

				</div><!--/ Testimonial carousel end-->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->

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

<!-- Mirrored from themewinter.com/html/Sandhani/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Oct 2019 04:55:11 GMT -->
</html>