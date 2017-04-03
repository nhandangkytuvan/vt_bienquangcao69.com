@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Chỉnh sửa nhóm
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="panel-body">
                    <form class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label">Nhóm user</label>
                            <div class="">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                                    <select name="user_group" class="form-control">
                                        <option {{ $data['user']->user_group=='admin' ? 'selected' : '' }} value="admin">Quản trị</option>
                                        <option {{ $data['user']->user_group=='bien-tap' ? 'selected' : '' }} value="bien-tap">Biên tập</option>
                                        <option {{ $data['user']->user_group=='seo' ? 'selected' : '' }} value="seo">Seo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tên đăng nhập</label>
                            <div class="">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" readonly name="username" value="{{ $data['user']->username }}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button id="btn-login" href="#" class="btn btn-info"><span class="fa fa-user"></span> Chỉnh sửa user !</button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
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
                            <a href="{{ url('user/user/block/'.$data['user']->id) }}">
                                <span class="glyphicon glyphicon-lock"></span> Khóa user
                            </a> 
                        </li>
                        <li>
                            <a href="{{ url('user/user/delete/'.$data['user']->id) }}">
                                <span class="glyphicon glyphicon-trash"></span> Xóa user
                            </a> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection('content')