@extends('layout.desktop')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
@if($data['post']->post_avatar)
<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
@else
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
@endif
<meta id="metaDescription" name="description" content="{{ $data['post']->post_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['post']->post_keyword }}">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-slidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<main class="container posts">
	<div class="flex flex1 justify-content-between">
		<div class="flex1col1">
			@include('web.desktop.slidebar')
		</div>
		<div class="flex1col2">
			<h1 class="text-uppercase">{{ $data['post']->post_name }}</h1>
			<div class="post-description">
				{{ $data['post']->post_description }}
			</div>
			<div class="post-detail">
				{!! $data['post']->post_detail !!}
			</div>
			<div class="post-footer">
				<div>
					<h3>CÔNG TY TNHH TRUYỀN THÔNG VÀ ĐẦU TƯ MŨI TÊN VÀNG</h3>
					<p>Điện thoại hỗ trợ: 091.787.5995/ 0462.948.759 - Fax: 04.6686 0351</p>
					<p>Email hỗ trợ: sale@muitenvang.vn - dzung.tq@muitenvang.vn</p>
					<p>Trụ sở: 17/435 Hồng Hà, Phúc Tân, Hoàn Kiếm, Hà Nội</p>
					<p>Xưởng SX: 70/68 Ngọc Thụy, Long Biên, Hà Nội</p>
				</div>
			</div>
			<div>
				<!-- Load Facebook SDK for JavaScript -->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<!-- Your embedded comments code -->
				<div class="fb-comment-embed"
				   data-href="https://www.facebook.com/zuck/posts/10102735452532991?comment_id=1070233703036185"
				   data-width="auto"></div>
			</div>
			@php  
				$term = $data['post']->term;
				$posts = $term->post()->where('id','<>',$data['post']->id)->limit(6)->get();
			@endphp
			@if(count($posts))
			<div class="post-related">
				<h3>Xem thêm</h3>
				<div class="flex justify-content-between flex2">
					<div class="flex2col1">
						<ul>
							@foreach($posts as $key => $post)
							<li>
								<h5>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a>
								</h5>
							</li>
							@php 
								unset($posts[$key]);
								if($key==2) break;
							@endphp
							@endforeach
						</ul>
					</div>
					<div class="flex2col1">
						<ul>
							@foreach($posts as $key => $post)
							<li>
								<h5>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a>
								</h5>
							</li>
							@php unset($posts[$key]) @endphp
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</main>
@endsection('content')