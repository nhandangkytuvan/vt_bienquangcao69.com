<div class="slidebar">
	@if(count($posts_sidebar))
	<h3 class="arrow_box">Sản phẩm gần đây</h3>
	@foreach($posts_sidebar as $post)
	<div class="post">
		<h3 class="text-center text-uppercase post-name">{{ $post->post_name }}</h3>
		<h3 class="post-avatar">
			<a href="{{ MyAPI::getUrlPostObj($post) }}"><img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive"></a>
		</h3>
		<h4 class="text-center post-price">{{ $post->postSP ? number_format($post->postSP->post_price,0,',','.') : '' }} VNĐ</h4>
	</div>
	@endforeach
	@endif
	@if(isset($data['post']))
		@php  
			$term = $data['post']->term;
			$posts_lienquan = $term->post()->where('id','<>',$data['post']->id)->limit(4)->get();
		@endphp
		@if(count($posts_lienquan))
		<h3 class="arrow_box">Sản phẩm liên quan</h3>
		@foreach($posts_lienquan as $post)
		<div class="post">
			<h3 class="text-center text-uppercase post-name">{{ $post->post_name }}</h3>
			<h3 class="post-avatar">
				<a href="{{ MyAPI::getUrlPostObj($post) }}"><img src="{{ asset('public/img/'.$post->post_avatar) }}" class="center-block img-responsive"></a>
			</h3>
			<h4 class="text-center post-price">{{ $post->postSP ? number_format($post->postSP->post_price,0,',','.') : '' }} VNĐ</h4>
		</div>
		@endforeach
		@endif
	@endif
</div>