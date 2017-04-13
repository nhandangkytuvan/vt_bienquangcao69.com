@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-success">
    Để tránh bị lỗi , tạm thời bài viết về sản phẩm hãy vào mục <span class="label label-success"><i class="fa fa-shopping-basket"></i> viết sản phẩm </span> và chọn danh mục sản phẩm
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
    </table>
</div>
@endsection('content')