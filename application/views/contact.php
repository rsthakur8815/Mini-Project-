<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Intelligent Hospital Management System</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<!-- //Web-Fonts -->

</head>
<style type="text/css">
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
       
    }

    .fullpage-container-class {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        border: 0;
        margin-top: 150px;
        margin-bottom: 50px;
        margin-left: 500px;
    }

    .chatBtn {
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: none;
        background-color: #FFE53B;
        background-image: linear-gradient(147deg, #FFE53B, #FF2525, #FFE53B);
        cursor: pointer;
        padding-top: 3px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.164);
        position: relative;
        background-size: 300%;
        background-position: right;
        transition-duration: 1s;
    }

    .tooltip {
        position: absolute;
        left: 60px;
        opacity: 0;
        background-color: gainsboro;
        color: black;
        padding: 10px 10px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition-duration: .5s;
        pointer-events: none;
        letter-spacing: 0.5px;
    }

    .chatBtn:hover .tooltip {
        opacity: 1;
        transition-duration: .5s;
    }

    .chatBtn:hover {
        background-position: right;
        transition-duration: 1s;
    }
    </style>
<body>


	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo base_url('main')?>">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Contact Us</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2"></p>
			</div>
			<div class="d-flex">
				<div class="col-lg-5 w3_agileits-contact-left">
				</div>
				<div class="col-lg-7 contact-right-w3l">
					<h5 class="title-w3 text-center mb-5">Get In Touch</h5>
					<!-- <?php
					if (!empty($this->session->flashdata('success'))) { ?>
						<h4 align="center"
							style="margin-top:150px; background-color:black !important; border-radius:3px; line-height:50px;">
							<span style="margin:7px; color:green;">
								<?php print_r($this->session->flashdata('success')); ?>
							</span>
						</h4></br>
					<?php } ?>
					<?php
					if (!empty($this->session->flashdata('error'))) { ?>
						<h4 align="center" style="background-color:black !important; border-radius:3px; line-height:50px;">
							<span style="margin:7px; color:red;">
								<?php print_r($this->session->flashdata('error')); ?>
							</span>
						</h4></br>
					<?php } ?> -->
					<form action="<?php echo base_url('contactC/contact_data');?>" method="post">
						<div class="d-flex space-d-flex">
							<div class="form-group grid-inputs">
								<input type="text" class="name form-control" name="fname" placeholder="First Name"
									required="">
							</div>
							<div class="form-group grid-inputs">
								<input type="text" class="name form-control" name="lname" placeholder="Last Name"
									required="">
							</div>
						</div>
						<div class="form-group">
							<input type="email" class="name form-control" name="email" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<input type="text" class="name form-control" name="subject" placeholder="Subject"
								required="">
						</div>

						<div class="form-group">
							<textarea placeholder="Your Message" required="" class="form-control" name="message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Map -->
	<div class="map">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.5130900428026!2d44.506621715459396!3d40.17539347939393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1509605601510"></iframe>
	</div>
	<!-- //Map -->


	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids pt-sm-4 pt-3">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-md-4 w3l-footer">
						<h2 class="mb-sm-3 mb-2">
							<a href="<?php echo base_url('main')?>" class="text-white font-italic font-weight-bold">
							<span>I</span>HMS
								<i class="fas fa-syringe ml-2"></i>
							</a>
						</h2>
						<p></p>
					</div>
					<div class="col-md-4 w3l-footer my-md-0 my-4">
						<h3 class="mb-sm-3 mb-2 text-white">Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-location-arrow float-left"></i>
								<p class="ml-4">
									<span>IHMS ,</span>Indore (452012) </p>
								<div class="clearfix"></div>
							</li>
							<li class="my-3">
								<i class="fas fa-phone float-left"></i>
								<p class="ml-4">8815225624</p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="far fa-envelope-open float-left"></i>
								<a href="mailto:info@example.com" class="ml-3">ihms2023@gmail.com</a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 w3l-footer">
						<h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li>
									<a href="<?php echo base_url('main')?>">Home</a>
								</li>
								<li class="mt-2">
									<a href="<?php echo base_url('aboutC')?>">About Us</a>
								</li>
							
								<li class="mt-2">
									<a href="<?php echo base_url('appointmentC')?>">Appointment</a>
								</li>
								<li class="mt-2">
									<a href="<?php echo base_url('contactC')?>">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
					<p class="copy-right-grids mt-lg-1">© 2023 IHMS. All Rights Reserved | Design by
						<a href="#" target="_blank">IHMS</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
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
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>