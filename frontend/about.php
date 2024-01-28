<?php
require './header.php';
?>

<!-- section main content -->
<section class="main-content">
	<div class="container-xl">

		<div class="row gy-4">

			<div class="col-lg-8">

				<div class="page-content bordered rounded padding-30">

					<img src="../assets/frontend/images/other/about.jpg" alt="Katen Doe" class="rounded mb-4" />

					<h3>About Our Project</h3>
					<p>Welcome to our software development blog – a culmination of creativity, passion, and hard work by the young and dynamic web developers from Ahsanullah University of Science and Technology (AUST). Our journey into the world of software development led us to create this platform, and we are excited to share our insights, experiences, and knowledge with you.</p>

					<h3>The Team</h3>
					<h6>Ali Imran Mehedi <br> 
					Position: Project Lead and Developer</h6>
					

					Hey there! I'm Ali Imran Mehedi, the driving force behind this project. With a passion for web development and a knack for problem-solving, I took on the role of the project lead. It's been an incredible journey turning our ideas into a tangible blog site that we hope you'll enjoy.

					<h6>Ammam Oasifa <br>
					Position: Frontend Developer</h6>

					Greetings! I'm Ammam Oasifa, the creative mind behind the frontend design of our blog. I believe in the power of user-friendly interfaces and have strived to create an engaging and visually appealing experience for our visitors.

					<h6>
						Shihab Sharar <br>
						Position: Backend Developer
					</h6>

					Hello, I'm Shihab Sharar, responsible for the backend development of our blog. I've worked diligently to ensure the site runs smoothly and efficiently. From database management to server-side scripting, my goal is to provide a seamless experience for our users.

					<h3>Our Vision</h3>
					Our project, developed as part of the CSE3100 course, reflects our commitment to excellence in software development. We envision this blog as a hub for information, discussions, and collaborations within the software development community. Whether you're a fellow student, a seasoned developer, or someone just starting their coding journey, we hope you find valuable insights and inspiration here.

					<h3>Contact Us</h3>
					<p>We value your feedback and suggestions. Feel free to reach out to us with your thoughts, ideas, or just to say hello! Connect with us via email or social media – we're eager to hear from you.</p>

					<p>Thank you for visiting our software development blog. Join us on this exciting journey of learning, sharing, and growing together.</p>

					<span>Happy coding!</span>
					<br>
					<span>The AUST Software Development Team</span>
				</div>

			</div>
			<div class="col-lg-4">

				<!-- sidebar -->
				<div class="sidebar">
					<!-- widget about -->
					<div class="widget rounded">
						<div class="widget-about data-bg-image text-center" data-bg-image="../assets/frontend/images/map-bg.png">
							<img src="images/logo.svg" alt="logo" class="mb-4" />
							<p class="mb-4">Explore software development insights. AUST students share coding experiences, tips, and innovations."</p>
							<ul class="social-icons list-unstyled list-inline mb-0">
								<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>


					<!-- widget categories -->
					<div class="widget rounded">
						<div class="widget-header text-center">
							<h3 class="widget-title">Explore Topics</h3>
							<img src="images/wave.svg" class="wave" alt="wave" />
						</div>
						<div class="widget-content">
							<ul class="list">
								<li><a href="#">Lifestyle</a><span>(5)</span></li>
								<li><a href="#">Inspiration</a><span>(2)</span></li>
								<li><a href="#">Fashion</a><span>(4)</span></li>
								<li><a href="#">Politic</a><span>(1)</span></li>
								<li><a href="#">Trending</a><span>(7)</span></li>
								<li><a href="#">Culture</a><span>(3)</span></li>
							</ul>
						</div>

					</div>

					<!-- widget newsletter -->
					<div class="widget rounded">
						<div class="widget-header text-center">
							<h3 class="widget-title">Newsletter</h3>
							<img src="images/wave.svg" class="wave" alt="wave" />
						</div>
						<div class="widget-content">
							<span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
							<form>
								<div class="mb-2">
									<input class="form-control w-100 text-center" placeholder="Email address…" type="email">
								</div>
								<button class="btn btn-default btn-full" type="submit">Sign Up</button>
							</form>
							<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>

<?php
require './footer.php';
?>