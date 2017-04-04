@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-product.css') }}">
@endsection('css')
@section('content')
	<main class="container product">
		<h3 class="text-uppercase text-center">{{ $data['term']->term_name }}</h3>
		<div class="post-sps">
			<div class="flex flex1 flex-wrap-wrap justify-content-between">
				@php $posts = $data['term']->post; @endphp
				@foreach($posts as $post)
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></h3>
					<h3 class="post-avatar"><a href="{{ MyAPI::getUrlPost($post->id) }}"><img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive"></a></h3>
					<h4 class="text-center text-uppercase post-price">{{ $post->postSP->post_price }} VNĐ</h4>
				</div>
				@endforeach
			</div>
		</div>
		<div class="my_pagination">
			<ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li class="active"><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			</ul>
		</div>
	</main>
@endsection('content')