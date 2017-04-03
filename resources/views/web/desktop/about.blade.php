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
	<main class="about">
		<div class="row1">
			<div></div>
		</div>
		<div class="row2">
			<div class="container">
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội là phòng khám nam khoa trọng điểm ở thành phố Hà nội, làphòng khám nam khoa chuyên nghiệp chất lượng cao đầu tiên tại Hà Nội, phòng khám nam khoa chuyên nghiệp hiện đại hóa được ra đời trong hoàn cảnh kiến thức về sức khỏe sinh dục của người bệnh còn kém, bệnh viện viện nam khoa chuyên nghiệp còn thiếu thốn, mà nhu cầu của gia đình xã hội bức bối. Sự ra đời của phòng khám là cột mốc trong điều trị các bệnh nam khoa chuyên nghiệp trong lĩnh vực y tế tại Hà Nội và trên toàn quốc.
				</p>
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội có trung tâm xét nghiệm cấp 1 trong nước, thiết bị kiểm tra dẫn đầu quốc tế, thiết bị y học đỉnh cao và đội ngũ bác sĩ nam khoa cao cấp, kế thừa tinh thần khoa học cầu tiến và tôn chỉ nghề nghiệp tất cả vì bệnh nhân, toàn tâm dốc sức nghiên cứu và điều trị lâm sàng các bệnh nam khoa. Tiên phong thành lập 6 trung tâm y tế lớn gồm trung tâm điều trị tuyến tiền liệt, trung tâm điều trị rối loạn chức năng sinh dục, trung tâm điều trị nhiễm trùng đường niệu sinh dục, trung tâm chỉnh hình bộ phận sinh dục, trung tâm điều trị vô sinh, trung tâm điều trị các bệnh truyền nhiễm, tổng hợp dự phòng chăm sóc điều trị, thực hiện “chuyên khoa, chuyên bệnh, chuyên trị” lấy dịch vụ hoàn toàn mới nỗ lực xây dựng thương hiệu số 1 về nam khoa tại Việt Nam.
				</p>
			</div>
		</div>
		<div class="row3">
			<div class="container">
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội là phòng khám hiện đại hóa đạt tiêu chuẩn dịch vụ như khách sạn cao cấp. Phòng khám đã đầu tư, lắp đặt một lượng lớn thiết bị và hệ thống y tế tiên tiến trong và ngoài nước, như dao LEEP của Mỹ, máy chẩn đoán siêu âm màu Doppler, máy sinh hóa tự động, máy gây mê toàn năng, máy X-quang từ xa, hệ thống hình ảnh X-quang kĩ thuật số, hệ thống điều trị chẩn đoán hình ảnh nội soi….Thiết kế hệ thống điều hòa trung tâm, thang máy, phòng bệnh cao cấp, phòng VIP, phòng bệnh tiêu chuẩn và phòng bệnh phổ thông.
				</p>
			</div>
		</div>
		<div class="row4">
			<div class="container">
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội từ khi thành lập đến nay không ngừng nâng cao thực lực bản thân, chiêu nạp rộng rãi các bác sĩ chuyên nghiệp có kinh nghiệm phong phú nhiều năm thăm khám và điều trị, thực hiện tâm nguyện “Chuyên khoa phải chuyên nghiệp, đội ngũ phải chuyên môn”. Hiện nay, phòng kham Nam Khang Hà Nội đã hội tụ đội ngũ y tế hùng mạnh với hơn 30 bác sĩ nổi tiếng, coi đội ngũ bác sĩ chuyên nghiệp làm đầu tàu khoa học, mang đến cho bệnh nhân dịch vụ y tế ưu việt, chuyên nghiệp. Phòng khám thực hiện bác sĩ trực tiếp thăm khám điều trị, đảm bảo mỗi một bệnh nhân đều cảm nhận được điều trị chuyên nghiệp tận tâm của bác sĩ.
				</p>
			</div>
		</div>
		<div class="row5">
			<div class="container">
				<p class="text-justify" style="margin-bottom: 20px;">
					“Thủ thuật cắt bao quy đầu Hàn Quốc” của Phòng khám Nam Khang Hà Nội, tác phẩm nghệ thuật hoàn hảo trong chỉnh hình bao quy đầu nam giới
				</p>
				<p class="text-justify">
					<i class="fa fa-star"></i> Hàng nghìn bệnh án không biến chứng, kĩ thuật xâm lấn tối thiểu được các bác sĩ chuyên nghiệp trực tiếp thực hiện.
				</p>
				<p class="text-justify" style="margin-bottom: 20px;">
					<i class="fa fa-star"></i> Không đau xâm lấn tối thiểu hồi phục nhanh, tự nhiên mỹ quan không để lại sẹo, sau thủ thuật tăng cường chức năng nam giới, nâng cao rõ rệt chất lượng cuộc sống tình dục.
				</p>
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội đầu tư sử dụng thủ thuật cắt bao quy đầu xâm lấn tối thiểu Hàn Quốc, lấy kĩ thuật xâm lấn tối thiểu đỉnh cao là chính, sử dụng hệ thống điều trị chỉnh hình bộ phận sinh dục kĩ thuật số, do bác sĩ xâm lấn tối thiểu chuyên nghiệp dùng các thiết bị tiên tiến và phương pháp thủ thuật tuyệt vời, triển khai điều trị và thủ thuật thành công cho các bệnh dài bao quy đầu, hẹp bao quy đầu thường gặp ở hệ thống sinh dục nam giới.
				</p>
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội trở thành phòng khám nam khoa chuyên nghiệp có thực lực hùng hậu tại khu vực miền bắc, phòng khám nam khoa chuyên nghiệp đầu tiên tại thành phố Hà Nội, ứng dụng thành công kĩ thuật vi điều khiển thần kinh mẫn cảm SND. Kĩ thuật này là một trong những liệu pháp hiệu quả trong điều trị xuất tinh sớm được tổ chức y tế thế giới khởi xướng hiện nay, dựa trên cơ sở kĩ thuật chặn dây thần kinh lưng dương vật truyền thống, sử dụng kĩ thuật hiển vi phân giải cao tiến hành thực hiện phân tách chi tiết thần kinh lưng dương vật, mục đích đưa ra phương pháp điều trị cho bệnh xuất tinh sớm khó điều trị do dây thần kinh quy đầu quá nhạy cảm gây nên. Thực hiện kĩ thuật vi điều khiển thần kinh mẫn cảm SND, có thể giảm độ nhạy cảm của đầu dương vật, kéo dài thời gian trước xuất tinh, nâng cao chất lượng cuộc sống tình dục của bệnh nhân, mang lại hạnh phúc cho hơn nghìn người bệnh.
				</p>
				<p class="text-justify">
					Phòng khám Nam Khang Hà Nội luôn dẫn đầu trong điều trị các bệnh như rối loạn chức năng sinh dục nam giới, bệnh lây truyền qua đường tình dục, bệnh về tuyến tiền liệt, bệnh vô sinh…có thể giải quyết những ưu phiền của bệnh nhân ở mức độ tốt nhất, đảm bảo cuộc sống hạnh phúc cho bệnh nhân.
				</p>
			</div>
		</div>
		<div class="row6">
			<div class="container">
				<p class="text-justify">
					Phòng khám Nam Khang Hà nội luôn giữ phương châm dịch vụ “thành tâm, chất lượng, ấm áp, nhanh chóng”, môi trường phòng khám sạch sẽ thoải mái, môi trường riêng tư, yên tĩnh, thực hiện mô hình quản lý “chính sách khách hàng”, thực hiện dịch vụ hướng dẫn thăm khám tận nơi, phương án điều trị cá thể hóa, phòng bệnh mô hình khách sạn, có khu vực thăm khám cho bà mẹ và trẻ em, thăm khám 1 bác sĩ 1 bệnh nhân đảm bảo riêng tư cho bệnh nhân. Bệnh viện căn cứ theo tiêu chuẩn quản lý chất lượng quốc tế ISO 9001:2000 một cách nghiêm ngặt, thực hiện quản lý trên internet, lấy môi trường chữa bệnh ấm áp, kĩ thuật thăm khám điều trị chính xác và tiêu chuẩn thu phí hợp lý, thành tâm phục vụ cho đông đảo bệnh nhân.
				</p>
			</div>
		</div>
		<div class="row7"  onclick="open_tuvan()">
			<div class="container">
				<div class="flex justify-content-between flex-wrap-wrap align-content-between">
					<div class="flex1col1">
						<div class="hvr-border-fade mau-xanh" style="margin-top: 4px;margin-left: 3px;" onclick="open_tuvan()">
							<h3 class="text-center"><a href="">Tư vấn trực tuyến</a></h3>
						</div>
					</div>
					<div class="flex1col1">
						<div class="hvr-border-fade" onclick="open_tuvan()">
							<h3 class="text-center"><a href="">Đặt hẹn trực tuyến</a></h3>
						</div>
					</div>
					<div class="flex1col1">
						<div class="hvr-border-fade">
							<h3 class="text-center"><a href="">Đến khám</a></h3>
						</div>
					</div>
				</div>
				<div class="flex justify-content-between flex-wrap-wrap align-content-between">
					<div class="flex1col1">
						<div class="hvr-border-fade" onclick="open_tuvan()">
							<h3 class="text-center"><a href="">Điều trị đúng bệnh</a></h3>
						</div>
					</div>
					<div class="flex1col1">
						<div class="hvr-border-fade" onclick="open_tuvan()">
							<h3 class="text-center"><a href="">Chuẩn đoán</a></h3>
						</div>
					</div>
					<div class="flex1col1">
						<div class="hvr-border-fade" onclick="open_tuvan()">
							<h3 class="text-center"><a href="">Chuyên gia trực tiếp tham khám</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')