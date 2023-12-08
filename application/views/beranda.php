<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?> </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Favicon-->
	<link rel="shortcut icon" href="<?= base_url('assets/front/'); ?>images/favicon.ico" type="image/x-icon">

	<!-- THEME CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/bootstrap/css/bootstrap.min.css">
	<!-- Themify -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/slick-carousel/slick-theme.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/slick-carousel/slick.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>plugins/magnific-popup/magnific-popup.css">
	<!-- manin stylesheet -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/style.css">
	
</head>

<body>


	<header class="fixed-top bg-grey justify-content-center">
		<div class="container">
			<div class="row align-items-center ">
				<div class="col-lg-2 header-left col-md-4 col-7">
					<ul class="list-inline header-socials-2 mb-0 text-center">
						<li class="list-inline-item"><a href="<?= $konfig->facebook; ?>"><i class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a href="<?= $konfig->instagram; ?>"><i class="ti-instagram"></i></a></li>
					</ul>
				</div>

				<div class="col-lg-8 text-center col-md-8 col-5">
					<nav class="navbar navbar-expand-lg navigation">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
							aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="ti-menu"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarContent">
							<ul id="menu" class="menu navbar-nav mx-auto ">
								<li class="nav-item">
									<a class="nav-link dropdown-toggle" href="<?= base_url('home') ?>" id="navbar" role="button" 
										aria-haspopup="true" aria-expanded="false">
										Home
									</a>
								</li>
								<li class="nav-item dropdown  pl-0">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Categories
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<?php foreach ($kategori as $kate){ ?>
										<a class="dropdown-item" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
											<?= $kate['nama_kategori'] ?>
										</a>
									<?php } ?>
								</li>
								<li class="nav-item">
									<a class="nav-link dropdown-toggle" href="<?= base_url('home/galeri') ?>" id="navbar" role="button" 
										aria-haspopup="true" aria-expanded="false">
										Galeri
									</a>
								</li>
							</ul>
						</div> 
					</nav>
				</div>
				
				<div class="col-lg-2">
					<button type="button" class="btn btn-light border border-4" style="border-radius:4rem " ><a href="<?= base_url('auth') ?>" class="nav-link">Login</a></button>
				</div>
				
			</div>
		</div>
	</header>

	<div class="header-logo py-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<a class="navbar-brand" href="#"><img src="" alt="" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</div>


	<section class="banner">
		<div class="container">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				<?php $no=1; foreach ($caraousel as $aa) { ?>
					<div class="carousel-item <?php if($no==1){ echo 'active';} ?>">
						<img class="d-block w-100" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" >
					</div>
					<?php $no++; } ?>
				</div>
				<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">next</span>
				</button>
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-content text-center">
						<div class="meta-cat">
							<span class="text-capitalize letter-spacing-1 cat-name font-extra text-color">Welcome</span>
						</div>
						<div class="post-title">
							<h2><a href="blog-single.html"><?= $konfig->judul_website; ?></a></h2>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="section-padding pt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<?php foreach ($konten as $uu) { ?>
					<div class="mb-4 post-list border-bottom pb-4">
						<div class="row no-gutters">
							<div class="col-md-5">
								<a class="post-thumb " href="<?= base_url('home/artikel/'.$uu['slug']) ?>">
									<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" alt="" class="img-fluid w-100">
								</a>
							</div>

							
							<div class="col-md-7">
								<div class="post-article mt-sm-3">
									<div class="meta-cat">
										<span class="letter-spacing cat-name font-extra text-uppercase font-sm"><?= $uu['judul'] ?></span>
									</div>

									<div class="post-meta">
										<ul class="list-inline">
											<li class="post-like list-inline-item">
											<h3 class="post-title mt-2"><a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"><?= $uu['nama_kategori'] ?></a></h3>
											</li>
										</ul>
									</div>
									<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="btn btn-grey px-4 mx-auto my-2">Read More</a>
								</div>
							</div>
							
						</div>
					</div>
					<?php } ?>
					


					
				</div>
				<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="sidebar-wrap mt-5 mt-lg-0">
							<div class="sidebar-widget about mb-5 text-center p-3">
								<div class="about-author">
									<img src="<?= base_url('assets/front/'); ?>images/kupu.jpg" alt="" class="img-fluid">
								</div>
								<h4 class="mb-0 mt-4">Evi</h4>
								<p></p>
								<p><?= $konfig->profil_website; ?></p>
							</div>

							<div class="sidebar-widget follow mb-5 text-center">
								
								
							</div>

							<div class="sidebar-widget mb-5 ">
								<h4 class="text-center widget-title">Recent Posts</h4>
								<?php foreach ($rest_post as $value) {?>
								<div class="media border-bottom py-3 sidebar-post-item">
                                    <a href="<?= base_url('home/artikel/'.$value['slug']) ?>"><img class="mr-4" src="<?= base_url('assets/upload/konten/' . $value['foto']); ?>" alt=""></a>
                                    <div class="media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm"><?= $value['tanggal'] ?></span>
                                        <h4><a href="<?= base_url('home/artikel/'.$value['slug']) ?>"><?= $value['judul'] ?></a></h4>
                                    </div>
                                </div>
								<?php }?>
							</div>


							<div class="sidebar-widget category mb-5">
								<h4 class="text-center widget-title">Categories</h4>
								<ul class="list-unstyled">
								<?php foreach ($kategori as $kate){ ?>
									<li class="align-items-center d-flex justify-content-between">
									<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
									<?= $kate['nama_kategori'] ?></a></li>
									</li>
									<?php } ?>
									
								</ul>
							</div>

							<div class="sidebar-widget sidebar-adv mb-5">
								<a href="#"><img src="images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-2 section-padding gray-bg pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="widget footer-widget mb-5 mb-lg-0">
						<h5 class="widget-title text-uppercase letter-spacing-2 "><?= $konfig->judul_website; ?></h5>
						<p class=""><?= $konfig->profil_website; ?></p>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="widget footer-widget">
					<h4 class="text-center widget-title">Follow Me</h4>
						<div class="follow-socials">
							<a href="<?= $konfig->facebook; ?>"><i class="ti-facebook"></i></a>
							<a href="<?= $konfig->email; ?>"><i class="ti-email"></i></a>
							<a href="<?= $konfig->instagram; ?>"><i class="ti-instagram"></i></a>
							<a href="#"><i class="ti-youtube"></i></a>
							<a href="#"><i class="ti-pinterest"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-item">
						<h4 class="mb-4">Social Gallery</h4>
						<div class="row">
							<?php $no=1; foreach ($galeri as $gl) { ?>
							<div class="col-lg-3 m-1">
								<img src="<?= base_url('assets/upload/galeri/'.$gl['foto']) ?>" class="img-fluid rounded-circle " alt="">
							</div>
							<?php $no++; } ?>
							</div>
					</div>
				</div>
			</div>

			<div class="footer-btm mt-5 pt-4 border-top">
				<div class="row">
					<div class="col-lg-12">
						<ul class="list-inline footer-socials-2 text-center ">
							<li class="list-inline-item"><a href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate){ ?>
							<li class="list-inline-item">
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
									<?= $kate['nama_kategori'] ?>
								</a>
								</li>
                            <?php } ?>
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="copyright text-center ">
							@ <a " href=" https://themewagon.com"><?= $konfig->judul_website; ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- THEME JAVASCRIPT FILES
================================================== -->
	<!-- initialize jQuery Library -->
	<script src="<?= base_url('assets/front/'); ?>plugins/jquery/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script src="<?= base_url('assets/front/'); ?>plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>plugins/bootstrap/js/popper.min.js"></script>
	<!-- Owl caeousel -->
	<script src="<?= base_url('assets/front/'); ?>plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>plugins/slick-carousel/slick.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>plugins/magnific-popup/magnific-popup.js"></script>
	<!-- Instagram Feed Js -->
	<script src="<?= base_url('assets/front/'); ?>plugins/instafeed-js/instafeed.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="<?= base_url('assets/front/'); ?>plugins/google-map/gmap.js"></script>
	<!-- main js -->
	<script src="js/custom.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>