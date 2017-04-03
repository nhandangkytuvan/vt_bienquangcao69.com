@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Cài đặt trang web</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Favicon</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="web_icon">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    @if(isset($data['setting']->web_icon))
                    <img src="{{ asset('public/img/'.$data['setting']->web_icon) }}" class="img-responsive img-thumbnail center-block">
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Logo</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="web_logo">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    @if(isset($data['setting']->web_logo))
                    <img src="{{ asset('public/img/'.$data['setting']->web_logo) }}" class="img-responsive img-thumbnail center-block">
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="web_name" value="{{ isset($data['setting']->web_name) ? $data['setting']->web_name : '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control autosize" name="web_description">{{ isset($data['setting']->web_description) ? $data['setting']->web_description : '' }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control autosize" name="web_keyword">{{ isset($data['setting']->web_keyword) ? $data['setting']->web_keyword : '' }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-bookmark"></span>  Lưu cài đặt</button>
            </div>
        </div>
    </div>
</form>
@endsection('content')