@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
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
			<div class="flex flex1 flex-wrap-wrap">
				@if($data['term']->children()->count())
					@php
						$term_childrens = $data['term']->children()->pluck('id')->toArray();
						$posts = App\Post::whereIn('term_id',$term_childrens)->latest()->paginate(8);
					@endphp
				@else
					@php $posts = $data['term']->post()->latest()->paginate(8); @endphp
				@endif
				@foreach($posts as $post)
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
					<h3 class="post-avatar">
						<a href="{{ MyAPI::getUrlPostObj($post) }}" class="hvr-float-shadow">
						@if($post->post_avatar)
						<img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive">
						@endif
						</a>
					</h3>
					<h4 class="text-center text-uppercase post-price">{{ $post->postSP ? number_format($post->postSP->post_price,0,',','.') : '' }} VNĐ</h4>
				</div>
				@endforeach
			</div>
		</div>
		<div class="my_pagination">
			{{ $posts->links() }}
		</div>
	</main>
@endsection('content')