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
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<main class="container home">
		<div class="post-sps">
			<div class="flex flex1 flex-wrap-wrap">
				@foreach($data['posts_sp'] as $post)
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
					<h3 class="post-avatar"><a href="{{ MyAPI::getUrlPostObj($post) }}" class="hvr-float-shadow"><img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive"></a></h3>
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.399613054525!2d105.74439961548623!3d21.016690686004868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134537d5284fa77%3A0x1a7bc8a0647e5846!2zNzAgVMOieSBN4buXLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1491270430116" width="339" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</main>
@endsection('content')