@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa ảnh</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Tên</td>
                <td>Thư mục</td>
                <td>Tác giả</td>
            </tr>
            <tr>
                <td>{{ $data['media']->id }}</td>
                <td>{{ $data['media']->media_name }}</td>
                <td>{{ isset($data['media']->term) ? $data['media']->term->term_name : '' }}</td>
                <td>{{ $data['media']->user->user_name }}</td>
            </tr>
        </table>
        <div class="panel-body text-center">
            <div class="row form-group">
                <img src="{{ asset('public/img/'.$data['media']->media_file) }}" class="img-responsive center-block img-thumbnail">
            </div>
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>  Xóa ảnh</button>
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
                                <a href="{{ url('user/media/edit/'.$data['media']->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span> Sửa ảnh
                                </a> 
                            </li> 
                            <li>
                                <a href="{{ url('user/media/create') }}">
                                    <span class="glyphicon glyphicon-edit"></span> Thêm ảnh mới
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
