
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<link href="images/hand.png" rel="icon">
<title>Online job portel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Bank Online Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

</head>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top jarallax">
							<div class="agileinfo-dot">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>Offering a wide range</h3>
										<h6>of recruitment solution </h6>
										<p></p>
									
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1 jarallax">
							<div class="agileinfo-dot">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>Find your job</h3>
										<h6>From anywhere in india</h6>
										<p></p>
										
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2 jarallax">
							<div class="agileinfo-dot">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>We are the leaders</h3>
										<h6>in executive search & selection</h6>
										<p></p>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<!--banner Slider starts Here-->
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="w3layouts-logo">
							<h1><a href="index.html"> <span>Online</span>Job<span>portal</span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="#markets" class="scroll">Search job</a></li>
								<li><a href="#blog" class="scroll">Latest job</a></li>
                                                             
                               <li> 
                               <a href="#" data-toggle="dropdown" >About us</a>
                               <ul class="dropdown-menu">
                               <li><a href="#mail" class="scroll">Mail us</a></li>
                               <li><a href="#about" class="scroll">About</a></li>
                               <li><a href="#contact" class="scroll">Contact me</a></li>
                               
                               </ul>
                               </li>
                                 <li><a href="login.php">Login</a></li>                               
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
	<!-- //banner -->


	<!-- markets -->
	<!-- blog -->
	<div class="blog" id="blog">
		<div class="container">
			<div class="agileits-blog-grids">
				<div class="wthree-heading">
					<h3>Latest job post</h3>
					<h5>Apply before last date</h5>
				</div>
			</div>
			<div class="posts-grids">
				<div class="col-sm-4 w3-agile-post-grids">
					<div class="w3-agile-post-img">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
						    <!--	<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 14</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 240</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
                                                     -->
						</a>
					</div>
						<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Working with Microsoft India</a></h4>
						<ul>
							<li>By <a href="#">PMRAJ</a></li>
							<li>April 05th,2017</li>
						</ul>
						<p>Get a change to work with the company of your dream.For more information refer to <span><a href="https://www.youtube.com/watch?v=ex1KnMNke9k"><u>our working place</u></a></span></p>
					</div>
				</div>
				<div class="col-sm-4 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img1">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Working with Google India</a></h4>
						<ul>
							<li>By <a href="#">PMRAJ</a></li>
							<li>April 10th,2017</li>
						</ul>
						<p>Work with new minds and new ideas is the only the aim of Google.For office view <span><a href="https://www.youtube.com/watch?v=nQCLKskopYc"><u>our working place</u></a></span></p>
					</div>
				</div>
				<div class="col-sm-4 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img2">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
						     <!--	<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 21</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 287</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
                                                      -->
						</a>
					</div>
						<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Job intern with SAP Labs India</a></h4>
						<ul>
							<li>By <a href="#">PMRAJ</a></li>
							<li>April 15th,2017</li>
						</ul>
						<p>SAP Labs India is now SAPAPJ Market Unit of the Year.Why go anywhere when you have the chance to get intern with SAP for more refer to <span><a href="https://www.youtube.com/watch?v=fRsKifv3_Yo"><u>our work place</u></a></span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- //markets -->
	<!-- services -->

	<!-- //services -->
	<!-- testimonial -->
	<div class="jarallax testimonial" id="testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="wthree-heading testimonial-heading">
					<h3>Services Overview</h3>
					<h5>Vivamus facilisis dolor ac sapien pharetra</h5>
				</div>
				<div class="w3-agile-testimonial">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/14.jpg" alt="" />
										</div>
										<div class="testimonial-img">
											<img src="images/15.jpg" alt="" />
										</div>
										<div class="testimonial-img t-img2">
											<img src="images/16.jpg" alt="" />
										</div>
										
										<div class="clearfix"> </div>
									</div>
									<div class="testimonial-img-info">
										<p>Nunc interdum elit nec sapien vehicula, ut blandit nulla ultrices. Sed ullamcorper metus eget efficitur rutrum. Aliquam a nunc odio. Aenean fermentum finibus efficitur.</p>
										<h5>Peter Guptill</h5>
										<h6>Proin blandit</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/17.jpg" alt="" />
										</div>
										<div class="testimonial-img">
											<img src="images/18.jpg" alt="" />
										</div>
										<div class="testimonial-img t-img2">
											<img src="images/14.jpg" alt="" />
										</div>
										
										<div class="clearfix"> </div>
									</div>
									<div class="testimonial-img-info">
										<p>Nunc interdum elit nec sapien vehicula, ut blandit nulla ultrices. Sed ullamcorper metus eget efficitur rutrum. Aliquam a nunc odio. Aenean fermentum finibus efficitur.</p>
										<h5>Peter Guptill</h5>
										<h6>Proin blandit</h6>
									</div>
								</li>
							<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/15.jpg" alt="" />
										</div>
										<div class="testimonial-img">
											<img src="images/16.jpg" alt="" />
										</div>
										<div class="testimonial-img t-img2">
											<img src="images/17.jpg" alt="" />
										</div>
										
										<div class="clearfix"> </div>
									</div>
									<div class="testimonial-img-info">
										<p>Nunc interdum elit nec sapien vehicula, ut blandit nulla ultrices. Sed ullamcorper metus eget efficitur rutrum. Aliquam a nunc odio. Aenean fermentum finibus efficitur.</p>
										<h5>Peter Guptill</h5>
										<h6>Proin blandit</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider3").responsiveSlides({
										auto: true,
										pager:false,
										nav:false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
						</script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
        <!-- about us-->
       <div class="about" id="about">
		<div class="container">
			<div class="w3-about-grids">
				<div class="col-md-6 w3-about-left">
					<div id="main" role="main">
					 <section class="slider">
						<div id="slider" class="flexslider">
						  <ul class="slides">
							
							<li>
								<img src="images/7.jpg" alt="" />
							</li>
							<li>
								<img src="images/8.jpg" alt="" />
							</li>
							<li>
								<img src="images/9.jpg" alt="" />
							</li>
							
							
							<li>
								<img src="images/11.jpg" alt="" />
							</li>
							<li>
								<img src="images/12.jpg" alt="" />
							</li>
							<li>
								<img src="images/13.jpg" alt="" />
							</li>
							
						  </ul>
						</div>
						<div id="carousel" class="flexslider">
						  <ul class="slides">
							
							<li>
								<img src="images/7.jpg" alt="" />
							</li>
							<li>
								<img src="images/8.jpg" alt="" />
							</li>
							<li>
								<img src="images/9.jpg" alt="" />
							</li>
													
							<li>
								<img src="images/11.jpg" alt="" />
							</li>
							<li>
								<img src="images/12.jpg" alt="" />
							</li>
							<li>
								<img src="images/13.jpg" alt="" />
							</li>
							
						  </ul>
						</div>
					  </section>
					</div>
				</div>
				<div class="col-md-6 w3-about-left">
					<h2>Why Choose Us ?</h2><br/>
					<h4>Ranked as one of the best site by goverment of India</h4>
					<h5><p>Our site aims in developing a user-friendly environment for both the job seekers and recruiters
