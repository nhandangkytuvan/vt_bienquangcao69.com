@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách link
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh link</td>
            <td>Link name</td>
            <td>Link url</td>
            <td>#</td>
        </tr>
        @foreach($data['links'] as $key => $link)
        <tr>
            <td>{{ $link->id }}</td>
            <td>
                <img src="{{ $link->link_url }}" class="img-responsive center-block" style="max-width: 50px;">
            </td>
            <td><a href="{{ $link->link_name }}">{{ $link->link_name }}</a></td>
            <td><a href="{{ $link->link_title }}">{{ $link->link_title }}</a></td>
            <td style="word-break: break-all;"><a href="{{ $link->link_url }}">{{ $link->link_url }}</a></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="{{ url('user/link/edit/'.$link->id) }}">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa link
                                    </a> 
                                </li> 
                            </ul>  
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection('content')

