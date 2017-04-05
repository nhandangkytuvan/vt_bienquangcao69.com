@extends('layout.mobile')
@section('title')
    <title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
@endsection('css')
@section('content')
	<main class="container home">
		<h3>Sản phẩm gần đây</h3>
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
		<h3>Tin tức - Sự kiện</h3>
		<div class="posts-new">
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<h3 class="post-avatar"><a href="#"><img src="{{ asset('public/images/mobile/new-1.jpg') }}" class="center-block img-responsive"></a></h3>
					</div>
					<div class="flex1col2">
						<h3 class="post-name"><a href="#">BIỂN QUẢNG CÁO 69.COM</a></h3>
						<p class="post-description">Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với diện tích và phong cách của loại hình sản phẩm bạn sẽ kinh doanh. Bạn cần tìm công...</p>
					</div>
				</div>
			</div>
			<div class="post-middle">
				<ul>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
				</ul>
			</div>
		</div>
	</main>
@endsection('content')