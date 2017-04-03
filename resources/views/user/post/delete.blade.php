@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa bài viết</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Tên</td>
                <td>Danh mục</td>
                <td>Trạng thái</td>
            </tr>
            <tr>
                <td>{{ $data['post']->id }}</td>
                <td>{{ $data['post']->post_name }}</td>
                <td>{{ isset($data['post']->term) ? $data['post']->term->term_name : '' }}</td>
                <td>{{ $data['post']->post_status == 1 ? 'Đã đăng' : 'Nháp' }}</td>
            </tr>
            <tr class="active">
                <td colspan="4">
                    Chi tiết
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    {!! $data['post']->post_detail !!}
                </td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>  Xóa bài viết</button>
        </div>
        <div class="panel-footer">
            <div class="clearfix">
                <div class="pull-right">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-option-horizontal"></span>
                        </a>
                        <ul class="dropdown-menu" style="border-radius: 0;left: auto;right: 0;">
                            <li>
                                <a href="{{ url('user/post/edit/'.$data['post']->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span> Sửa bài viết
                                </a> 
                            </li> 
                            <li>
                                <a href="{{ url('user/post/create') }}">
                                    <span class="glyphicon glyphicon-edit"></span> Thêm bài mới
                                </a> 
                            </li>
                        </ul> 
                    </div>
                </div>
            </div> 
        </div>
    </div>
</form>
@endsection('content')
