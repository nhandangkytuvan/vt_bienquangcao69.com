@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
    <div style="margin-bottom: 10px;">
        <form action="{{ url('user/index') }}" class="form-inline">
            <div class="form-group">
                <select name="user_group" class="form-control">
                    <option value="">Chọn nhóm</option>
                    <option value="admin">Quản trị</option>
                    <option value="seo">Seo</option>
                    <option value="bien-tap">Biên tập</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên username" name="username" value="{{ $data['request']->input('username') }}">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
        </form>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Danh sách user
        </div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Tên</td>
                <td>Nhóm</td>
                <td>Số bài</td>
                <td>#</td>
            </tr>
            @foreach($data['users'] as $key => $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->user_group }}</td>
                <td>{{ count($user->post) }}</td>
                <td>
                    <div class="clearfix">
                        <div class="pull-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                </a>
                                <ul class="dropdown-menu" style="border-radius: 0;left: auto;right: 0;">
                                    <li>
                                        <a href="{{ url('user/user/group/'.$user->id) }}">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa nhóm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('user/user/block/'.$user->id) }}">
                                            <span class="glyphicon glyphicon-lock"></span> Khóa user
                                        </a> 
                                    </li>                                
                                    <li>
                                        <a href="{{ url('user/user/delete/'.$user->id) }}">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa user
                                        </a> 
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div> 
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection('content')