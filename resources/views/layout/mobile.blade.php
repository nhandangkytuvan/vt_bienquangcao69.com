<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="phongkhamnamkhang.net">
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
			<div class="flex flex1 justify-content-between">
				<div class="flex flex1col1">
					<div class="flex2col1">
						<h2><a href="{{ url('/') }}"><img src="{{ asset('public/images/mobile/logo.png') }}" class="center-block"></a></h2>
					</div>
					<div class="flex flex2col2">
						<div class="box-center">
							<h3 class="text-uppercase">phòng khám chuyên khoa nam khang</h3>
							<h4 class="text-uppercase">số 193C1 bà triệu - hai bà trưng - hà nội</h4>
						</div>
					</div>
				</div>
				<div class="flex flex1col2">
					<div class="flex4col1">
						<h4><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile/icon-0.png') }}" class="center-block img-responsive"></a></h5>
					</div>
					<div class="flex flex4col2">
						<div class="box-center">
							<h6><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bác sĩ đang trực tuyến</a></h5>
							<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase">Tư vấn ngay</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="banner container">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/mobile/slide-1.png') }}" alt="" class="center-block img-responsive">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
				autoplaySpeed: 5000,
			});
		</script>
	</div>
	@yield('content')	
	<footer>
		<div class="container">
			<p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a> - <a href="tel:0439.656.999">0439.656.999</a></p>
			<p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a></p>
			<p>Địa chỉ phòng khám: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
		</div>
		@yield('toolbar')	
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	<div id="my_popup">
	    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
	    <p class="dis-none">Sẽ nhanh hơn khi bạn trò chuyện với bác sĩ tư vấn</p>
	    <a class="my_popup_close btn-cancel">Từ chối</a>
	    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="btn-agree">Đồng ý</a>
	</div>
</body>
</html>