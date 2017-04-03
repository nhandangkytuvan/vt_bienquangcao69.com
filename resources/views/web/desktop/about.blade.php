@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-about.css') }}">
@endsection('css')
@section('content')
	<main class="about container">
		<div class="flex justify-content-between">
			<div class="flex1col1">
				<div class="post">
					<h3 class="text-center text-uppercase post-name">Biển quảng cáo ALU Gắn chữ nổi</h3>
					<h3 class="post-avatar">
						<a href=""><img src="{{ asset('public/images/desktop/home-2.png') }}" class="center-block img-responsive"></a>
					</h3>
					<h4 class="text-center post-price">450.000VNĐ/M2</h4>
				</div>
				<div class="post">
					<h3 class="text-center text-uppercase post-name">Biển quảng cáo bạt Hillex</h3>
					<h3 class="post-avatar">
						<a href=""><img src="{{ asset('public/images/desktop/home-3.png') }}" class="center-block img-responsive"></a>
					</h3>
					<h4 class="text-center post-price">450.000VNĐ/M2</h4>
				</div>
				<div class="post">
					<h3 class="text-center text-uppercase post-name">Biển quảng cáo ALU Gắn chữ nổi</h3>
					<h3 class="post-avatar">
						<a href=""><img src="{{ asset('public/images/desktop/home-2.png') }}" class="center-block img-responsive"></a>
					</h3>
					<h4 class="text-center post-price">450.000VNĐ/M2</h4>
				</div>
				<div class="post">
					<h3 class="text-center text-uppercase post-name">Biển quảng cáo ALU Gắn chữ nổi</h3>
					<h3 class="post-avatar">
						<a href=""><img src="{{ asset('public/images/desktop/home-3.png') }}" class="center-block img-responsive"></a>
					</h3>
					<h4 class="text-center post-price">450.000VNĐ/M2</h4>
				</div>
				<div class="post">
					<h3 class="text-center text-uppercase post-name">Biển quảng cáo ALU Gắn chữ nổi</h3>
					<h3 class="post-avatar">
						<a href=""><img src="{{ asset('public/images/desktop/home-2.png') }}" class="center-block img-responsive"></a>
					</h3>
					<h4 class="text-center post-price">450.000VNĐ/M2</h4>
				</div>
			</div>
			<div class="flex1col2">
				<div>
					<p>
						DOANH NGHIỆP Truyền thông và Đầu tư Mũi Tên Vàng, tên giao dịch GAGVIETNAM được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu. Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. Một số lĩnh vực thế mạnh của GAGVIETNAM:
					</p>
				</div>
				<div>
					<h4>1. Làm biển quảng cáo:</h4>
					<p>- Làm biển quảng cáo bạt hiflex</p>
					<p>- Làm biển quảng cáo Alu (aluminium - alcorest)</p>
					<p>- Làm biển quảng cáo hộp đèn</p>
					<p>- Làm biển quảng cáo chữ nổi mica, đồng, Inox...</p>
					<p>- Tranh tường khổ lớn, Tranh kính, Tranh điện theo yêu cầu.</p>
					<p>- Treo phướn trên địa bàn Hà Nội</p>
					<p>- Làm biển quảng cáo led sign</p>
				</div>
				<div>
					<h4>2. Thiết kế</h4>
					<p>- Thiết kế gian hàng triễn lãm, trung tâm thương mại và showroom</p>
					<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng cáo truyền thông, Các ấn phẩm phục vụ sự kiện, Quảng cáo truyền thông: Banner, Poster, standee…...)</p>
					<p>- Đồ họa động trong truyền hình (Clip quảng cáo sản phẩm, giới thiệu về công ty, biên tập nội dung clip sự kiện)</p>
				</div>
				<div>
					<h4>3. Các hoạt động về in ấn</h4>
					<p>- In HIFI khổ lớn trên các chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa ….. (có cán keo 2 mặt).</p>
					<p>-  In Offset: Namecard, tờ thư, phong bì, kẹp file, tài liệu quảng cáo, tờ rơi, catalog, sách, tạp chí …</p>
					<p>- In Name card siêu tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời…</p>
				</div>
				<div>
					<p>Hãy liên hệ ngay với chúng tôi để được tư vấn và phục vụ tận nơi. GAGVIETNAM cam kết  về chất lượng sản phẩm với một mức giá cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng cáo sản phẩm và dịch vụ của khách hàng.</p>
				</div>
				<div>
					<p>Rất mong nhận được sự quan tâm và hợp tác của  quý vị!</p>
				</div>
				<div><p>Trân trọng!</p></div>
				<div>
					<h3>CÔNG TY TNHH TRUYỀN THÔNG VÀ ĐẦU TƯ MŨI TÊN VÀNG</h3>
					<p>Điện thoại hỗ trợ: 091.787.5995/ 0462.948.759 - Fax: 04.6686 0351</p>
					<p>Email hỗ trợ: sale@muitenvang.vn - dzung.tq@muitenvang.vn</p>
					<p>Trụ sở: 17/435 Hồng Hà, Phúc Tân, Hoàn Kiếm, Hà Nội</p>
					<p>Xưởng SX: 70/68 Ngọc Thụy, Long Biên, Hà Nội</p>
				</div>
			</div>
		</div>
	</main>
@endsection('content')