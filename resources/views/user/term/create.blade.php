@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo term</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ảnh</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="term_avatar" id="fileUpload">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" id="image-holder">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="term_name"  value="{{ old('term_name') }}">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Chọn cấp danh mục</label>
                        <select name="term_id" id="" class="form-control">
                            <option value="0">Chọn cấp danh mục</option>
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
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control autosize" name="term_description">{{ old('term_description') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control autosize" name="term_keyword">{{ old('term_keyword') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Meta</label>
                <textarea type="text" class="form-control autosize" name="term_meta">{{ old('term_meta') }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Thêm term</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
