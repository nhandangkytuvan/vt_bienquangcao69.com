@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa slide</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>link url</td>
                <td>link image</td>
                <td>#</td>
            </tr>
            <tr>
                <td>{{ $data['slide']->id }}</td>
                <td style="word-break: break-all;">{{ $data['slide']->slide_url }}</td>
                <td style="word-break: break-all;">{{ $data['slide']->slide_image }}</td>
                <td>#</td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-leaf"></span>  Xóa slide</button>
        </div>
    </div>
</form>
@endsection('content')
