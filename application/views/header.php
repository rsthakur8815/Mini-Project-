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
<div class="top-bar py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 top-social-agile">
				<div class="row">
					<!-- social icons -->
					<ul class=" col-6 top-right-info ">
						<li>
							<a href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="mx-3">
							<a href="#">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
						<li class="ml-3">
							<a href="#">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</li>
						<li class="ml-3">
							<a href="#">
								<i class="fab fa-github"></i>
							</a>
						</li>
						<li class="ml-3">
							<a href="#">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
					</ul>
					<!-- //social icons -->
					<div class="col-6 header-top_w3layouts pl-3 text-lg-left ">
						<p class="text-white">
							<i class="fas fa-map-marker-alt mr-2"></i>Indore(M.P.)
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 top-social-agile text-lg-right text-center">
				<div class="row">
					<div class="col-lg-7 col-6 top-w3layouts">
						<p class="text-white">
							<i class="far fa-envelope-open mr-2"></i>
							<a href="mailto:info@example.com" class="text-white">ihms2023@gmail.com</a>
						</p>
					</div>
					<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
						<p class="text-white">
							<i class="fas fa-phone mr-2"></i>+91 8989521854
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<!-- //top-bar -->

<!-- header 2 -->
<div id="home">
	<!-- navigation -->
	<div class="main-top py-1">
		<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
			<div class="container">
				<!-- logo -->
				<h1>
					<a class="navbar-brand font-weight-bold font-italic" href="<?php echo base_url('main') ?>">
					<span>I</span>HMS
						<i class="fas fa-syringe"></i>
					</a>
				</h1>
				<!-- //logo -->
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item active mt-lg-0 mt-3">
							<a class="nav-link" href="<?php echo base_url('main') ?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mx-lg-4 my-lg-0 my-3">
							<a class="nav-link" href="<?php echo base_url('aboutC') ?>">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('contactC') ?>"> Contact Us</a>
						</li>&emsp;
						<li class="nav-item ">
						<a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter1">
							Login <i class="fas fa-sign-in-alt mr-2"></i></a>
							
						</li>
					</ul>
					<!-- Appointment -->
					<a href="<?php echo base_url('appointmentC') ?>"
						class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3">
						<i class="fas fa-calendar "></i>&nbsp;Appointment</a>&nbsp;&emsp;
					<!-- //Appointment -->
					<!-- <a href="<?php echo base_url('chatbotC')?>" class="chatBtn">
                        <svg height="1.6em" fill="white" xml:space="preserve" viewBox="0 0 1000 1000" y="0px" x="0px"
                            version="1.1">
                            <path
                                d="M881.1,720.5H434.7L173.3,941V720.5h-54.4C58.8,720.5,10,671.1,10,610.2v-441C10,108.4,58.8,59,118.9,59h762.2C941.2,59,990,108.4,990,169.3v441C990,671.1,941.2,720.5,881.1,720.5L881.1,720.5z M935.6,169.3c0-30.4-24.4-55.2-54.5-55.2H118.9c-30.1,0-54.5,24.7-54.5,55.2v441c0,30.4,24.4,55.1,54.5,55.1h54.4h54.4v110.3l163.3-110.2H500h381.1c30.1,0,54.5-24.7,54.5-55.1V169.3L935.6,169.3z M717.8,444.8c-30.1,0-54.4-24.7-54.4-55.1c0-30.4,24.3-55.2,54.4-55.2c30.1,0,54.5,24.7,54.5,55.2C772.2,420.2,747.8,444.8,717.8,444.8L717.8,444.8z M500,444.8c-30.1,0-54.4-24.7-54.4-55.1c0-30.4,24.3-55.2,54.4-55.2c30.1,0,54.4,24.7,54.4,55.2C554.4,420.2,530.1,444.8,500,444.8L500,444.8z M282.2,444.8c-30.1,0-54.5-24.7-54.5-55.1c0-30.4,24.4-55.2,54.5-55.2c30.1,0,54.4,24.7,54.4,55.2C336.7,420.2,312.3,444.8,282.2,444.8L282.2,444.8z">
                            </path>
                        </svg>
                        <span class="tooltip">Hey there! I am an A.I. chatbot, let's talk.</span>
</a> -->
				</div>
			</div>
		</nav>
	</div>
	
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form action="<?php echo  base_url("Login");?>" method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" placeholder="email" required>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
							<button type="submit" class="btn submit mb-4">Login</button>
							<p class="forgot-w3ls text-center pb-4">
								<a href="#" class="text-white">Forgot your password?</a>
							</p>
							<p class="account-w3ls text-center pb-4">
								Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- //login -->
	<!-- register -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-content-2">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Register Now</h5>
						<form action="<?php echo base_url("Login/registeration");?>" method="post">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" placeholder="name" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="email" required>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" id="password1"
									placeholder="password" required>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Register</button>
							<p class="text-center pb-2">
								<a href="#" class="text-white">By clicking Register, I agree to your terms</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //register -->
	<!-- //modal -->
</div>
</div>
