@extends('layout.mobile')
@section('title')
	<title>Về chúng tôi - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-about.css') }}">
@endsection('css')
@section('content')

@endsection('content')