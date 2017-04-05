@extends('layout.mobile')
@section('title')
    <title>Tìm kiếm - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting->web_logo }}">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-new.css') }}">
@endsection('css')
@section('content')
	<main class="container new">
		<div class="crub">
			<div class="flex">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> tìm kiếm - {{ Request::input('keyword') }}</a></h5>
				</div>
			</div>
		</div>
		<h3>{{ $data['term']->term_name }}</h3>
		<div class="posts-new">
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-avatar">
								<a href="#">
									<img src="{{ asset('public/images/mobile/new-1.jpg') }}" class="center-block img-responsive">
								</a>
							</h3>
						</div>
					</div>
					<div class="flex1col2 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-name"><a href="#">Làm biển quảng cáo tăng ưu thế cạnh tranh</a></h3>
							<p class="post-description">
								Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với ...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-avatar">
								<a href="#">
									<img src="{{ asset('public/images/mobile/new-1.jpg') }}" class="center-block img-responsive">
								</a>
							</h3>
						</div>
					</div>
					<div class="flex1col2 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-name"><a href="#">Làm biển quảng cáo tăng ưu thế cạnh tranh</a></h3>
							<p class="post-description">
								Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với ...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-avatar">
								<a href="#">
									<img src="{{ asset('public/images/mobile/new-1.jpg') }}" class="center-block img-responsive">
								</a>
							</h3>
						</div>
					</div>
					<div class="flex1col2 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-name"><a href="#">Làm biển quảng cáo tăng ưu thế cạnh tranh</a></h3>
							<p class="post-description">
								Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với ...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-avatar">
								<a href="#">
									<img src="{{ asset('public/images/mobile/new-1.jpg') }}" class="center-block img-responsive">
								</a>
							</h3>
						</div>
					</div>
					<div class="flex1col2 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-name"><a href="#">Làm biển quảng cáo tăng ưu thế cạnh tranh</a></h3>
							<p class="post-description">
								Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với ...
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="post-middle">
				<ul>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
					<li><h4><i class="fa fa-angle-double-right"></i><a href="">Lorem ipsum dolor sit amet, consectetur.</a></h4></li>
				</ul>
			</div> -->
		</div>
	</main>
@endsection('content')