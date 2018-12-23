<?php
$nav = 1;
include './inc/header.php';
?>
<?php include './inc/nav.php'; ?>

<main>
	<section class="banner-inner animatedParent animateOnce">
		<div class="container animated slowest growIn">
			<div class="banner-content">
				<div class="text-slider">
					<article class="text-center banner-title">
						<h1>Contact us</h1>
						<p>Your dream, our contribution</p>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- service-content -->
	<section class="contact-inner section-gap bottom-slant slant-dgray animatedParent animateOnce">
		<div class="container">
			<div class="contact-wrapper">
				<div class="row">
					<div class="col-md-5">
						<div class="contact-detail animated bounceInLeft slowest">
							<h2>Dit Solution</h2>
							<ul class="detail">
								<li>
									<span><i class="fas fa-map-marker-alt"></i> Address</span>
									<a href=""><h5>Kathmandu, Nepal</h5></a>
								</li>
								<li>
									<span><i class="fas fa-envelope-open"></i> Email</span>
									<a href=""><h5>ditsolution@support.com</h5></a>
								</li>
								<li>
									<span><i class="fas fa-phone-square"></i> Contact no.</span>
									<a href=""><h5>9800000000, 6600000</h5></a>
								</li>
							</ul>
							<div class="social-media">
								<h3>Connect with us:</h3>
								<ul>
									<li><a href="!#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="!#" class="twitter"><i class="fab fa-twitter"></i></a></li>
									<li><a href="!#" class="insta"><i class="fab fa-instagram"></i></a></li>
									<li><a href="!#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 offset-md-1">
						<div class="contact-form animated bounceInRight slowest">
							<article class="mini-title">
								<h2>Contact form</h2>
								<p>Box with '<span class="color">*</span>' must be filled. Thank you</p>
							</article>
							<div class="box">
								<form>
									<div class="form-row">
										<div class="col-md-6">
											<div class="group">      
												<input class="inputMaterial" type="text" required>
												<span class="highlight"></span>
												<span class="bar"></span>
												<label>Full name <span class="color">*</span></label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="group">     
												<input class="inputMaterial" type="Email" required>
												<span class="highlight"></span>
												<span class="bar"></span>
												<label>Email address <span class="color">*</span></label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="group">     
												<input class="inputMaterial" type="text" required>
												<span class="highlight"></span>
												<span class="bar"></span>
												<label>Contact no. <span class="color">*</span></label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="group">     
												<input class="inputMaterial" type="text" required>
												<span class="highlight"></span>
												<span class="bar"></span>
												<label>Subject</label>
											</div>
										</div>
										<div class="col-md-12">
											<div class="group">     
												<textarea class="inputMaterial" rows="2" required></textarea>
												<span class="highlight"></span>
												<span class="bar"></span>
												<label>Your Message</label>
											</div>
										</div>
									</div>
									<button class="btn btn-primary-c pull-right">Login<i class="fas fa-angle-right"></i></button>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</section>
	</main>

	<?php include './inc/footer.php'; ?>