	<!-- meta -->
	<meta name="keywords" content="{{ $setting->web_keyword }}">
	<!-- facebook -->
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:title" content="{{ $setting->web_name }}" />
	<meta property="og:description" content="{{ $setting->web_description }}" />
	<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
	<!-- twiter -->
	<meta name="twitter:card" content="Bệnh viện" />
	<meta name="twitter:description" content="{{ $setting->web_description }}" />
	<meta name="twitter:title" content="{{ $setting->web_name }}" />
	<meta name="twitter:image" content="{{ asset('public/img/'.$setting->web_logo) }}" />