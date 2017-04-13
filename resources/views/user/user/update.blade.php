@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
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
                </ul>
            </td>
            <td></td>
        </tr>
    </table>
</div>
@endsection('content')