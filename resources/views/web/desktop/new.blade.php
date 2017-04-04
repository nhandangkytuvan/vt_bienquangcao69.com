@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-slidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-new.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<main class="container news">
	<div class="flex justify-content-between">
		<div class="flex1col1">
			@include('web.desktop.slidebar')
		</div>
		<div class="flex1col2">
			<h3 class="text-center text-uppercase">Tin tức</h3>
			<div class="posts">
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href=""><img src="{{ asset('public/images/desktop/new-1.jpg') }}" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="">Chon mica mau trang , hay mica mau den . su lua chon thong minh</a></h3>
							<p class="text-justify">
								Làm biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn ...
							</p>
						</div>
					</div>
				</div>
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href=""><img src="{{ asset('public/images/desktop/new-1.jpg') }}" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="">Chon mica mau trang , hay mica mau den . su lua chon thong minh</a></h3>
							<p class="text-justify">
								Làm biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn ...
							</p>
						</div>
					</div>
				</div>
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href=""><img src="{{ asset('public/images/desktop/new-1.jpg') }}" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="">Chon mica mau trang , hay mica mau den . su lua chon thong minh</a></h3>
							<p class="text-justify">
								Làm biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn ...
							</p>
						</div>
					</div>
				</div>
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href=""><img src="{{ asset('public/images/desktop/new-1.jpg') }}" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="">Chon mica mau trang , hay mica mau den . su lua chon thong minh</a></h3>
							<p class="text-justify">
								Làm biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn ...
							</p>
						</div>
					</div>
				</div>
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href=""><img src="{{ asset('public/images/desktop/new-1.jpg') }}" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="">Chon mica mau trang , hay mica mau den . su lua chon thong minh</a></h3>
							<p class="text-justify">
								Làm biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn biển quảng cáo mica luôn là sự lựa chọn ...
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection('content')