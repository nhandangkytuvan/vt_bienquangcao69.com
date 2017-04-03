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
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/imagehover/css/imagehover.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-hoiphuc.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('content')
<div class="banner">
	<div class="container">
		<div class="search">
			<div class="clearfix">
				<div class="pull-left">
					<a href="{{ url('/') }}"><i class="fa fa-home"></i> Trang chủ ></a>
					<a href="{{ MyAPI::getUrlTerm($data['term']->id) }}">{{ $data['term']->term_name }}</a>
				</div>
				<div class="pull-right">
					<form action="{{ url('/search') }}">
						{{ csrf_field() }}
						<button><i class="fa fa-search"></i></button>
						<input type="text" placeholder="Nhập nội dung" name="keyword">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="container term hoiphuc">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['term']->term_name }}</h1>
			<div class="flex flex1 justify-content-between flex-wrap-wrap">
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-1.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Đoàn  29 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Viêm tuyến tiền liệt</h5>
							      		<h5><span>Triệu chứng: </span>Tiểu nhiều, tiểu rắt, tiểu không hết</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(13) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(13) }}">Viêm tuyến tiền liệt</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-2.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Quân 29 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Viêm quy đầu</h5>
							      		<h5><span>Triệu chứng: </span>Lột da bao quy đầu, có mùi hôi</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(18) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(18) }}">Viêm quy đầu</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-3.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Đạt  38 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Tiểu ra máu</h5>
							      		<h5><span>Triệu chứng: </span>Thường xuyên tiểu nhiều tiểu rắt, còn có cảm giác đau nhói, thậm chí xuất hiện tiểu ra máu</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(20) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(20) }}">Tiểu ra máu</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-4.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Tuấn  29 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Xuất tinh sớm</h5>
							      		<h5><span>Triệu chứng: </span>Xuất tinh quá nhanh (5 phút), xuất tinh vô lực</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(17) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(17) }}">Xuất tinh sớm</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-5.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Trưởng  31 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Liệt dương</h5>
							      		<h5><span>Triệu chứng: </span>Dương vật cương cứng kém, mệt mỏi sau quan hệ</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(21) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(21) }}">Liệt dương</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-6.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Phong  34 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Sùi mào gà</h5>
							      		<h5><span>Triệu chứng: </span>Có các u nhú hình súp lơ kích thước như hạt đậu ở quy đầu trong thời gian dài</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(15) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(15) }}">Sùi mào gà</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-7.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Toàn 38 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Mụn rộp sinh dục</h5>
							      		<h5><span>Triệu chứng: </span>Có mụn nước trên cơ quan sinh dục, kèm hiện tượng đau đầu</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(16) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(16) }}">Mụn rộp sinh dục</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-8.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Lâm 33 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Yếu tinh trùng</h5>
							      		<h5><span>Triệu chứng: </span>Yếu tinh trùng, giãn tĩnh mạch thừng tinh</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(14) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(14) }}">Vô sinh nam</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-9.png') }}" class="center-block"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Vũ   28 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span> Dài bao quy đầu, hẹp bao quy đầu</h5>
							      		<h5><span>Triệu chứng: </span>Dài bao quy đầu, viêm quy đầu, làm bạn gái mắc viêm phụ khoa</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPost(19) }}"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPost(19) }}">Dài bao quy đầu</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')