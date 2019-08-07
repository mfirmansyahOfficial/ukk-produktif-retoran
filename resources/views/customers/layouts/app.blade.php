<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Plaza - eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="customers/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('customers/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('customers/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('customers/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('customers/css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('customers/css/animate.css') }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
                {{ config('app.name', 'Laravel') }}
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="{{ url('/') }}" class="mr-5 text-white">Menu</a>
				<a href="{{ route('customers.cart') }}" class="card-bag"><img src="{{ asset('customers/img/icons/bag.png')}}" alt=""><span id="jumlahCart">{{ session()->get('cart') ? count(session()->get('cart')) : '0' }}</span></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				{{-- <li><a href="{{ url('/') }}">Menus</a></li> --}}
			</ul>
		</div>
	</header>
	<!-- Header section end -->

	{{-- <!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> / 
				<a href="">Sales</a> / 
				<a href="">Bags</a> / 
				<span>Shoulder bag</span>
			</div>
			<img src="customers/img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end --> --}}


	<!-- Page -->
	<div class="page-area product-page spad py-4">
		<div class="container">
            @yield('content')
			{{-- <div class="row">
				<div class="col-lg-6">
					<figure>
						<img class="product-big-img" src="customers/img/product/1.jpg" alt="">
					</figure>
				</div>
				<div class="col-lg-6">
					<div class="product-content">
						<h2>Black Shoulder bag</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore- mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
						<div class="my-4 mb-5">
                                <div class="d-inline bg-light p-3 py-4">
                                    <span>Qty :</span>
                                    <select class="rounded-0 border-0 bg-light py-3 pl-4 text-right">
                                        @for ($i = 1; $i < 25; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
						</div>
						<a href="#" class="site-btn btn-line">ADD TO CART</a>
					</div>
				</div>
			</div>
			<div class="product-details">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Description</a>
							</li>
						</ul>
						<div class="tab-content">
							<!-- single tab content -->
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			{{-- <div class="text-center rp-title">
				<h5>Related products</h5>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="product-item">
						<figure>
							<img src="customers/img/products/1.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="customers/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="customers/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Long red Shirt</h6>
							<p>$39.90</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-item">
						<figure>
							<img src="customers/img/products/2.jpg" alt="">
							<div class="bache">NEW</div>
							<div class="pi-meta">
                                <div class="container">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque nisi alias suscipit tenetur velit. Eum voluptate corporis nulla amet ab vero, dignissimos maiores debitis et eos! Numquam cupiditate at, dolorum itaque dolore dicta nemo consequuntur adipisci porro quibusdam culpa nulla voluptas earum quisquam excepturi enim assumenda corporis illum quam perferendis.
                                </div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Hype grey shirt</h6>
							<p>$19.50</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-item">
						<figure>
							<img src="customers/img/products/3.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="customers/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="customers/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>long sleeve jacket</h6>
							<p>$59.90</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-item">
						<figure>
							<img src="customers/img/products/4.jpg" alt="">
							<div class="bache sale">SALE</div>
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="customers/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="customers/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Denim men shirt</h6>
							<p>$32.20 <span>RRP 64.40</span></p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div> 
	<!-- Page end -->


	{{-- <!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="customers/img/logo.png" class="footer-logo" alt="">
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<div class="cards">
							<img src="customers/img/cards/5.png" alt="">
							<img src="customers/img/cards/4.png" alt="">
							<img src="customers/img/cards/3.png" alt="">
							<img src="customers/img/cards/2.png" alt="">
							<img src="customers/img/cards/1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">usefull Links</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Sitemap</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Shipping & returns</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Track Orders</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contact</h6>
						<div class="text-box">
							<p>Your Company Ltd </p>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
							<p>+53 345 7953 32453</p>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->	 --}}


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('customers/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('customers/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('customers/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('customers/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('customers/js/sly.min.js') }}"></script>
	<script src="{{ asset('customers/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('customers/js/main.js') }}"></script>
    @yield('script')
    </body>
</html>