to communicate with each other.Our site provides latest update of job's across India and helps the job seekers to provide a platform for finding a right and satisfactory job for themselves based on their 
skills,experiences and interest's.<br>
Earlier,the advertisements of jobs were limited to newspapers.So this causes lack of communication gap between the jobseekers and the job provider to overcome this problem our team have developed a user friendly online job portal site where any job seekers can search and also apply for the job.All the guidelines 
regarding any issues can be handled by our experts.Not only this any new set up companies can register in our site and select for the best candidates among the best.
.Our site aimed to provide best class of employment services to job seekers.</p></h5>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
     <!-- end about us -->
		<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="wthree-heading">
				<h3>How to contact us</h3>
				<h5> </h5>
			</div>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h2><i>Easy Reach.</i></h2>
						<h4>Anytime. Anywhere.</h4>
						<p>No matter where you are your job search moves with you. You can search the portal online through any computer or mobile device.<br><b> For more information regarding any job query contact to our toll free number or directly mail us</b></p>
					</div>
					<div class="agileits-contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>1800234896</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">pmrajob@example.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>  Business Park, Hilite City, NH Thondayad By-Pass, Kozhikode, 673014</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Send us a message</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<button class="btn1">Submit</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile-map" id="contact">
				<h3>Find us here</h3>
				
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d978.0665959556761!2d75.93201823532578!3d11.315229817276766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74dd61d171020805!2sMBA+Hostel!5e0!3m2!1sen!2sin!4v1488992253560">
                                  </iframe>

                                 
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- copyright -->
	<footer>
		<div class="container">
			<div class="copyright">
				<p>© 2017 Online job portal . All rights reserved | Design by <a href="#">pankaj</a></p>
			</div>
		</div>
	</footer>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/				
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 102,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!-- //FlexSlider -->
</body>	
</html>
