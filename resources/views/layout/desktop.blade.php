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
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/toastr8/dist/css/toastr8.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/toastr8/dist/js/toastr8.min.js') }}"></script>
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
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Trang chủ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Giới thiệu</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Sản phẩm</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Công trình mới</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Liên hệ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Tuyển dụng</a></h3></div>
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
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Biển quảng cáo hộp đèn</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Biển quảng cáo bạt hiflex</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Biển quảng cáo chữ nổi đồng</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Inox</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">BIỂN LED</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Biển quảng cáo Công ty</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Biển quảng cáo cửa hàng</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Biển alu gắn chữ nổi</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Treo phướn (băng rôn)</a></h4></li>
							<li><h4><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="">Gian hàng hội chợ, triển lãm</a></h4></li>
						</ul>
					</div>
				</div>
				<div class="flex1col2">
					<div></div>
					<div>
						<img src="{{ asset('public/images/desktop/home-1.png') }}" class="center-block img-responsive">
					</div>
				</div>
				<div class="flex1col3">
					<h3 class="text-center title1">Tư vấn trực tuyến</h3>
					<div>
						<ul class="phone">
							<li><h4><i class=""></i><a href="">09 232 99998</a></h4></li>
							<li><h4><i class=""></i><a href="">09 112 88886</a></h4></li>
							<li><h4><i class=""></i><a href="">012 02 888886</a></h4></li>
						</ul>
						<ul class="mail">
							<li><h4><i class=""></i><a href="">bienquangcao69@gmail.com</a></h4></li>
							<li><h4><i class=""></i><a href="">bienquangcao69</a></h4></li>
						</ul>
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
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
					<div class="flex1col1">
						<h4><i></i></h4>
					</div>
				</div>
			</div>
			<menu>
				<div class="flex flex1 justify-content-around">
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Trang chủ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Giới thiệu</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Sản phẩm</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Công trình mới</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Liên hệ</a></h3></div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-center">
						<div><h3><a href="#" class="flex align-items-center justify-content-center">Tuyển dụng</a></h3></div>
					</div>
				</div>
			</menu>
			<div class="footer">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex align-items-center justify-content-center">
						<h2><a href="#"><img src="{{ asset('public/images/desktop/footer-1.png') }}" class="center-block img-responsive"></a></h2>
					</div>
					<div class="flex1col2">
						<h2 class="text-uppercase">DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ </h2>
						<h2 class="text-uppercase">QUANG CAO 69</h2>
						<p>Điện thoại hỗ trợ: 09 232 99998 - 09 112 88886 </p>
						<p>Email hỗ trợ: bienquangcao69@gmail.com</p>
						<p>Trụ sở: 336 duong buoi  </p>
						<p>Xưởng SX: 70/122 Tay Mo - Tu Liem - Ha Noi</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-status">
			
		</div>
	</footer>
</body>
</html>
