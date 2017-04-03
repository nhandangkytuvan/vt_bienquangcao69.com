<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="phongkhamnamkhang.net">
    <meta property="og:site_name" content="phongkhamnamkhang.net">
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
	<script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/swt.js') }}"></script>
</head>
<body>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="text-container-center">
						<div>
							<div class="bg"></div>
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/images/desktop/header-1.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-container-center">
						<img src="{{ asset('public/images/desktop/header-2.png') }}" alt="">
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-container-center">
						<a href="tel:1800 6181">
							<img src="{{ asset('public/images/desktop/header-3.png') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 chidanbenh flex align-items-center justify-content-center">
					<div>
						<h3><a href="#"  class="text-container-center">Danh mục bệnh</a></h3>
						<div class="menu-items">
							<div>
								<h4 class="bg bg1">Bệnh về tuyến tiền liệt</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(3) }}">Viêm tuyến tiền liệt</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(4) }}">U nang tuyến tiền liệt</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(5) }}">Tăng sinh tuyến tiền liệt</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(6) }}">Phì đại tuyến tiền liệt</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg2">Rối loạn chức năng sinh dục</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(8) }}">Liệt dương</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(35) }}">Yếu sinh lý</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(10) }}">Xuất tinh sớm</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(9) }}">Rối loạn cương dương</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg3">Chỉnh hình cơ quan sinh dục</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(13) }}">Dài bao quy đầu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(14) }}">Kéo dài dương vật</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(15) }}">Thủ thuật hẹp bao quy đầu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(16) }}">Tăng kích thước dương vật</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg4">Viêm nhiễm hệ thống sinh dục</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(18) }}">Viêm quy đầu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(19) }}">Viêm bàng quang</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(20) }}">Viêm niệu đạo</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(21) }}">Viêm tinh hoàn</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg5">Vô sinh nam</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(23) }}">Tinh trùng ít</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(24) }}">Xuất tinh ra máu</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(25) }}">Vô tinh</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(26) }}">Tinh trùng yếu</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg6">Bệnh xã hội</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(28) }}">Sùi mào gà</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(29) }}">Giang mai</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTerm(30) }}">Bệnh lậu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTerm(31) }}">Mụn rộp sinh dục</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ url('/') }}" class="text-container-center hvr-underline-reveal">Trang chủ</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ MyAPI::getUrlTerm(32) }}" class="text-container-center hvr-underline-reveal" >Kỹ thuật<br>điều trị</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ MyAPI::getUrlTerm(33) }}" class="text-container-center hvr-underline-reveal">Thiết bị<br>tiên tiến</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ MyAPI::getUrlTerm(34) }}" class="text-container-center hvr-underline-reveal">Bệnh án<br>điển hình</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ url('/dia-chi-phong-kham') }}" class="text-container-center hvr-underline-reveal">Địa chỉ <br>phòng khám</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div>
						<h3>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-container-center hvr-underline-reveal">Đặt hẹn <br>trực tuyến</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><a href="{{ url('/') }}"><img src="{{ asset('public/images/desktop/logo-footer.png') }}" class="center-block"></a></h3>
					<h3 class="text-center text-uppercase"><a href="">Phòng khám chuyên khoa Nam Khang</a></h3>
					<p><a href="{{ url('/dia-chi-phong-kham') }}"><address>Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</address></a></p>
				</div>
				<div class="flex1col2">
					<p>Thời gian làm việc của phòng khám</p>
					<p>( 8:00 -20:00) bao gồm cả ngày lễ tết </p>
					<p>Điện thoại liên hệ :</p>
					<p><a href="tel:1800 - 6181">1800 - 6181</a></p>
					<p><a href="tel:043-9656999">043-9656999</a></p>
				</div>
				<div class="flex1col3">
					<h4 class="text-center text-uppercase">Phòng khám của nam giới</h4>
					<h4 class="text-center text-uppercase">Nam Khang - Hà Nội - Việt Nam</h4>
				</div>
			</div>
		</div>
		<div class="footer-status">
			
		</div>
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
</body>
</html>
