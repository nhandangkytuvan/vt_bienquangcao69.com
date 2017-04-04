<div class="slidebar">
	@foreach($posts_sidebar as $post)
	<div class="post">
		<h3 class="text-center text-uppercase post-name">{{ $post->post_name }}</h3>
		<h3 class="post-avatar">
			<a href="{{ MyAPI::getUrlPost($post->id) }}"><img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive"></a>
		</h3>
		<h4 class="text-center post-price">{{ number_format($post->postSP->post_price,0,',','.') }} VNĐ</h4>
	</div>
	@endforeach
</div>