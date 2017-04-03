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
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-kythuat.css') }}">
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
					<a href="{{ MyAPI::getUrlTerm($data['term']->id) }}">{{ $data['term']->term_name }}</a>
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
			<h1 class="text-uppercase"><i></i> {{ $data['term']->term_name }}</h1>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3>
						<a href="{{ MyAPI::getUrlTerm($data['term']->id) }}">
							@if($data['term']->term_avatar)
								<img src="{{ asset('public/img/'.$data['term']->term_avatar) }}" class="center-block">
							@else
								<img src="{{ asset('public/images/desktop/term-3.png') }}" class="center-block">
							@endif
						</a>
					</h3>
				</div>
				<div class="flex1col2">
					<h4>Bài xem nhiều</h4>
					<ul>
						@php 
							$stt = 0;
							$posts = $data['term']->post();
							$posts = $posts->join('view', 'post.id', '=', 'view.post_id');
							$posts = $posts->latest('view_sum');
							$posts = $posts->select('post.*')->limit(5)->get();
						@endphp
						@foreach($posts as $post)
						@php $stt++ @endphp
						<li>
							<h5>
								<a href="{{ MyAPI::getUrlPost($post->id) }}">
									<i {!! $stt >= 4 ? 'class="active"' : '' !!} >{{ $stt }}</i>
									{{ $post->post_name }}
								</a>
							</h5>
						</li>
						@endforeach
					</ul>
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></div>
						<div class="flex2col1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia giải đáp</a></div>
						<div class="flex2col1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hẹn khám qua mạng</a></div>
					</div>
				</div>
			</div>
			<div class="posts">
				@php 
					$posts = $data['term']->post()->paginate(7);
				@endphp
				@foreach($posts as $post)
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							<h3><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></h3>
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
				{{ $posts->links() }}
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')