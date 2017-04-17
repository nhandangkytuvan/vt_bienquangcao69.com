@extends('layout.mobile')
@section('title')
    <title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
@endsection('css')
@section('content')
	<main class="container home">
		<h3>Sản phẩm gần đây</h3>
		<div class="posts-sp">
			@if($data['posts_sp'][0])
			<div class="post-top">
				<h3 class="post-avatar">
					<a href="{{ MyAPI::getUrlPostObj($data['posts_sp'][0]) }}">
						<img src="{{ asset('public/img/'.$data['posts_sp'][0]->post_avatar) }}" class="img-responsive center-block">
					</a>
				</h3>
				<h3 class="post-name"><a href="{{ MyAPI::getUrlPostObj($data['posts_sp'][0]) }}">{{ $data['posts_sp'][0]->post_name }}</a></h3>
				<p class="text-justify post-description">
					{{ MyAPI::getLimitWord($data['posts_sp'][0]->post_description,22) }}
				</p>
			</div>
			@php unset($data['posts_sp'][0]); @endphp
			@endif
			<div class="post-middle">
				<div class="flex flex1 flex-wrap-wrap">
					@foreach($data['posts_sp'] as $post)
					<div class="flex1col1">
						<h3>
							<a href="{{ MyAPI::getUrlPostObj($post) }}">
								<img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive">
							</a>
						</h3>
						<h4><a href="">{{ $post->post_name }}</a></h4>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<h3>Tin tức - Sự kiện</h3>
		<div class="posts-new">
			@if($data['posts_new'][0])
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<h3 class="post-avatar">
							<a href="{{ MyAPI::getUrlPostObj($data['posts_new'][0]) }}">
								<img src="{{ asset('public/img/'.$data['posts_new'][0]->post_avatar) }}" class="center-block img-responsive">
							</a>
						</h3>
					</div>
					<div class="flex1col2">
						<h3 class="post-name"><a href="{{ MyAPI::getUrlPostObj($data['posts_new'][0]) }}">{{ $data['posts_new'][0]->post_name }}</a></h3>
						<p class="post-description">{{ MyAPI::getLimitWord($data['posts_new'][0]->post_description,30) }}...</p>
					</div>
				</div>
			</div>
			@php unset($data['posts_new'][0]); @endphp
			@endif
			<div class="post-middle">
				<ul>
					@foreach($data['posts_new'] as $post)
					<li>
						<h4>
							<i class="fa fa-angle-double-right"></i>
							<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
						</h4>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<h3>Video nổi bật</h3>
		<div class="video">
			<div class="post-top">
				<video width="100%" height="275px" controls loop>
				  	<source src="{{ $links[2]->link_url }}" type="video/mp4">
				</video>
			</div>
		</div>
	</main>
@endsection('content')