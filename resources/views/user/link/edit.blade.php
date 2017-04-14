@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa link</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">link name</label>
                <input type="text" class="form-control" name="link_name" value="{{ $data['link']->link_name }}">
            </div>
            <div class="form-group">
                <label class="control-label">link title</label>
                <input type="text" class="form-control" name="link_title" value="{{ $data['link']->link_title }}">
            </div>
            <div class="form-group">
                <label class="control-label">link url</label>
                <input type="text" class="form-control" name="link_url" value="{{ $data['link']->link_url }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-external-link"></span>  Sửa link</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
