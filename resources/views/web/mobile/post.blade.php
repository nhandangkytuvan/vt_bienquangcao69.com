@extends('layout.mobile')
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
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-post.css') }}">
@endsection('css')
@php $term = $data['post']->term; @endphp
@section('content')
	<main class="container post">
		<div class="crub">
			<div class="flex">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> </a> <a href="{{ MyAPI::getUrlTerm($term->id) }}">{{ $term->term_name }}</a></h5>
				</div>
			</div>
		</div>
		<div class="post-view">
			<h1 class="post-name">{{ $data['post']->post_name }}</h1>
			<p class="post-description">
				{{ $data['post']->post_description }}
			</p>
			<div class="post-detail">
				{!! $data['post']->post_detail !!}
			</div>
			@php 
				$posts = $term->post()->where('id','<>',$data['post']->id)->limit(6)->get();
			@endphp
			@if(count($posts))
			<div class="post-footer">
				<h3>Tin khác</h3>
				<ul>
					@foreach($posts as $post)
						<li>
							<h4>
								<i class="fa fa-angle-double-right"></i>
								<a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a>
							</h4>
						</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</main>
@endsection('content')