@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting->web_logo }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-product.css') }}">
@endsection('css')
@section('content')
	<main class="container product">
		<h3>{{ $data['term']->term_name }}</h3>
		@php
			$posts = $data['term']->post()->paginate(9);
		@endphp
		<div class="posts-sp">
			@if($posts[0])
			<div class="post-top">
				<h3 class="post-avatar">
					<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">
						<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" class="img-responsive center-block">
					</a>
				</h3>
				<h3 class="post-name"><a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a></h3>
				<p class="text-justify post-description">
					{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}...
				</p>
			</div>
			@php unset($posts[0]) @endphp
			@endif
			<div class="post-middle">
				<div class="flex flex1 flex-wrap-wrap justify-content-around">
					@foreach($posts as $post)
					<div class="flex1col1">
						<h3>
							<a href="{{ MyAPI::getUrlPostObj($post) }}">
								<img src="{{ asset('public/img/'.$post->id) }}" class="center-block img-responsive">
							</a>
						</h3>
						<h4>
							<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
						</h4>
					</div>
					@endforeach
				</div>
			</div>
			<div class="my_pagination">
				{{ $posts->links() }}
			</div>
		</div>
	</main>
@endsection('content')