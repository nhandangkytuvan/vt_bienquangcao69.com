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
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-slidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-new.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<main class="container news">
	<div class="flex justify-content-between">
		<div class="flex1col1">
			@include('web.desktop.slidebar')
		</div>
		<div class="flex1col2">
			<h3 class="text-center text-uppercase">{{ $data['term']->term_name }}</h3>
			<div class="posts">
				@php $posts = $data['term']->post()->paginate(8); @endphp
				@foreach($posts as $post)
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href="{{ MyAPI::getUrlPostObj($post) }}"><img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
							<p class="text-justify">
								{{ $post->post_description }}
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="my_pagination">
				{{ $posts->links() }}
			</div>
		</div>
	</div>
</main>
@endsection('content')