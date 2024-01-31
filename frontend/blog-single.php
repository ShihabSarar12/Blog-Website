<?php
	include '../frontend/header.php';
	include '../backend/database/db.php';

	$id =  $_GET['id'];

	$sql = "SELECT * FROM userpost WHERE blogID = $id";
	$result = mysqli_query($db_connect, $sql);
	$blogTable = mysqli_fetch_assoc($result);
?>
<!-- site wrapper -->
<div class="site-wrapper">
	<div class="main-overlay"></div>

	<!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<!-- Array ( [blogID] => 10 [blogTitle] => Perovskite Solar Cells: Pioneering the Green Energy Revolution [blogCategory] => popular [posted] => 2024-01-30 10:11:31 [blogDescription] =>sad [id] => 8 [blogImage] => BlogImage-8-2019878309.jpg ) 1  -->
							<h1 class="title mt-0 mb-3"><?= $blogTable['blogTitle']?></h1>
							<ul class="meta list-inline mb-0">
								<?php
									$userID = $blogTable['id'];
									$sql = "SELECT * FROM users WHERE id = $userID";
									$userResult = mysqli_query($db_connect, $sql);
									$userTable = mysqli_fetch_assoc($userResult);
								?>
								<li class="list-inline-item"><a href="#"><img width="70px" style="border-radius: 50%;" src="../uploads/user/<?=$userTable['profile_photo']?>" class="author" alt="author"/><?=$userTable['name']?></a></li>
								<li class="list-inline-item"><a href="#"><?=$blogTable['blogCategory']?></a></li>
								<li class="list-inline-item"><?=$blogTable['posted']?></li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="../uploads/blogImages/<?=$blogTable['blogImage']?>" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							<p>
								<?=$blogTable['blogDescription']?>
							</p>
						</div>

                    </div>

					

					<div class="spacer" data-height="50"></div>

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
	include '../frontend/footer.php';
?>