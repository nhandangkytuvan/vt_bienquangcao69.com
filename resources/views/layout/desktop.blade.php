<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="bienquangcao69.com">
    <meta property="og:site_name" content="bienquangcao69.com">
    <meta property="og:type" content="website">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	@yield('js')
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
</head>
<body>
    <header>
		<h2><a href="#"><img src="{{ asset('public/images/desktop/header-1.png') }}" class="center-block img-responsive"></a></h2>
	    <menu>
			<div class="container">
				<div class="flex flex1 justify-content-around">
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ url('/') }}" class="flex align-items-center justify-content-center">Trang chủ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlPostID(11) }}" class="flex align-items-center justify-content-center">Giới thiệu</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center menu-items">
						<div class="pos-relative">
							<h3><a href="{{ MyAPI::getUrlTermID(1) }}" class="flex align-items-center justify-content-center">Sản phẩm</a></h3>
							<div class="menu-item pos-absolute">
								<ul>
									@php $product_childs = $product->children @endphp
									@foreach($product_childs as $product_child)
									<li><h3><a href="{{ MyAPI::getUrlTermID($product_child->id) }}">{{ $product_child->term_name }}</a></h3></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlTermID(13) }}" class="flex align-items-center justify-content-center">Công trình mới</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlPostID(12) }}" class="flex align-items-center justify-content-center">Liên hệ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlTermID(14) }}" class="flex align-items-center justify-content-center">Tuyển dụng</a></h3>
					</div>
				</div>
			</div>
		</menu>
		<div class="danhmuc container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3 class="text-center title1">Danh mục</h3>
					<div>
						<ul>
							@foreach($product_childs as $product_child)
							<li><h4><i class="fa fa-angle-double-right"></i> <a href="{{ MyAPI::getUrlTermID($product_child->id) }}">{{ $product_child->term_name }}</a></h4></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="flex1col2">
					<div class="search">
						<form action="{{ url('search') }}">
							<div class="flex">
								<div class="col1">
									
								</div>
								<div class="col2">
									<input type="text" placeholder="Từ khóa..." name="keyword">
								</div>
								<div class="col3">
									<button type="submit">Tìm kiếm</button>
								</div>
							</div>
						</form>
					</div>
					<div class="myslide">
						<div>
							<img src="{{ asset('public/images/desktop/home-1.png') }}" class="center-block">
						</div>
						<div>
							<img src="{{ asset('public/images/desktop/home-1.png') }}" class="center-block">
						</div>
					</div>
					<script>
						$('.myslide').slick({
						  	slidesToShow: 1,
						  	slidesToScroll: 1,
						  	autoplay: true,
						  	autoplaySpeed: 2000,
						  	dots: true,
						});	
					</script>
				</div>
				<div class="flex1col3">
					<h3 class="text-center title1">Tư vấn - hỗ trợ</h3>
					<div class="phone">
						<div class="flex flex2 justify-content-between">
							<div class="flex2col1 flex justify-content-center align-items-center">
								<h3><a href="tel:09 232 99998"><i></i></a></h3>
							</div>
							<div class="flex2col2 flex align-items-center">
								<div>
									<h3><a href="tel:09 232 99998">09 232 99998</a></h3>
									<h3><a href="tel:09 112 88886">09 112 88886</a></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="email">
						<div class="flex flex2 justify-content-between">
							<div class="flex2col1 flex justify-content-center align-items-center">
								<h3><a href="mailto:bienquangcao69@gmail.com"><i></i></a></h3>
							</div>
							<div class="flex2col2 flex align-items-center">
								<div>
									<h3><a href="mailto:bienquangcao69@gmail.com">bienquangcao69<br>@gmail.com</a></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="skype">
						<div class="flex flex2 justify-content-between">
							<div class="flex2col1 flex justify-content-center align-items-center">
								<h3><a href="skype:bienquangcao69"><i></i></a></h3>
							</div>
							<div class="flex2col2 flex align-items-center">
								<div>
									<h3><a href="skype:bienquangcao69">bienquangcao69</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	@yield('content')
	<footer>
		<div class="container">
			<div class="khach-hang">
				<h3 class="text-uppercase text-center">Khách hàng - Đối tác</h3>
				<div class="flex flex1 justify-content-between">
					<div>
						<img src="{{ asset('public/images/desktop/home-4.png') }}" class="center-block img-responsive">
					</div>
				</div>
			</div>
			<menu>
				<div class="flex flex1 justify-content-around">
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ url('/') }}" class="flex align-items-center justify-content-center">Trang chủ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ url('about') }}" class="flex align-items-center justify-content-center">Giới thiệu</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlTermID(1) }}" class="flex align-items-center justify-content-center">Sản phẩm</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlTermID(13) }}" class="flex align-items-center justify-content-center">Công trình mới</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ url('address') }}" class="flex align-items-center justify-content-center">Liên hệ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="{{ MyAPI::getUrlTermID(14) }}" class="flex align-items-center justify-content-center">Tuyển dụng</a></h3></div>
					</div>
				</div>
			</menu>
			<div class="footer">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex align-items-center justify-content-center">
						<h2><a href="#"><img src="{{ asset('public/images/desktop/footer-1.png') }}" class="center-block img-responsive"></a></h2>
					</div>
					<div class="flex1col2">
						<h2 class="text-uppercase">DOANH NGHIỆP TRUYỀN THÔNG VÀ ĐẦU TƯ </h2>
						<h2 class="text-uppercase">QUẢNG CÁO 69</h2>
						<p>Điện thoại hỗ trợ: 09 232 99998 - 09 112 88886 </p>
						<p>Email hỗ trợ: bienquangcao69@gmail.com</p>
						<p>Trụ sở: 336 đường bưởi  </p>
						<p>Xưởng SX: 70/122 Tây Mỗ - Từ Liêm - Hà Nội</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-status">
			
		</div>
	</footer>
</body>
</html>
