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
    <div class="panel-body">
        <div class="row" style="display: flex;flex-wrap: wrap;">    
            @foreach($data['medias'] as $key => $media)
            <div class="col-sm-4">
                <p style="border:1px solid #f5f5f5;"><a href="{{ asset('public/img/'.$media->media_file) }}"><img  style="height: 130px;" src="{{ asset('public/img/'.$media->media_file) }}" class="img-responsive center-block"></a></p>
                <p class="text-center" style="background-color: #f5f5f5;padding:5px 0px;margin-top: -10px;font-size: 14px;"><a href="{{ asset('public/img/'.$media->media_file) }}">{{ $media->media_name }}</a></p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="panel-footer">
        {{ $data['medias']->appends(request()->except('page'))->links() }}
    </div>
</div>
@endsection('content')

