<!DOCTYPE html>
<html lang="zxx">


<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--====== Title ======-->
	<title> Oxygéne dz</title>

	<!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--====== Flaticon css ======-->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!--====== Slick Css ======-->
	<link rel="stylesheet" href="assets/css/slick.min.css" />
	<!--====== Lity Css ======-->
	<link rel="stylesheet" href="assets/css/lity.min.css" />
	<!--====== Main css ======-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--====== Responsive css ======-->
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== Preloader ======-->
	<div id="preloader">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>

	<!--====== Header Start ======-->
	<header class="site-header sticky-header transparent-header topbar-transparent">
		<div class="header-topbar d-none d-sm-block">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<ul class="contact-info">
							<li><a href="#"><i class="far fa-envelope"></i> <span class="__cf_email__" data-cfemail="6c1f191c1c031e182c0b010d0500420f0301">[email&#160;protected]</span></a></li>
							<li><a href="#"><i class="far fa-map-marker-alt"></i> Alger , Algérie</a></li>
						</ul>
					</div>
					<div class="col-auto d-none d-md-block">
						<ul class="social-icons">
														<li><a href="https://www.instagram.com/shareoxy/"><i class="fab fa-instagram"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar-inner">
					<div class="site-logo">
						<a href="/"><img src="logo.png" alt="Funden"></a>
					</div>
					<div class="nav-menu">
						<ul>
							<li class="current">
								<a href="">Accueil</a>
								
							</li>
													</ul>
					</div>
					<div class="navbar-extra d-flex align-items-center">
						<a href="Ajouter" class="main-btn nav-btn d-none d-sm-inline-block">
							Ajouter un concentrateur  <i class="far fa-arrow-right"></i>
						</a>
						<a href="#" class="nav-toggler">
                            <span></span>
                        </a>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-menu-panel">
			<div class="panel-logo">
				<a href=""><img src="logo.png" alt="Funden"></a>
			</div>
			<ul class="panel-menu">
				<li class="current">
					<a href="">Accueil</a>
					
				</li>
				
			</ul>
			<div class="panel-extra">
				<a href="/Add" class="main-btn btn-white">
					Ajouter un concentrateur  <i class="far fa-arrow-right"></i>
				</a>
			</div>
			<a href="#" class="panel-close">
				<i class="fal fa-times"></i>
			</a>
		</div>
	</header>
	<!--====== Header End ======-->

	<!--====== Hero Area Start ======-->
	<section class="hero-area-one">
		<div class="hero-text">
				<div class="containern">
					<div class="row">
						  <div class="col-lg-12">
						  	<form  method="POST" action="/search">
						  		@csrf
                                        <div class="form-field mb-25">
                                            <h1 style="padding-bottom: 20px;" for="subject">Rechercher un concentrateur d'oxygène : </h1>
    <input name="query" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                                                        <button type="submit" class="btn btn-lg btn-success">Rechercher</button>
                                                                                  </form>
                                    </div>
					</div>
				</div>
					<section style="margin-top: 42px;" class="project-section section-gap-extra-bottom primary-soft-bg">
		<div class="container">
            <div class="row project-items justify-content-center project-style-one">
		
				@isset($list)
				  @foreach($list as $oxy)

			
                <div class="col-lg-4 col-md-6 col-sm-10">
					<div class="project-item mb-30">
						<div class="thumb" style="background-image: url(oxy2.png);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">{{ $oxy->wilaya }}</a>
							</div>
							<div class="author">
								<img src="profile.png" alt="Thumb">
								<a href="#">{{ $oxy->name }}</a>
							</div>
							<h5 >
								<a class="value-title" style="text-align: left;font-weight: 300;">{{ $oxy->detail }}</a>
							</h5>
							<div class="project-stats">
								<div style="margin-top: 15px;" class="stats-value">
									<span class="value-title">disponibilité </span>
									<span class="stats-percentage">Disponible	</span>
								</div>
								<div class="stats-bar" data-value="85">
									<div class="bar-line" style="width: 85%;"></div>
								</div>
							</div>
							<span class="date"><i class="fas fa-phone"></i> {{ $oxy->phone	}}</span>
						</div>
					</div>
				</div>

				  @endforeach

 
        <!-- sah -->
           
				@else 

				@endisset
    
			</div>
		</div>
	</section>	 

			<div class="hero-shapes">
				<div class="hero-line-one">
					<img src="assets/img/hero/hero-line.png" alt="Line">
				</div>
				<div class="hero-line-two">
					<img src="assets/img/hero/hero-line-2.png" alt="Line">
				</div>
				<div class="dot-one"></div>
				<div class="dot-two"></div>
			</div>
		</div>
		<div class="hero-images">
			<div alt="Image" style="width: 410px;"class="hero-img image-small fancy-bottom wow fadeInLeft" data-wow-delay="0.6s">
				<img src="oxy.png" alt="Image">
			</div>
			<div class="hero-img main-img wow fadeInUp" data-wow-delay="0.5s">
				<img src="share.png" alt="Image">
			</div>
			<div style="width: 410px;" class="hero-img image-small fancy-top wow fadeInRight" data-wow-delay="0.7s">
				<img src="ox.jpg" alt="Image">
			</div>
		</div>
	</section>
	<!--====== Hero Area End ======-->


	

	

	<!--====== Footer Start ======-->
	<footer style="margin-top: 25px;" class="site-footer">
		<div class="footer-content-area">
			<div class="container">
		
				<div class="copyright-area">
					<div class="row flex-md-row-reverse">
						<div class="col-md-6">
							<ul class="social-icons">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<p class="copyright-text">© 2021 <a href="/">Oxygéne Algerie </a>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer End ======-->

	<!--====== jquery js ======-->
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!--====== Inview js ======-->
	<script src="assets/js/jquery.inview.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Lity js ======-->
	<script src="assets/js/lity.min.js"></script>
	<!--====== Wow js ======-->
	<script src="assets/js/wow.min.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script type="text/javascript">
		$("#jetsky").validate();

	</script>
</body>


</html>