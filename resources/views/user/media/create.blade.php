@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-success">
    <ul>
        <li><i class="glyphicon glyphicon-check"></i> Hỗ trợ úp nhiều ảnh cùng lúc</li>
    </ul>
</div>
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Up ảnh lên</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Ảnh</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input type="file" class="form-control" name="media_file[]" multiple id="fileUpload">
                </div>
            </div>
            <div class="row" id="image-holder"></div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="media_name" placeholder="Tiêu đề ảnh" value="{{ old('media_name') }}">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label">Thư mục</label>
                        <select name="term_id" class="form-control">
                            <option value="">Chọn thư mục</option>
                            @foreach($data['terms'] as $key=> $term)
                                @if($term->term_id == 0)
                                    <option value="{{ $term->id }}">{{ $term->term_name }}</option>
                                    @foreach($data['terms'] as $key2=> $term2)
                                        @if($term2->term_id == $term->id)
                                            <option value="{{ $term2->id }}">--{{ $term2->term_name }}</option>
                                            @foreach($data['terms'] as $key3=> $term3)
                                                @if($term3->term_id == $term2->id)
                                                    <option value="{{ $term2->id }}">----{{ $term2->term_name }}</option>
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
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-send"></span>  Gửi ảnh server</button>
            </div>
        </div>
    </div>
</form>
@endsection('content')
