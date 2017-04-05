@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-address.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
	<!-- <main class="container address">
		<div class="flex flex1 justify-content-between">
			<div class="flex1col1">
				<h1 class="text-center text-uppercase">Quảng cáo 69</h1>
				<h2><img src="{{ asset('public/images/global/logo.jpg') }}" class="center-block"></h2>
			</div>
			<div class="flex1col2">
				<h3>Chuyên</h3>
				<p>
					In phun khổ lớn - Biển ốp mặt ALu
					chữ đồng inox - mika - alu - đề can
				</p>
				<p>
					Biển led điện tử - Ma trận - Led Hắt Âm - Led Hắt mặt
				</p>
				<p>
					Nhận:Thiết kế catalog.web.car, in danh thiếp, thiếp cưới, phong bì, hoá đơn
					bằng khen, giấy khen, tờ rơi, card visit.
				</p>
			</div>
			<div class="flex1col3">
				<p>"Cơ sở 1": 336 đường bưởi - Hà Nội</p>
				<p>"Cơ sở 2": 938 đường láng - Hà Nội</p>
			</div>
			<div class="flex1col4">
				<p>Điện thoại: <br>09 232 99998 <br>09 112 88886</p>
				<p>Email. bienquangcao69@gmail.com</p>
			</div>
		</div>
		<h3>" Sự hài lòng của bạn là niềm hạnh phúc của chúng tôi "</h3>
	</main> -->
@endsection('content')