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
					<h5><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> </a> <a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a></h5>
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
								<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
							</h4>
						</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="post-comments" id="post-comments">
				<div class="tabs-button-1">
					<div class="comment-web active"><h4><i class="fa fa-question-circle"></i> Hỏi - Đáp</h4></div>
					<div class="comment-facebook"><h4><i class="fa fa-facebook-official"></i> Facebook comment</h4></div>
				</div>
				<div class="tabs-content-1">
					<div class="active">
						<div class="send-question">
							<form action="{{ url('web/comment/create/'.$data['post']->id) }}">
								<div class="text-question">
									<textarea name="comment_detail" placeholder="Bạn cần hỏi gì..." required></textarea>
								</div>
								<div class="button-submit">
									<button type="submit">Gửi câu hỏi</button>
								</div>
							</form>
						</div>
						@php 
							$comments = $data['post']->comment()->where('comment_status',1)->limit(6)->get();
						@endphp
						@if(count($comments))
						<div class="lists-comment">
							<ul>
								@foreach($comments as $comment)
								<li>
									<div class="ask-question">
										<h5 class="comment-name">Khách</h5>
										<p class="comment-detail">{!! $comment->comment_detail !!}</p>
									</div>
									@php 
										$comment_reply = $comment->children()->first();
									@endphp
									@if($comment_reply)
									<div class="ans-question arrow_box">
										<h5 class="comment-name">quangcao69</h5>
										<p class="comment-detail">{{ $comment_reply->comment_detail }}</p>
									</div>
									@endif
								</li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
					<div>
						<div class="lists-facebook">
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
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')