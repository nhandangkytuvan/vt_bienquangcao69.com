@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa ảnh</div>
        <div class="panel-body">
            <div class="row form-group">
                <div class="col-sm-6">
                    @if($data['media']->media_file)
                    <a href="{{ asset('public/img/'.$data['media']->media_file) }}">
                        <img src="{{ asset('public/img/'.$data['media']->media_file) }}" class="img-responsive img-thumbnail center-block">
                    </a>
                    @endif
                </div>
                <div class="col-sm-6">
                    <p>Người up: {{ $data['media']->user->user_name }}</p>
                    <p>Ngày up: {{ $data['media']->created_at }}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="media_name" placeholder="Tên ảnh" value="{{ $data['media']->media_name }}">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label">Thư mục</label>
                        <select name="term_id" class="form-control">
                            <option value="">Chọn thư mục</option>
                            @foreach($data['terms'] as $key=> $term)
                                @if($term->term_id == 0)
                                    <option {{ $data['media']->term_id == $term->id ? 'selected' : '' }} value="{{ $term->id }}">{{ $term->term_name }}</option>
                                    @foreach($data['terms'] as $key2=> $term2)
                                        @if($term2->term_id == $term->id)
                                            <option {{ $data['media']->term_id == $term2->id ? 'selected' : '' }} value="{{ $term2->id }}">--{{ $term2->term_name }}</option>
                                            @foreach($data['terms'] as $key3=> $term3)
                                                @if($term3->term_id == $term2->id)
                                                    <option {{ $data['media']->term_id == $term3->id ? 'selected' : '' }} value="{{ $term2->id }}">----{{ $term2->term_name }}</option>
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
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-edit"></span>  Sửa ảnh</button>
            </div>
        </div>
    </div>
</form>
@endsection('content')