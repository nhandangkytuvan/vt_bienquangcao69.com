@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div style="margin-bottom: 10px;">
    <form action="{{ url('user/post/index') }}" class="form-inline">
        <input type="hidden" name="view" value="{{ Request::input('view') }}">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="">Chọn danh mục</option>
                @foreach($data['terms'] as $key=> $term)
                    @if($term->term_id == 0)
                        <option {{ Request::input('term_id') == $term->id ? 'selected' : '' }} value="{{ $term->id }}">{{ $term->term_name }}</option>
                        @foreach($data['terms'] as $key2=> $term2)
                            @if($term2->term_id == $term->id)
                                <option {{ Request::input('term_id') == $term2->id ? 'selected' : '' }} value="{{ $term2->id }}">--{{ $term2->term_name }}</option>
                                @foreach($data['terms'] as $key3=> $term3)
                                    @if($term3->term_id == $term2->id)
                                        <option {{ Request::input('term_id') == $term3->id ? 'selected' : '' }} value="{{ $term2->id }}">----{{ $term2->term_name }}</option>
                                        @php unset($data['terms'][$key3]) @endphp
                                    @endif
                                @endforeach
                                @php unset($data['terms'][$key2]) @endphp
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select name="user_id" class="form-control">
                <option value="">Chọn t.giả</option>
                @foreach($data['users'] as $key=>$user)
                <option {{ Request::input('user_id') == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->user_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên bài" name="post_name" value="{{ Request::input('post_name') }}">
        </div>
        <div class="form-group">
            <div class='input-group'>
                <input id="datetimepicker" type='text' class="form-control" placeholder="Ngày"/ style="width: 138px;" name="post_created" value="{{ Request::input('post_created') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <a href="#" class="pull-left"> <span class="label label-success">Tông: {{ $data['posts']->total() }}</span> </a>
        Danh sách bài viết
        <a href="{{ url('user/post/index?view=icon') }}" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-large"></span> </a>
        <a href="{{ url('user/post/index?view=list') }}" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-list"></span> </a>
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh</td>
            <td>Tên</td>
            <td>Mục</td>
            <td>T.thái</td>
            <td>#</td>
        </tr>
        @foreach($data['posts'] as $key => $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td><a href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}">
                @if($post->post_avatar)
                <img src="{{ asset('public/img/'.$post->post_avatar) }}" class="img-responsive img-thumbnail" style="max-width: 90px;"></a>
                @else
                <img src="{{ asset('public/img/no-image.png') }}" class="img-responsive img-thumbnail" style="max-width: 90px;"></a>
                @endif
            </td>
            <td><a href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}">{{ $post->post_name }}</a></td>
            <td><a href="{{ url($post->term->term_alias.'/'.$post->term->id) }}">{{ $post->term->term_name }}</a></td>
            <td>
                <div class="radio {{ $post->post_status == 1 ? 'radio-success' : 'radio-default' }} radio-inline">
                    <input type="radio" checked="">
                    <label></label>
                </div>
            </td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem bài viết
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/post/edit/'.$post->id) }}">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa bài viết
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/post/delete/'.$post->id) }}">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa bài viết
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
        {!! $data['posts']->appends(request()->except('page'))->links() !!}
    </div>
</div>
@endsection('content')

