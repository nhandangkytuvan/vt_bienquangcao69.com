@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-success">
    Khu vực này để thay đổi link ảnh trên cùng.
</div>
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo link</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="link_name"  value="{{ old('link_name') }}">
            </div>
            <div class="form-group">
                <label class="control-label">Title</label>
                <input type="text" class="form-control" name="link_title"  value="{{ old('link_title') }}">
            </div>
            <div class="form-group">
                <label class="control-label">Url</label>
                <input type="text" class="form-control" name="link_url"  value="{{ old('link_url') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-external-link"></span>  Thêm link</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
