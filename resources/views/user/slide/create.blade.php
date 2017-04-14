@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-success">
    width-slide:465px; height-slide:350px; link ảnh slide lấy từ thư viện ảnh
</div>
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo slide</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Link url</label>
                <input type="text" class="form-control" name="slide_url"  value="{{ old('slide_url') }}">
            </div>
            <div class="form-group">
                <label class="control-label">Link image</label>
                <input type="text" class="form-control" name="slide_image"  value="{{ old('slide_image') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-fire"></span>  Thêm slide</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
