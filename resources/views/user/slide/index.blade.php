@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách slide
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh slide</td>
            <td>Link url</td>
            <td>Link image</td>
            <td>#</td>
        </tr>
        @foreach($data['slides'] as $key => $slide)
        <tr>
            <td>{{ $slide->id }}</td>
            <td>
                <img src="{{ $slide->slide_image }}" class="img-responsive center-block" style="max-width: 50px;">
            </td>
            <td style="word-break: break-all;"><a href="{{ $slide->slide_url }}">{{ $slide->slide_url }}</a></td>
            <td style="word-break: break-all;"><a href="{{ $slide->slide_image }}">{{ $slide->slide_image }}</a></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="{{ url('user/slide/edit/'.$slide->id) }}">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa slide
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/slide/delete/'.$slide->id) }}">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa slide
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

