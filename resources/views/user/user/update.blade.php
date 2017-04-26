@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Hướng dẫn sử dụng
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>STT</td>
            <td>Ảnh chụp</td>
            <td>Nội dung</td>
            <td>#</td>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="{{ asset('public/images/huongdan/upanh.png') }}">
                    <img src="{{ asset('public/images/huongdan/upanh.png') }}" class="img-responsive">
                </a>
            </td>
            <td>
                Úp ảnh trong khi soạn thảo
            </td>
            <td></td>
        </tr>
    </table>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Nội dung hoàn thiện
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>STT</td>
            <td>Ngày</td>
            <td>Nội dung</td>
            <td>#</td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-success">Số điện thoại mobile xuống dưới</li>
                    <li class="list-group-item bg-success">Bỏ border ở mobile</li>
                    <li class="list-group-item bg-success">Menu mobile border chuyển sang màu trắng</li>
                    <li class="list-group-item bg-info">Fix error ảnh bài viết bị tràn khi xem trong mobile</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-success">Ảnh sản phẩm ở desktop fix: width: 225px;height: 188px;</li>
                    <li class="list-group-item bg-info">Fix lỗi bài viết gần nhất hiện ra trước</li>
                    <li class="list-group-item bg-success">Ảnh mobile tự động co giãn lên chỉ có cách up ảnh sản phẩm cùng kích thước giống nhau sẽ đẹp width: 225px;height: 188px;</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-success">Fix click vào tuyển dụng là bài đầu tiên</li>
                    <li class="list-group-item bg-success">Hiện có slide trang chủ, hiện slide chưa quản trị được</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-info">Thêm nút thích, chia ser facebook vào bài viết</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>14.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-success">Auto play lood video </li>
                    <li class="list-group-item bg-success">Quản lý slide trong menu </li>
                    <li class="list-group-item bg-success">Quản lý ảnh trên cùng trong menu </li>
                    <li class="list-group-item bg-info">Giá được tách khi nhập ở admin </li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>15.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-info">Fix lỗi ảnh ko hiển thj trong soạn thảo</li>
                    <li class="list-group-item bg-success">Thêm sản phẩm liên quan bên trái khi xem bài viết</li>
                    <li class="list-group-item bg-info">Upload nhiều ảnh</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>15.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item bg-info">Fix lỗi ảnh ko hiển thj trong soạn thảo</li>
                    <li class="list-group-item bg-success">Thêm sản phẩm liên quan bên trái khi xem bài viết</li>
                    <li class="list-group-item bg-info">Upload nhiều ảnh</li>
                </ul>
            </td>
            <td></td>
        </tr>
    </table>
</div>
@endsection('content')