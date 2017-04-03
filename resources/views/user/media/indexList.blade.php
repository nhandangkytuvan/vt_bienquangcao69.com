@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div style="margin-bottom: 10px;">
    <form action="{{ url('user/media/index') }}" class="form-inline">
        <input type="hidden" name="view" value="{{ $data['request']->input('view') }}">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="">Chọn thư mục</option>
                @foreach($data['terms'] as $key=> $term)
                    @if($term->term_id == 0)
                        <option {{ $data['request']->input('term_id') == $term->id ? 'selected' : '' }} value="{{ $term->id }}">{{ $term->term_name }}</option>
                        @foreach($data['terms'] as $key2=> $term2)
                            @if($term2->term_id == $term->id)
                                <option {{ $data['request']->input('term_id') == $term2->id ? 'selected' : '' }} value="{{ $term2->id }}">--{{ $term2->term_name }}</option>
                                @foreach($data['terms'] as $key3=> $term3)
                                    @if($term3->term_id == $term2->id)
                                        <option {{ $data['request']->input('term_id') == $term3->id ? 'selected' : '' }} value="{{ $term2->id }}">----{{ $term2->term_name }}</option>
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
                <option value="">Chọn tác giả</option>
                @foreach($data['users'] as $key=>$user)
                <option {{ $data['request']->input('user_id') == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->user_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên media" name="media_name" value="{{ $data['request']->input('media_name') }}">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <a href="#" class="pull-left"> <span class="label label-success">Tông: {{ $data['medias']->total() }}</span> </a>
        Danh sách ảnh
        <a href="{{ url('user/media/index?view=thumbnail') }}" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-list"></span> </a>
        <a href="{{ url('user/media/index?view=icon') }}" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-large"></span> </a>
        <a href="{{ url('user/media/index?view=list') }}" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-list"></span> </a>
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Tên</td>
            <td>Thư mục</td>
            <td>Tác giả</td>
            <td>Thời gian up</td>
            <td>#</td>
        </tr>
        @foreach($data['medias'] as $key => $media)
        <tr>
            <td>{{ $media->id }}</td>
            <td><a href="{{ asset('public/img/'.$media->media_file) }}">{{ $media->media_name }}</a></td>
            <td>{{ isset($media->term) ? $media->term->term_name : '' }}</td>
            <td>{{ $media->user->user_name }}</td>
            <td>{{ $media->created_at }}</td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="{{ asset('public/img/'.$media->media_file) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem ảnh
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/media/edit/'.$media->id) }}">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa ảnh
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/media/delete/'.$media->id) }}">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa ảnh
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
        {{ $data['medias']->appends(request()->except('page'))->links() }}
    </div>
</div>
@endsection('content')

