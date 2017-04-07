@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa comment</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Nội dung</td>
                <td>Trạng thái</td>
            </tr>
            <tr>
                <td>{{ $data['comment']->id }}</td>
                <td>{{ $data['comment']->comment_detail }}</td>
                <td>{{ $data['comment']->comment_status == 1 ? 'Đã đăng' : 'Nháp' }}</td>
            </tr>
            <tr class="active">
                <td colspan="4">
                    Reply
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>  Xóa comment</button>
        </div>
    </div>
</form>
@endsection('content')