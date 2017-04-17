<!-- meta -->
@if($data['post']->post_description)
	<meta name="description" content="{{ $data['post']->post_description }}">
@else
	<meta name="description" content="{{ $setting->web_description }}">
@endif

@if($data['post']->post_keyword)
	<meta name="keywords" content="{{ $data['post']->post_keyword }}">
@else
	<meta name="keywords" content="{{ $setting->web_keyword }}">
@endif
<!-- facebook -->
@if($data['post']->post_avatar)
	<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
@else
	<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
@endif
	<meta property="og:url" content="{{ MyAPI::getUrlPostObj($data['post']) }}" />
	<meta property="og:title" content="{{ $data['post']->post_name }}" />
	<meta property="og:description" content="{{ $data['post']->post_description }}" />
@if($data['post']->post_avatar)
	<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
	<meta name="twitter:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}" />
@else
	<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
	<meta name="twitter:image" content="{{ asset('public/img/'.$setting->web_logo) }}" />
@endif
	<!-- twiter -->
	<meta name="twitter:card" content="Bệnh viện" />
	<meta name="twitter:title" content="{{ $data['post']->post_name }}" />
	<meta name="twitter:description" content="{{ $data['post']->post_description }}" />