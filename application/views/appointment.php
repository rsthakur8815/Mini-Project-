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
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                    <a href="<?php echo base_url('main') ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
            </ol>
        </div>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <div class="appointment py-5">
        <div class="py-xl-5 py-lg-3">
            <div class="w3ls-titles text-center mb-5">
                <h3 class="title">Appointment</h3>

                <span>
                    <i class="fas fa-user-md"></i>
                </span>
                <div class="form-group" id="ai-generated-content">
                    <p>Loading personalized content...</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="appoint-img">
                </div>
				<div class="contact-right-w3l appoint-form">
					<h5 class="title-w3 text-center mb-5">Fill your appointment form</h5>
					<!-- <?php
					if (!empty($this->session->flashdata('success'))) { ?>
						<h4 id="flash" align="center"
							style="margin-top:150px; background-color:black !important; border-radius:3px; line-height:50px; animation: fadeOut 3s forwards;">
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
					<form action="<?php echo base_url('appointmentC/booking') ?>" method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder="Your Name " name="Name"
								id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-phone" class="col-form-label">Your Email</label>
							<input type="email" class="form-control" placeholder="Your Email" name="email"
								id="recipient-phone" required="">
						</div>
						
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Select appointment date</label>
							<input name="appointment_date" placeholder="Date" class="date form-control" id="datepicker"
								type="date" value="" onfocus="this.value = '';"
								onblur="if (this.value == '') {this.value = '';}" required="" />
					
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Select City</label>
							<select name="city" required="" class="form-control">
								<option value="">Select City</option>
								<option value="Indore">Indore</option>
								<option value="Vijay Nagar">Vijay Nagar</option>
								<option value="New Palasia">New Palasia</option>
                                <option value="Old Palasia">Old Palasia</option>
                                <option value="Other">Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Select Speciality</label>
							<select name="speciality" required="" class="form-control">
								<option value="">Select Speciality</option>
								<option value="Dermatology">Dermatology</option>
								<option value="ENT">ENT</option>
								<option value="Obstetrics & Gynecology"> Obstetrics & Gynecology</option>
								<option value="Orthopedics">Orthopedics</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Select your doctor</label>
							<select required="" class="form-control" name="doctor">
								<option value="">Select your doctor</option>
                                <?php foreach($doctors as $data){ ?>
								<option value="<?php echo $data['doctor_name'];?>"><?php echo $data['doctor_name'] ." ( ". $data['doctor_specialist'] ." ) " ;?></option>
								<?php } ?>
                                <option value="">Any Available Doctor</option>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="col-form-label">Attach File</label>
							<input type="file" class="form-control" placeholder="" name="file"
								id="recipient-phone" required="">
						</div>
						<input type="submit" value="Book Appointment" class="btn_apt">
					</form>
				</div>
				<div class="clerafix"></div>
			</div>
		</div>
	</div>

    <!-- Dynamic Doctor Options -->

    <!-- <select required class="form-control" id="doctor-select">
  <option value="">Select your doctor</option>
</select> -->


    <script>
    // Use AI to generate personalized content
    const aiGeneratedContent = document.getElementById("ai-generated-content");

    // Example AI-generated content
    const personalizedMessage = "Hello, []! Welcome to Medic. How can we assist you today?";

    // Update the content with the AI-generated message
    aiGeneratedContent.innerHTML = personalizedMessage;
    </script>

    <script>
    // Use AI to fetch and populate the doctor options
    const doctorSelect = document.getElementById("doctor-select");

    // Example: Fetch doctor data via an API
    // Replace this with your actual API endpoint
    fetch('https://your-api-endpoint.com/doctors')
        .then(response => response.json())
        .then(data => {
            data.forEach(doctor => {
                const option = document.createElement("option");
                option.value = doctor.id;
                option.text = doctor.name;
                doctorSelect.appendChild(option);
            });
        });
    </script>
    <!-- //contact -->

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
    <!-- <script src="js/jquery-2.2.3.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha512-SFaNb3xC08k/Wf6CRM1J+O/vv4YWyrPBSdy0o+1nqKzf+uLrIBnaeo8aYoAAOd31nMNHwX8zwVwTMbbCJjA8Kg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Default-JavaScript-File -->

    <!-- banner slider -->
    <!-- <script src="js/responsiveslides.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js"
        integrity="sha512-xLb7JAM9BNykuzMmlFtHHgQQAwFMiPVf9IhLV6g/IgQInWqxECLrlqBo64ytFPZH7qeZjahD1TOvl/wp8dL6LA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(function() {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
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

    <!-- <script src="js/bootstrap.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- //Js files -->

</body>

</html>