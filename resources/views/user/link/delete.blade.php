@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa link</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>link name</td>
                <td>link title</td>
                <td>link url</td>
                <td>#</td>
            </tr>
            <tr>
                <td>{{ $data['link']->id }}</td>
                <td>{{ $data['link']->link_name }}</td>
                <td>{{ $data['link']->link_title }}</td>
                <td style="word-break: break-all;">{{ $data['link']->link_url }}</td>
                <td>#</td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-leaf"></span>  Xóa link</button>
        </div>
    </div>
</form>
@endsection('content')
