@extends('layout.mobile')
@section('title')
	<title>Về chúng tôi - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-about.css') }}">
@endsection('css')
@section('content')
	<div class="container">
		<div class="crub">
			<div class="flex">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> </a> <a href="#">Về chúng tôi</a></h5>
				</div>
			</div>
		</div>
	</div>
@endsection('content')