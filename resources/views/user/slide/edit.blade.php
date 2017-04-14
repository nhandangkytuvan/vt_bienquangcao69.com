@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa slide</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">link url</label>
                <input type="text" class="form-control" name="slide_url" value="{{ $data['slide']->slide_url }}">
            </div>
            <div class="form-group">
                <label class="control-label">link image</label>
                <input type="text" class="form-control" name="slide_image" value="{{ $data['slide']->slide_image }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-fire"></span>  Sửa slide</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
