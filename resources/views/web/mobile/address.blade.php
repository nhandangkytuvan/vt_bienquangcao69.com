@extends('layout.mobile')
@section('title')
	<title>Địa chỉ phòng khám - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-address.css') }}">
@endsection('css')
@section('content')
	<div class="container">
		
	</div>
@endsection('content')