<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>168 - Quản trị</title>
    <link rel="stylesheet" href="{{ asset('public/css/global/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/user/user-checkbox.css') }}">   
    <link rel="stylesheet" href="{{ asset('public/css/global/datetimepicker/jquery.datetimepicker.css') }}">   
    <link rel="stylesheet" href="{{ asset('public/css/user/user.css') }}">   
    <script src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('public/js/global/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
    <script src="{{ asset('public/js/global/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('public/js/global/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('public/js/global/datetimepicker/build/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('public/js/user/user.js') }}"></script>
</head>
<body style="padding-top: 70px;">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff;color: #333;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuPrimary" aria-expanded="false" style="background: none;border: none;">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="menuPrimary">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            </ul>
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                   <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                @if(Session::get('user'))
                                    <li>
                                        <a href="{{ url('user/user/edit') }}">
                                        @if(Session::get('user')->user_avatar)   
                                            <img src="{{ asset('public/img/'.Session::get('user')->user_avatar) }}" 
                                            style="max-width: 30px;max-height: 30px;position: absolute;top:10px;left: -10%;" class="img-circle center-block">
                                        @else
                                            <i class="glyphicon glyphicon-user"></i>
                                        @endif
                                        <span class="label label-success" style="vertical-align: 2px;margin-right: 5px;margin-left: 5px;">
                                            {{ Session::get('user')->user_group }}
                                        </span>
                                        {{ Session::get('user')->user_name }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('user/post/create') }}"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Viết bài</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('user/user/logout') }}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                    </li>
                                @else
                                @endif
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs">
                    <div class="menuSystem">
                        @yield('menu')
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-check"></span> 
                            {!! Session::get('success') !!}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-alert"></span>
                            {!! Session::get('error') !!}
                        </div>
                    @endif
                    @if(Session::has('info'))
                        <div class="alert alert-info">
                            <span class="fa fa-lightbulb-o"></span>
                            {!! Session::get('info') !!}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul style="list-style: none;">
                                @foreach ($errors->all() as $error)
                                    <li><span class="glyphicon glyphicon-alert"></span> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</body>
<script>  
$(document).ready(function() {
    $('.menuSystem').scrollToFixed({
        marginTop: 70,
    });
});
</script>
</html>
