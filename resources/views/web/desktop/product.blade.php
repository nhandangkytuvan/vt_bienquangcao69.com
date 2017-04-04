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
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-product.css') }}">
@endsection('css')
@section('content')
	<main class="container product">
		<h3 class="text-uppercase text-center">{{ $data['term']->term_name }}</h3>
		<div class="post-sps">
			<div class="flex flex1 flex-wrap-wrap justify-content-between">
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="">Biển quảng cáo cửa hàng</a></h3>
					<h3 class="post-avatar"><a href="" class="hvr-float-shadow"><img src="{{ asset('public/images/desktop/sp-1.png') }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">350.000 VNĐ</h4>
				</div>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="">Biển quảng cáo cửa hàng</a></h3>
					<h3 class="post-avatar"><a href="" class="hvr-float-shadow"><img src="{{ asset('public/images/desktop/sp-2.png') }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">350.000 VNĐ</h4>
				</div>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="">Biển quảng cáo cửa hàng</a></h3>
					<h3 class="post-avatar"><a href="" class="hvr-float-shadow"><img src="{{ asset('public/images/desktop/sp-3.png') }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">350.000 VNĐ</h4>
				</div>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="">Biển quảng cáo cửa hàng</a></h3>
					<h3 class="post-avatar"><a href="" class="hvr-float-shadow"><img src="{{ asset('public/images/desktop/sp-4.png') }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">350.000 VNĐ</h4>
				</div>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="">Biển quảng cáo cửa hàng</a></h3>
					<h3 class="post-avatar"><a href="" class="hvr-float-shadow"><img src="{{ asset('public/images/desktop/sp-5.png') }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">350.000 VNĐ</h4>
				</div>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="">Biển quảng cáo cửa hàng</a></h3>
					<h3 class="post-avatar"><a href="" class="hvr-float-shadow"><img src="{{ asset('public/images/desktop/sp-6.png') }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">350.000 VNĐ</h4>
				</div>
				<div class="flex1col1">
				</div>
				<div class="flex1col1">
				</div>
			</div>
		</div>
	</main>
@endsection('content')