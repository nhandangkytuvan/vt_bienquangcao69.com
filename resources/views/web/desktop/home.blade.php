@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<main class="container home">
		<div class="post-sps">
			<div class="flex flex1 flex-wrap-wrap">
				@foreach($data['posts_sp'] as $post)
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
					<h3 class="post-avatar">
						<a href="{{ MyAPI::getUrlPostObj($post) }}" class="hvr-float-shadow">
							@if($post->post_avatar)
							<img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive">
							@endif
						</a>
					</h3>
					<h4 class="text-center text-uppercase post-price">{{ $post->postSP ? number_format ($post->postSP->post_price,0,',','.') : '' }} VNĐ</h4>
				</div>
				@endforeach
			</div>
		</div>
		<div class="post-news">
			<h3 class="text-uppercase dis-inline-block">Tin tức - Sự kiện</h3>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					@if($data['posts_new'][0])
					<h3><a href="{{ MyAPI::getUrlPostObj($data['posts_new'][0]) }}"><img src="{{ asset('public/img/'.$data['posts_new'][0]->post_avatar) }}" class="center-block img-responsive"></a></h3>
					<h3 class="text-uppercase"><a href="{{ MyAPI::getUrlPostObj($data['posts_new'][0]) }}">{{ $data['posts_new'][0]->post_name }}</a></h3>
					<p class="text-justify">
						{{ MyAPI::getLimitWord($data['posts_new'][0]->post_description,40) }}...
					</p>
					@php unset($data['posts_new'][0]); @endphp
					@endif
				</div>
				<div class="flex1col2">
					@foreach($data['posts_new'] as $post)
					<div>
						<h3><i class="fa fa-angle-double-right"></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
						<p>
							{{ MyAPI::getLimitWord($post->post_description,20) }}...
						</p>
					</div>
					@endforeach
				</div>
				<div class="flex1col3">
					<video width="100%" height="275px" controls loop>
					  	<source src="{{ $links[2]->link_url }}" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</main>
@endsection('content')