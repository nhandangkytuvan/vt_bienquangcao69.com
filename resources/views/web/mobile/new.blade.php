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
		<h3>{{ $data['term']->term_name }}</h3>
		<div class="posts-new">
			@php
				$posts = $data['term']->post()->latest()->paginate(8);
			@endphp
			@foreach($posts as $post)
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-avatar">
								<a href="{{ MyAPI::getUrlPostObj($post) }}">
									<img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive">
								</a>
							</h3>
						</div>
					</div>
					<div class="flex1col2 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-name"><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
							<p class="post-description">
								{{ MyAPI::getLimitWord($post->post_description,30) }}...
							</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</main>
@endsection('content')