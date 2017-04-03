@extends('layout.desktop')
@section('title')
	<title>Tìm kiếm - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
@endsection('keyword')
@section('css')
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<main class="container term">
</main>
@endsection('content')