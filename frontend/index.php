<?php
	require './header.php';
	require '../backend/database/db.php';
?>

<section class="hero-carousel">
        <div class="container-xl">
            <div class="post-carousel-lg">
                <!-- post -->
				<?php
					$sql = 'SELECT * FROM userpost INNER JOIN users
					ON userpost.id = users.id;';
					$result = mysqli_query($db_connect, $sql);
					if (mysqli_num_rows($result) > 0) {
						while ($post = mysqli_fetch_assoc($result)) {
				?>

					<div class="post featured-post-xl">
						<div class="details clearfix">
							<a href="category.html" class="category-badge lg"><?=$post['blogCategory']?></a>
							<h4 class="post-title"><a href="blog-single.html"><?=$post['blogTitle']?></a></h4>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><?=$post['name']?></a></li>
								<li class="list-inline-item"><?=$post['posted']?></li>
							</ul>
						</div>
						<a href="blog-single.html">
							<div class="thumb rounded">
								<div class="inner data-bg-image" data-bg-image="../uploads/blogImages/<?=$post['blogImage']?>"></div>
							</div>
						</a>
					</div>
				<?php 
						}
					}
				?>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">
					<?php
					$sql = 'SELECT * FROM userpost INNER JOIN users
					ON userpost.id = users.id;';
					$result = mysqli_query($db_connect, $sql);
					if (mysqli_num_rows($result) > 0) {
						while ($post = mysqli_fetch_assoc($result)) {
							// Array ( [blogID] => 6 [blogTitle] => Dummy23 [blogCategory] => Dummy4 [posted] => 2024-01-28 15:46:30 [blogDescription] => DummyDummyDummy123 [id] => 4 [blogImage] => [name] => Carlos Mcintyre [email] => dypezubyb@mailinator.com [password] => $2y$10$CRqn5VRi8npFdp4977GbLu/aVyTYEFfQlqhhBrCI.lhfds9mKc62W [profile_photo] => 4.png [role] => admin )
						?>
							<div class="post post-classic rounded bordered">
								<div class="thumb top-rounded">
									<a href="category.html" class="category-badge lg position-absolute"><?=$post['blogCategory']?></a>
									<a href="blog-single.php?id=<?=$post['blogID']?>">
										<div class="inner">
											<img src="../uploads/blogImages/<?=$post['blogImage']?>" alt="post-title" />
										</div>
									</a>
								</div>
								<div class="details">
									<ul class="meta list-inline mb-0">
										<li class="list-inline-item"><a href="#"><img width="70px" style="border-radius: 50%;" src="../uploads/user/<?=$post['profile_photo']?>" class="author" alt="author"/><?=$post['name']?></a></li>
										<li class="list-inline-item"><?=$post['posted']?></li>
									</ul>
									<h5 class="post-title mb-3 mt-3"><a href="blog-single.php?id=<?=$post['blogID']?>"><?=$post['blogTitle']?></a></h5>
									<p class="excerpt mb-0"></p>
								</div>
								<div class="post-bottom clearfix d-flex align-items-center">
									<div class="social-share me-auto">
										<button class="toggle-button icon-share"></button>
										<ul class="icons list-unstyled list-inline mb-0">
											<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
										</ul>
									</div>
									<div class="float-end d-none d-md-block">
										<a href="blog-single.php?id=<?=$post['blogID']?>" class="more-link">Continue reading<i class="icon-arrow-right"></i></a> 
									</div>
									<div class="more-button d-block d-md-none float-end">
										<a href="#"><span class="icon-options"></span></a>
									</div>
								</div>
							</div>
						<?php 
						}
					}
					?>

				</div>
				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						<!-- widget about -->
					<div class="widget rounded">
						<div class="widget-about data-bg-image text-center" data-bg-image="../assets/frontend/images/map-bg.png">
						<div class="">
                                <p style="
                                        color: #203656;
                                        font-family: 'Poppins', sans-serif;
                                        font-weight: 700;
                                        line-height: 1.4;
                                ">
                                    <a class="navbar-brand" style="font-size: 20px;" href="">
                                        Heritage Tales.
                                    </a>
                                </p>

                            </div>
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
								<h3 class="widget-title">Blog Categories</h3>
							</div>
							<div class="widget-content">
								<ul class="list">
									<?php
										$sql = 'SELECT * FROM userpost INNER JOIN users
										ON userpost.id = users.id;';
										$result = mysqli_query($db_connect, $sql);
										
										if (mysqli_num_rows($result) > 0) {
											while ($post = mysqli_fetch_assoc($result)) {
												// Array ( [blogID] => 6 [blogTitle] => Dummy23 [blogCategory] => Dummy4 [posted] => 2024-01-28 15:46:30 [blogDescription] => DummyDummyDummy123 [id] => 4 [blogImage] => [name] => Carlos Mcintyre [email] => dypezubyb@mailinator.com [password] => $2y$10$CRqn5VRi8npFdp4977GbLu/aVyTYEFfQlqhhBrCI.lhfds9mKc62W [profile_photo] => 4.png [role] => admin )
									?>
										<li><a href="#"><?= $name = $post['blogCategory']?></a><span></span></li>
									<?php
											}
										}
									?>
								</ul>
							</div>
							
						</div>

						<!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
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