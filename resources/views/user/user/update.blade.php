@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-danger">
    <span class="label label-success">Quản trị thay đổi giao diện cập nhật thêm, sửa đổi</span> tạm thời đã hoàn tất. <br>Dự án sẽ dừng lại vào ngày mai, bàn giao hoàn tất dữ liệu - code
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
                    <li class="list-group-item">Số điện thoại mobile xuống dưới</li>
                    <li class="list-group-item">Bỏ border ở mobile</li>
                    <li class="list-group-item">Menu mobile border chuyển sang màu trắng</li>
                    <li class="list-group-item">Fix error ảnh bài viết trong mobile</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">Fix ảnh ở vuông ở trang chủ , trang sản phẩm width: width: 225px;height: 188px;</li>
                    <li class="list-group-item">Fix lỗi bài viết gần nhất hiện ra trước</li>
                    <li class="list-group-item">Ảnh mobile tự động co giãn lên chỉ có cách up ảnh sản phẩm cùng kích thước giống nhau sẽ đẹp width: 225px;height: 188px;</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">Fix click vào tuyển dụng là bài đầu tiên</li>
                    <li class="list-group-item">Hiện có slide trang chủ, hiện slide chưa quản trị được</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>13.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">Thêm nút thích, chia ser facebook vào bài viết</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>14.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">Auto play lood video </li>
                    <li class="list-group-item">Quản lý slide trong menu </li>
                    <li class="list-group-item">Quản lý ảnh trên cùng trong menu </li>
                    <li class="list-group-item">Giá được tách khi nhập ở admin </li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>15.4</td>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">Fix lỗi ảnh ko hiển thj trong soạn thảo</li>
                </ul>
            </td>
            <td></td>
        </tr>
    </table>
</div>
<style>
    .table.table-bordered tr td:nth-child(3){
        padding-left: 0;
    }
    .table.table-bordered ul.list-group{
        border-radius: 0;
    }
    .table.table-bordered ul.list-group li.list-group-item{
        border-left: none;
        border-right: none;
    }
    .table.table-bordered ul.list-group li.list-group-item:first-child{
        border-top: none;
    }
    .table.table-bordered ul.list-group li.list-group-item:last-child{
        border-bottom: none;
    }
</style>
@endsection('content')