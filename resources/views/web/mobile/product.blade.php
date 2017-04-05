@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting->web_logo }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-product.css') }}">
@endsection('css')
@section('content')
	<main class="container product">
		<h3>{{ $data['term']->term_name }}</h3>
		<div class="posts-sp">
			<div class="post-top">
				<h3 class="post-avatar"><a href="#"><img src="{{ asset('public/images/mobile/home-1.png') }}" class="img-responsive center-block"></a></h3>
				<h3 class="post-name"><a href="">SP-Biển quảng cáo cửa hiệu</a></h3>
				<p class="text-justify post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo laborum libero rem hic, sint, rerum facilis qui ad maiores ab quia autem.</p>
			</div>
			<div class="post-middle">
				<div class="flex flex1 flex-wrap-wrap justify-content-around">
					<div class="flex1col1">
						<h3><a href="#"><img src="{{ asset('public/images/mobile/sp-1.png') }}" class="center-block img-responsive"></a></h3>
						<h4><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4>
					</div>
					<div class="flex1col1">
						<h3><a href="#"><img src="{{ asset('public/images/mobile/sp-2.png') }}" class="center-block img-responsive"></a></h3>
						<h4><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4>
					</div>
					<div class="flex1col1">
						<h3><a href="#"><img src="{{ asset('public/images/mobile/sp-3.png') }}" class="center-block img-responsive"></a></h3>
						<h4><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4>
					</div>
					<div class="flex1col1">
						<h3><a href="#"><img src="{{ asset('public/images/mobile/sp-4.png') }}" class="center-block img-responsive"></a></h3>
						<h4><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4>
					</div>
					<div class="flex1col1">
						<h3><a href="#"><img src="{{ asset('public/images/mobile/sp-5.png') }}" class="center-block img-responsive"></a></h3>
						<h4><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4>
					</div>
					<div class="flex1col1">
						<h3><a href="#"><img src="{{ asset('public/images/mobile/sp-6.png') }}" class="center-block img-responsive"></a></h3>
						<h4><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')