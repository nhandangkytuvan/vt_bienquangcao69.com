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
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/slide-2.png') }}" alt="" class="center-block"></a></div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="container home">
		<div class="search">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h4>Hỗ trợ bệnh nhân</h4>
				</div>
				<div class="flex1col2">
					<form action="{{ url('/search') }}">
						{{ csrf_field() }}
						<input type="text" placeholder="Hãy nhập từ khóa" name="keyword">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
				<div class="flex1col3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
				</div>
				<div class="flex1col4">
					<div>Đã có <span>106322</span> người được hỗ trợ</div>
				</div>
			</div>
		</div>
		<div class="row1">
			<a href="{{ url('/ve-chung-toi') }}">
				<img src="{{ asset('public/images/desktop/home-1.png') }}" class="center-block">
			</a>
		</div>
		<div class="row2">
			<div class="flex1 flex justify-content-between">
				<div class="flex1col1">
					<h1 class="text-center text-uppercase"><a href="{{ url('/ve-chung-toi') }}"><span>về chúng tôi</span><span>/</span><span>about us</span></a></h1>
					<p class="text-justify">
						Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao, vượt qua mô hình truyền thống của ngành y tế Hà Nội, mở ra thời đại mới về khám điều trị bệnh nam khoa đỉnh cao tại Hà Nội, kết hợp với dịch vụ đặc biệt chuyên khoa, chuyên bệnh, chuyên trị, xây dựng thương hiệu chuyên nghiệp về nam khoa trên toàn quốc.
					</p>
					<div class="text-center"><a href="{{ url('/ve-chung-toi') }}" class="hvr-float-shadow">Xem chi tiết</a></div>
				</div>
				<div class="flex1col2">
					<a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/home-2.png') }}" alt=""></a>
				</div>
			</div>
		</div>
		<div class="row3">
			<h2 class="text-center text-uppercase">Hình ảnh nhân viên</h2>
			<h3 class="text-center"><span>Chúng tôi luôn nỗ lực hết mình</span></h3>
			<div class="slick-pk">
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-1.png') }}" class="center-block"></a></div>
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-2.png') }}" class="center-block"></a></div>
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-3.png') }}" class="center-block"></a></div>
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-4.png') }}" class="center-block"></a></div>
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-5.png') }}" class="center-block"></a></div>
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-6.png') }}" class="center-block"></a></div>
				<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/pk-7.png') }}" class="center-block"></a></div>
			</div>
			<script>
				$('.slick-pk').slick({
				  	slidesToShow: 4,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
		</div>
		<div class="row4">
			<div><a href="{{ url('/ve-chung-toi') }}"><img src="{{ asset('public/images/desktop/home-4.png') }}" class="center-block"></a></div>
		</div>
		<div class="row5">
			<div class="groups-btn">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<button class="active"><i class="fa fa-caret-right" aria-hidden="true"></i> Bệnh xã hội</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Rối loạn chức năng<br>sinh dục</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Bệnh về tuyến<br>tiền liệt</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Viêm nhiễm sinh dục</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Vô sinh nam</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Chỉnh hình bộ phận<br>sinh dục</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="flex1 flex justify-content-between">
				<div class="flex1col1">
					<div class="active">
						<img src="{{ asset('public/images/desktop/home-5.png') }}" class="center-block">
					</div>
					<div>
						<img src="{{ asset('public/images/desktop/benh-2.png') }}" class="center-block">
					</div>
					<div>
						<img src="{{ asset('public/images/desktop/benh-3.png') }}" class="center-block">
					</div>
					<div>
						<img src="{{ asset('public/images/desktop/benh-4.png') }}" class="center-block">
					</div>
					<div>
						<img src="{{ asset('public/images/desktop/benh-5.png') }}" class="center-block">
					</div>
					<div>
						<img src="{{ asset('public/images/desktop/benh-6.png') }}" class="center-block">
					</div>
				</div>
				<div class="flex1col2">
					<div class="active">
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Bệnh lây truyền qua đường tình dục là một trong những bệnh điều trị trọng điểm của phòng khám chúng tôi, kết hợp chặt chẽ giữa nghiên cứu khoa học lâm sàng và nghiên cứu giảng dạy, nhập thiết bị y tế và kĩ thuật điều trị tiên tiến trong và ngoài nước, như máy xét nghiệm sinh hóa tự động Abbott Hoa Kỳ, hệ thống kiểm tra DNA vi sinh vật, máy huỳnh quang hóa học miễn dịch, máy ELISA, hình thành mô hình khám chữa bệnh cột sống bằng điều trị xâm lấn tối thiểu đặc biệt, hội tụ nhiều chuyên gia về bệnh lây truyền qua đường tình dục trong và ngoài nước, mang đến cho bệnh nhân dịch vụ hiện đại hóa, chuyên nghiệp hóa, nhân văn hóa.
						</p>
						<div>
							<p>Mở rộng hạng mục điều trị:
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Sùi mào gà</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">lậu</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">giang mang</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">mụn rộp sinh dục</a>
							</p>
						</div>
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
						</div>
					</div>
					<div>
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Trung tâm chẩn đoán điều trị rối loạn chức năng sinh dục của Phòng khám Nam Khang Hà Nội chuyên điều trị các bệnh thường gặp như liệt dương, xuất tinh sớm, rối loạn chức năng cương dương và các bệnh thường gặp khác. Thiết bị kiểm tra chính xác, kĩ thuật điều trị và dịch vụ y tế ưu việt giúp cho nhiều bệnh nhân trong và ngoại tỉnh loại bỏ được những đau đớn do bệnh tật nhiều năm gây ra. Sử dụng kĩ thuật điều trị tiên tiến quốc tế, đồng thời tiến hành khám và điều trị, rút ngắn thời gian điều trị, nâng cao hiệu suất khám và điều trị, hiệu quả nhanh, độ an toàn cao, hiệu quả điều trị tốt và các ưu thế khác.
						</p>
						<div>
							<p>Mở rộng hạng mục điều trị: 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Xuất tinh sớm</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">liệt dương</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">rối loạn cương dương</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">di tinh</a>
							</p>
						</div>
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
						</div>
					</div>
					<div>
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Khoa tuyến tiền liệt chủ yếu điều trị các chứng nan y về tuyến tiền liệt như viêm tuyến tiền liệt, u nang tuyến tiền liệt…Sử dụng kĩ thuật đặc biệt kĩ thuật làm tan can thiệp tuyến tiền liệt, kĩ thuật này chủ yếu dùng điều trị các bệnh về tuyến tiền liệt như viêm tuyến tiền liệt cấp- mãn tính, tăng sinh tuyến tiền liệt, đau tuyến tiền liệt, phì đại tuyến tiền liệt, u nang tuyến tiền liệt…Căn cứ vào số liệu lâm sàng năm 2004 cho thấy: 20 triệu bệnh nhân mắc bệnh về tuyến tiền liệt sau khi được điều trị bằng liệu pháp làm tan can thiệp tuyến tiền liệt đã có 18,51 triệu bệnh nhân hồi phục và không tái phát.
						</p>
						<div>
							<p>Mở rộng hạng mục điều trị: 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm tuyến tiền liệt</a>, 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">u nang tuyến tiền liệt</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">tăng sinh tuyến tiền liệt</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">đau tuyến tiền liệt</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">vôi hóa tuyến tiền liệt</a>
							</p>
						</div>
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow" style="margin-top: 25px;">Tư vấn trực tuyến</a>
						</div>
					</div>
					<div>
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Để nâng cao hiệu quả điều trị và tỷ lệ hồi phục trong điều trị các bệnh viêm nhiễm sinh dục nam giới, phòng khám Nam Khang Hà Nội đã sử dụng hệ thống sóng siêu dẫn CRS, nghiên cứu nâng cấp lên thành “kĩ thuật miễn dịch nhiễm trùng đường niệu CRS”. Kĩ thuật này sử dụng sóng đa dẫn được sinh ra từ hệ thống sóng siêu dẫn nhiễm trùng đường niệu, sóng đa dẫn là tổ hợp hữu cơ sóng viba, hình thành chùm photon mạnh, từ đó tập trung tác dụng tại bề mặt và bên trong tổ chức bệnh, tiêu viêm diệt khuẩn. Có thể đạt được hiệu quả điều trị các chứng viêm nhiễm sinh dục nam giới.
						</p>
						<div>
							<p>Mở rộng hạng mục điều trị: 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm niệu đạo</a>, 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">viêm túi tinh</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">viêm tinh hoàn</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">viêm quy đầu</a>
							</p>
						</div>
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
						</div>
					</div>
					<div>
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp; Vô sinh nam là một trong những hạng mục điều trị trọng điểm của phòng khám Nam Khang Hà Nội, chủ yếu điều trị các bệnh về tinh trùng như chết tinh trùng, ít tinh trùng, yếu tinh trùng….. Các phòng ban hội tụ đội ngũ chuyên gia và đội ngũ y tá về bệnh vô sinh nam trong và ngoài nước, có hơn 10 năm kinh nghiệm lâm sàng, sử dụng liệu pháp khám và điều trị bệnh khoa học, cá thể hóa, với cơ sở nghiên cứu lâm sàng nhiều năm đã xây dựng “liệu pháp đa chiều 4 trong 1”, mang lại niềm vui có con cho nhiều gia đình bệnh nhân mắc vô sinh, trở thành chuyên khoa chữa vô sinh nổi tiếng.
						</p>
						<div>
							<p>Mở rộng hạng mục điều trị: 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chết tinh trùng</a>, 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">ít tinh trùng</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">yếu tinh trùng</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">vô tinh</a>
							</p>
						</div>
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
						</div>
					</div>
					<div>
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Chỉnh hình bộ phận sinh dục là hạng mục điều trị đặc biệt của phòng khám Nam Khang Hà Nội, chủ yếu điều trị cắt bao quy đầu, tăng kích thước, kéo dài dương vật. Đưa vào sử sụng các kĩ thuật tiên tiến trên thế giới như “thủ thuật cắt bao quy đầu xâm lấn tối thiểu Hàn Quốc”, “kĩ thuật kéo dài dương vật định vị CF”….Phòng khám kế thừa tôn chỉ “tất cả vì bệnh nhân”, lấy “an toàn trong khám và điều trị” làm mục đích, có các chuyên gia trong và ngoài nước trực tiếp thăm khám điều trị, mang đến cho bệnh nhân muốn tiến hành chỉnh hình bộ phận sinh dục dịch vụ khám và điều trị chất lượng cao.
						</p>
						<div>
							<p>Mở rộng hạng mục điều trị: 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Dài bao quy đầu</a>, 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">hẹp bao quy đầu</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">tăng độ dài</a>,
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">kích thước dương vật</a>
							</p>
						</div>
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row7">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-6.png') }}" class="center-block"></a></div>
		</div>
		<div class="row8">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3 class="text-center">Đội ngũ chuyên gia nam khoa, người tiên phong <br>về nam khoa trên toàn quốc</h3>
					<p class="text-justify">
						Khám bệnh phải tìm chuyên gia là quan điểm phổ biến của người dân. Khám bệnh nam khoa càng cần các chuyên gia có y thuật cao minh, kinh nghiệm lâm sàng phong phú. Phòng khám Nam Khang Hà Nội đã kiểm tra nghiêm trình độ chuyên môn của các chuyên gia ra nhập đội ngũ bác sỹ, tại đây hội tụ những chuyên gia lâu năm nổi tiếng trong và ngoài nước, kiên trì sử dụng kĩ thuật khám và điều trị trình độ cao phục vụ cho đông đảo bệnh nhân nam giới…<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chi tiết</a>
					</p>
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="text-center"><i class="dis-inline-block bg bg1"></i></div>
							<h4 class="text-center">
								Kinh nghiệm lâm <br>sàng phong phú
							</h4>
						</div>
						<div class="flex2col1">
							<div class="text-center"><i class="dis-inline-block bg bg2"></i></div>
							<h4 class="text-center">
								Nguồn lực kĩ thuật<br>chuyên nghiệp
							</h4>
						</div>
						<div class="flex2col1">
							<div class="text-center"><i class="dis-inline-block bg bg3"></i></div>
							<h4 class="text-center">
								Thành tựu cá nhân<br>xuất sắc
							</h4>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					<img src="{{ asset('public/images/desktop/home-7.png') }}" class="center-block">
				</div>
			</div>
		</div>
		<div class="row9">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-8.png') }}" class="center-block"></a></div>
		</div>
		<div class="row10">
			<h2 class="text-center text-uppercase">10 kĩ thuật điều trị trọng điểm</h2>
			<h3 class="text-center"><span>Điều trị bệnh nam khoa toàn diện hơn</span></h3>
			<div class="slick-kt">
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(9) }}"><img src="{{ asset('public/images/desktop/kt-1.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(9) }}">Kĩ thuật miễn dịch nhiễm trùng tiết niệu CRS</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Viêm quy đầu, viêm niệu đạo, viêm bàng quang, viêm tinh hoàn</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: kĩ thuật mới, điều trị càng khoa học, tránh tái phát</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(11) }}"><img src="{{ asset('public/images/desktop/kt-2.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(11) }}">Kĩ thuật làm tan can thiệp tuyến tiền liệt</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Thích hợp điều trị các bệnh: Viêm tuyến tiền liệt, tăng sinh tuyến tiền liệt, phì đại tuyến tiền liệt</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Định vị chính xác, điều trị an toàn</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(10) }}"><img src="{{ asset('public/images/desktop/kt-3.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(10) }}">Cắt bao quy đầu xâm lấn tối thiểu Hàn Quốc</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Dài bao quy đầu, hẹp bao quy đầu</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Xâm lấn tối thiểu, ít chảy máu, chăm sóc đơn giản sau thủ thuật</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(3) }}"><img src="{{ asset('public/images/desktop/kt-4.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(3) }}">Kĩ thuật kéo dài dương vật định vị CF</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Dương vật ngắn, nhỏ</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: An toàn, vết thương nhỏ, hiệu quả thẩm mĩ</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(4) }}"><img src="{{ asset('public/images/desktop/kt-5.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(4) }}">Liệu pháp điều trị lập thể 4 hạng mục</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Vô sinh nam, vô tinh, chết tinh trùng, yếu tinh trùng…</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Thích ứng rộng, hiệu quả điều trị rõ rệt, không tác dụng phụ.</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(5) }}"><img src="{{ asset('public/images/desktop/kt-6.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(5) }}">Liệu pháp trị bệnh lậu DHA</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Bệnh lậu</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Liệu pháp tiên tiến, điều trị cả gốc lẫn ngọn, ngăn chặn tái phát</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(6) }}"><img src="{{ asset('public/images/desktop/kt-7.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(6) }}">Liệu pháp cân bằng miễn dịch</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Giang mai</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Thiết bị tiên tiến kiểm tra chính xác, dùng thuốc khoa học tránh tái phát</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(2) }}"><img src="{{ asset('public/images/desktop/kt-8.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(2) }}">Liệu pháp miễn dịch MB</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Mụn rộp sinh dục</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Hiệu quả rõ rệt, an toàn, không tác dụng phụ</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(7) }}"><img src="{{ asset('public/images/desktop/kt-9.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(7) }}">Quang động lực IRA</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Sùi mào gà</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Vết thương nhỏ, ít chảy máu, tỷ lệ tái phát thấp</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href="{{ MyAPI::getUrlPost(8) }}"><img src="{{ asset('public/images/desktop/kt-10.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="{{ MyAPI::getUrlPost(8) }}">Hệ thống hồi phục chức năng sinh dục DEA</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Liệt dương, xuất tinh sớm, rối loạn chức năng cương cứng</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: Hiệu quả rõ rệt, không tác dụng phụ, an toàn</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<script>
				$('.slick-kt').slick({
				  	slidesToShow: 2,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
		</div>
		<div class="row11">
			<h2 class="text-center text-uppercase">THIẾT BỊ KHÁM ĐIỀU TRỊ TIÊN TIẾN</h2>
			<h3 class="text-center"><span>Dịch vụ khám điều trị cao cấp</span></h3>
			<div class="slick-tb">
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-1.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Máy hồi phục chức năng sinh dục</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-2.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Máy điều trị sóng ngắn</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-3.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Máy điều trị hồng ngoại</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-4.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Máy hồi phục tuyến tiền liệt</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-5.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Quầy lễ tân</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-6.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Phòng phẫu thuật vô khuẩn</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href="{{ MyAPI::getUrlTerm(33) }}"><img src="{{ asset('public/images/desktop/tb-7.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="{{ MyAPI::getUrlTerm(33) }}">Phòng phẫu thuật vô khuẩn</a></p>
					</div>
				</div>
			</div>
			<script>
				$('.slick-tb').slick({
				  	slidesToShow: 3,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
			<div class="text-center">
				<a href="{{ MyAPI::getUrlTerm(33) }}" class="dis-inline-block text-center">
					Xem thêm môi trường<br>thiết bị phòng khám
				</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center">
					Tư vấn với<br>chuyên gia nam khoa
				</a>
			</div>
		</div>
		<div class="row12">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-10.png') }}" class="center-block"></a></div>
			<p class="text-justify">
				Phòng khám Nam Khang Hà Nội nỗ lực gánh vác trách nhiệm xã hội, phòng khám thường xuyên tổ chức các hoạt động xã hội, miễn phí kiểm tra sức khỏe cho người dân, mục đích giúp được nhiều hơn cho bệnh nhân có hoàn cảnh khó khăn, nhận được lời khen ngợi của đông đảo quần chúng nhân dân.
			</p>
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-9.png') }}" class="center-block"></a>
			</div>
		</div>
	</main>
@endsection('content')