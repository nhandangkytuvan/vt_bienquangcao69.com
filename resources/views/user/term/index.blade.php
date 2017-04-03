@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div style="margin-bottom: 10px;">
    <form action="{{ url('user/term/index') }}" class="form-inline">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="0">Chọn danh mục</option>
                @foreach($data['terms_search'] as $key=> $term)
                    @if($term->term_id == 0)
                        <option {{ $data['request']->input('term_id')==$term->id ? 'selected' : '' }} value="{{ $term->id }}">{{ $term->term_name }}</option>
                        @foreach($data['terms_search'] as $key2=> $term2)
                            @if($term2->term_id == $term->id)
                                <option {{ $data['request']->input('term_id')==$term2->id ? 'selected' : '' }} value="{{ $term2->id }}">--{{ $term2->term_name }}</option>
                                @foreach($data['terms_search'] as $key3=> $term3)
                                    @if($term3->term_id == $term2->id)
                                        <option {{ $data['request']->input('term_id')==$term3->id ? 'selected' : '' }} value="{{ $term2->id }}">----{{ $term2->term_name }}</option>
                                        @php unset($data['terms_search'][$key3]) @endphp
                                    @endif
                                @endforeach
                                @php unset($data['terms_search'][$key2]) @endphp
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên term" name="term_name" value="{{ $data['request']->input('term_name') }}">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách term
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh</td>
            <td>Tên</td>
            <td>Des</td>
            <td>Meta</td>
            <td>Cấp trên</td>
            <td>Số bài</td>
            <td>#</td>
        </tr>
        @foreach($data['terms'] as $key => $term)
        <tr>
            <td>{{ $term->id }}</td>
            <td>
                @if($term->term_avatar)
                <img src="{{ asset('public/img/'.$term->term_avatar) }}" class="img-responsive center-block" style="max-width: 50px;">
                @endif
            </td>
            <td><a href="{{ url($term->term_alias.'/'.$term->id) }}">{{ $term->term_name }}</a></td>
            <td>{{ $term->term_description }}</td>
            <td>{{ $term->term_meta }}</td>
            <td>{{ $term->parent()->exists() ? $term->parent->term_name : '' }}</td>
            <td>{{ $term->post()->count() }}</td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="{{ url($term->term_alias.'/'.$term->id) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/term/edit/'.$term->id) }}">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="{{ url('user/term/delete/'.$term->id) }}">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa term
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

