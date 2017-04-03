@extends('layout.desktop')
@section('title')
	<title>Tìm kiếm - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-search.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('content')
<div class="banner">
	<div class="container">
		<div class="search">
			<div class="clearfix">
				<div class="pull-left">
					<a href="{{ url('/') }}"><i class="fa fa-home"></i> Trang chủ ></a>
					<a href="#">Tìm kiếm - {{ Request::input('keyword') }}</a>
				</div>
				<div class="pull-right">
					<form action="{{ url('/search') }}">
						{{ csrf_field() }}
						<button><i class="fa fa-search"></i></button>
						<input type="text" placeholder="Nhập nội dung" name="keyword">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="container term">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="">tìm thấy : {{ $data['posts']->total() }}</h1>
			<div class="meo-nho">
				<h5><span>Mẹo nhỏ:</span> Việc tìm kiếm sẽ trở lên nhanh hơn khi bạn trò chuyện trực tiếp với bác sĩ tư vấn !</h5>
			</div>
			<div class="posts">
				@foreach($data['posts'] as $post)
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							@php 
								if(Request::input('keyword')){
									$post_name = str_ireplace(Request::input('keyword'),'<i>'.Request::input('keyword').'</i>',$post->post_name);
								}else{
									$post_name = $post->post_name;
								}
							@endphp
							<h3><a href="{{ MyAPI::getUrlPost($post->id) }}">{!! $post_name !!}</a></h3>
						</div>	
					</div>
					<p>
						{{ MyAPI::limitWord($post->post_description,50) }}
						<a href="{{ MyAPI::getUrlPost($post->id) }}">Chi tiết</a>
					</p>
				</div>
				@endforeach
			</div>
			<div class="my_pagination">
				{{ $data['posts']->appends(request()->except('page'))->links() }}
			</div>
		</div>
		<div class="flex0col2">
			<div class="row2">
				<div class="flex flex2 justify-content-between">
					<div class="flex1col1">
						<h5 class="text-center"><a href=""><i class="bg bg1"></i></a></h5>
						<h5 class="text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn<br>trực tuyến</a>
						</h5>
					</div>
					<div class="flex1col1">
						<h5 class="text-center"><a href=""><i class="bg bg2"></i></a></h5>
						<h5 class="text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bác sĩ<br>giải đáp</a>
						</h5>
					</div>
					<div class="flex1col1">
						<h5 class="text-center"><a href=""><i class="bg bg3"></i></a></h5>
						<h5 class="text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hẹn khám<br>qua mạng</a>
						</h5>
					</div>
				</div>
			</div>
			<div class="row3">
				<div class="bg bg1">
					<p>Đường dây nóng sức khỏe</p>
					<h3><a href="tel:1800 - 6181">1800 - 6181</a></h3>
				</div>
				<div class="bg bg2">
					<p>Địa chỉ phòng khám</p>
					<h4><a href="{{ url('/dia-chi-phong-kham') }}">Số 193c1 Bà Triệu, Hai Bà Trưng Hà Nội</a></h4>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection('content')