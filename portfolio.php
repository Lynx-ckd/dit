<?php
$nav = 1;
include './inc/header.php';
?>
<?php include './inc/nav.php'; ?>

<main>
	<section class="banner-inner animatedParent animateOnce">
		<div class="container">
			<div class="banner-content animated slowest growIn">
				<div class="text-slider">
					<article class="text-center banner-title">
						<h1>Our portfolio</h1>
						<p>Your dream, our contribution</p>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- service-content -->
	<section class="portfolio-inner section-gap bottom-slant slant-dgray animatedParent animateOnce">
		<div class="container">
			<div class="portfolio-wrapper ">
				<ul id="filters" class="clearfix animated slowest delay-500 growIn">
					<li><span class="filter active" data-filter=".app,.graphic,.web">All</span></li>
					<li><span class="filter" data-filter=".app">Mobile apps</span></li>
					<li><span class="filter" data-filter=".web">Logo</span></li>
					<li><span class="filter" data-filter=".graphic">Graphic designs</span></li>
				</ul>

				<div class="portfolio-item animatedParent animateOnce">
					<div class="row" id="portfoliolist">
						<div class="col-lg-4 portfolio app" data-cat="app">
							<div class="portfolio-wrapper skew-rad">
								<div class="skew-none">
									<a class="venobox vbox-item" data-gall="gall1" data-title="Z series - TomoZ" href="assets/images/mob.jpg">
										<img src="assets/images/mob.jpg" alt="web-design">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 portfolio graphic app" data-cat="graphic app">
							<div class="portfolio-wrapper skew-rad">
								<div class="skew-none">
									<a class="venobox vbox-item" data-gall="gall1" data-title="Z series - TomoZ" href="assets/images/add.jpg">
										<img src="assets/images/add.jpg" alt="web-design">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 portfolio web" data-cat="web">
							<div class="portfolio-wrapper skew-rad">
								<div class="skew-none">
									<a class="venobox vbox-item" data-gall="gall1" data-title="Z series - TomoZ" href="assets/images/fes.jpg">
										<img src="assets/images/fes.jpg" alt="web-design">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 portfolio app" data-cat="app">
							<div class="portfolio-wrapper skew-rad">
								<div class="skew-none">
									<a class="venobox vbox-item" data-gall="gall1" data-title="Z series - TomoZ" href="assets/images/game.jpg">
										<img src="assets/images/game.jpg" alt="web-design">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 portfolio graphic" data-cat="graphic">
							<div class="portfolio-wrapper skew-rad">
								<div class="skew-none">
									<a class="venobox vbox-item" data-gall="gall1" data-title="Z series - TomoZ" href="assets/images/film.jpg">
										<img src="assets/images/film.jpg" alt="web-design">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 portfolio web" data-cat="web">
							<div class="portfolio-wrapper skew-rad">
								<div class="skew-none">
									<a class="venobox vbox-item" data-gall="gall1" data-title="Z series - TomoZ" href="assets/images/fam.jpg">
										<img src="assets/images/fam.jpg" alt="web-design">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include './inc/footer.php'; ?>