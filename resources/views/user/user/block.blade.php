@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form action="" method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
    	<div class="panel-heading text-center">
    		Block user
    	</div>
    	<table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Username</td>
                <td>UserGroup</td>
                <td>#</td>
            </tr>
            <tr>
            	<td>{{ $data['user']->id }}</td>
            	<td>{{ $data['user']->username }}</td>
            	<td>{{ $data['user']->user_group }}</td>
            	<td>#</td>
            </tr>
        </table>
    	<div class="panel-body">
    		<button class="btn btn-danger" type="submit">Block user</button>
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
                                <a href="{{ url('user/user/group/'.$data['user']->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span> Sửa user
                                </a>
                            </li>
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
</form>
@endsection('content')