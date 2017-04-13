<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="bienquangcao69.com">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
</head>
<body>
	<header>
		<div class="container">
			<h2><img src="{{ asset('public/images/mobile/header-1.png') }}" class="img-responsive center-block"></h2>
		</div>
	</header>
	<menu>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="{{ MyAPI::getUrlPostID(11) }}">Giới thiệu</a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(1) }}" class="menu-sp_open">Sản phẩm</a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="#" class="menu-item_open">Danh mục</a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="#" class="menu-tuvan_open">Tư vấn</a></h3>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')	
	<footer>
		<menu>
			<div class="container">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex align-items-center justify-content-center">
						<h3 class="text-center"><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></h3>
					</div>
					<div class="flex1col2 flex align-items-center justify-content-center">
						<h3 class="text-center"><a href="{{ MyAPI::getUrlPostID(11) }}">Giới thiệu</a></h3>
					</div>
					<div class="flex1col2 flex align-items-center justify-content-center">
						<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(1) }}" class="menu-sp_open">Sản phẩm</a></h3>
					</div>
					<div class="flex1col2 flex align-items-center justify-content-center">
						<h3 class="text-center"><a href="#" class="menu-item_open">Danh mục</a></h3>
					</div>
					<div class="flex1col2 flex align-items-center justify-content-center">
						<h3 class="text-center"><a href="#" class="menu-tuvan_open">Tư vấn</a></h3>
					</div>
				</div>
			</div>
		</menu>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex justify-content-center align-items-center">
					<h2><a href="#"><img src="{{ asset('public/images/mobile/footer-1.png') }}" class="center-block img-responsive"></a></h2>
				</div>
				<div class="flex1col2 flex justify-content-center align-items-center">
					<div>
						<h2 class="text-uppercase">DOANH NGHIỆP TRUYỀN THÔNG VÀ ĐẦU TƯ </h2>
						<h2 class="text-uppercase">QUẢNG CÁO 69</h2>
						<h5>Điện thoại hỗ trợ: 
							<a href="tel:09 232 99998" class="dis-inline-block">09 232 99998</a> - 
							<a href="tel:09 232 99998" class="dis-inline-block">09 232 99998</a>
						</h5>
						<h5>Email hỗ trợ: bienquangcao69@gmail.com</h5>
						<h5>Trụ sở: 336 đường bưởi  </h5>
						<h5>Xưởng SX: 70/122 Tây Mỗ - Từ Liêm - Hà Nội</h5>
					</div>
				</div>
			</div>
		</div>	
		<div class="footer-status"></div>
	</footer>
	<div id="menu-sp" class="mypopup-menu">
		<h3 class="text-center title1">Danh mục</h3>
		<div>
			<ul>
				@php $product_childs = $product->children @endphp
				@foreach($product_childs as $product_child)
				<li><h4><i class="fa fa-angle-double-right"></i> <a href="{{ MyAPI::getUrlTermID($product_child->id) }}">{{ $product_child->term_name }}</a></h4></li>
				@endforeach
			</ul>
		</div>
	</div>
	<div id="menu-item" class="mypopup-menu">
		<h3 class="text-center title1">Danh mục</h3>
		<div>
			<ul>
				<li>
					<h4>
						<i class="fa fa-angle-double-right"></i> 
						<a href="{{ MyAPI::getUrlTermID(13) }}">Công trình mới</a>
					</h4>
				</li>
				<li>
					<h4>
						<i class="fa fa-angle-double-right"></i> 
						<a href="{{ MyAPI::getUrlTermID(12) }}">Tin tức - Sự kiện</a>
					</h4>
				<li>
					<h4>
						<i class="fa fa-angle-double-right"></i> 
						<a href="{{ MyAPI::getUrlTermID(14) }}">Tuyển dụng</a>
					</h4>
				<li>
					<h4>
						<i class="fa fa-angle-double-right"></i> 
						<a href="{{ MyAPI::getUrlPostID(12) }}">Liên hệ</a>
					</h4>
				</li>
			</ul>
		</div>
	</div>
	<div id="menu-tuvan">
		<h3 class="text-center title1">Tư vấn - hỗ trợ</h3>
		<div class="phone">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex justify-content-center align-items-center">
					<h3><a href="tel:09 232 99998"><i></i></a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<div>
						<h3><a href="tel:09 232 99998">09 232 99998</a></h3>
						<h3><a href="tel:09 112 88886">09 112 88886</a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="email">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex justify-content-center align-items-center">
					<h3><a href="mailto:bienquangcao69@gmail.com"><i></i></a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<div>
						<h3><a href="mailto:bienquangcao69@gmail.com">bienquangcao69<br>@gmail.com</a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="skype">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex justify-content-center align-items-center">
					<h3><a href="skype:bienquangcao69"><i></i></a></h3>
				</div>
				<div class="flex1col2 flex align-items-center justify-content-center">
					<div>
						<h3><a href="skype:bienquangcao69">bienquangcao69</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>