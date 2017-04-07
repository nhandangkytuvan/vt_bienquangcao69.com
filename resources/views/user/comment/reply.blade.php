@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Reply câu hỏi</div>
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
                    Reply câu hỏi
                </td>
            </tr>
            <tr>
                <td colspan="4">
                   <div class="form-group">
                        @php 
                            $comment_reply = $data['comment']->children()->first();
                        @endphp
                        <textarea name="comment_detail" class="form-control autosize" placeholder="Gửi phản hồi...">{{ $comment_reply ? $comment_reply->comment_detail : '' }}</textarea>
                   </div> 
                </td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>  Reply câu hỏi</button>
        </div>
    </div>
</form>
@endsection('content')