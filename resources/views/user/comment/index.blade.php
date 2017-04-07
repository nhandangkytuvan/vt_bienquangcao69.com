@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <a href="#" class="pull-left"> <span class="label label-success">Tông: {{ $data['comments']->total() }}</span> </a>
        Danh sách bài viết
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Bài viết</td>
            <td>Nội dung</td>
            <td>T.thái</td>
            <td>Date</td>
            <td>#</td>
        </tr>
        @foreach($data['comments'] as $key => $comment)
        @php $post = $comment->post; @endphp
        <tr>
            <td>{{ $comment->id }}</td>
            <td><a href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}">{{ $post->post_name }}</a></td>
            <td>{!! $comment->comment_detail !!}</td>
            <td>
                <div class="radio {{ $comment->comment_status == 1 ? 'radio-success' : 'radio-default' }} radio-inline">
                    <input type="radio" checked="">
                    <label></label>
                </div>
            </td>
            <td>{{ date('d.m',strtotime($comment->created_at)) }}</td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="{{ url('user/comment/reply/'.$comment->id) }}">
                                        <span class="glyphicon glyphicon-share-alt"></span> Reply comment
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/comment/delete/'.$comment->id) }}">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa comment
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
    <div class="panel-footer">
        {!! $data['comments']->appends(request()->except('page'))->links() !!}
    </div>
</div>
@endsection('content')

