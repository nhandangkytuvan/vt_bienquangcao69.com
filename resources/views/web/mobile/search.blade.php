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
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
@endsection('css')
@section('content')
	<div class="container">
		<div class="menu">
			<div class="flex flex-wrap-wrap justify-content-center">
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg1"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="{{ url('/ve-chung-toi') }}">Giới thiệu phòng khám</a></h3>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg2"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn bác sĩ</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg3"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="{{ MyAPI::getUrlTerm(32) }}">Liệu pháp uy tín</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg4"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="{{ MyAPI::getUrlTerm(34) }}">Bệnh án điển hình</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg5"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn nhanh</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg6"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="{{ url('/dia-chi-phong-kham') }}">Chỉ đường</a></h5>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="crub">
			<div class="flex">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> tìm kiếm - {{ Request::input('keyword') }}</a></h5>
				</div>
			</div>
		</div>
		<div class="posts">
			@foreach($data['posts'] as $post)
			<div class="post">
				@php 
					if(Request::input('keyword')){
						$post_name = str_ireplace(Request::input('keyword'),'<i>'.Request::input('keyword').'</i>',$post->post_name);
					}else{
						$post_name = $post->post_name;
					}
				@endphp
				<h4><a href="{{ MyAPI::getUrlPost($post->id) }}"><i class="fa fa-plus-square"></i> {!! $post_name !!}</a></h4>
				<p class="text-justify">
					{{ MyAPI::limitWord($post->post_description,32) }} ... <a href="{{ MyAPI::getUrlPost($post->id) }}">Chi tiết</a>
				</p>
			</div>
			@endforeach
		</div>
		<div class="my_pagination">
			{{ $data['posts']->appends(request()->except('page'))->links() }}
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="flex flex2 justify-content-between">
			<div class="flex2col1 flex justify-content-around">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="tel:18006181"><i class="bg bg1"></i></a></h3>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<h4 class="text-center"><a href="tel:18006181">Điện thoại tư vấn</a></h4>
				</div>
			</div>
			<div class="flex2col1 flex justify-content-around">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
				</div>
			</div>
			<div class="flex2col1 flex justify-content-around">
				<div class="flex3col1 flex align-items-center justify-content-center">
					<h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
				</div>
				<div class="flex3col2 flex align-items-center justify-content-center">
					<h4 class="text-center"><a href="#top">Lên đầu trang</a></h4>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')