<div class="panel panel-default"> 
    <div class="panel-heading text-center"> 
        <a href="#menuOrder1" data-toggle="collapse"><i class="fa fa-cogs" aria-hidden="true"></i> Quản trị
        </a> 
    </div> 
    <div class="panel-collapse collapse in" id="menuOrder1"> 
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ url('user/user/create') }}">
                <i class="fa fa-user" aria-hidden="true"></i> Thêm user</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('user/user/index') }}">
                <i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách user</a>
            </li>
            <li class="list-group-item" style="border-top: 1px solid #ddd;">
                <a href="{{ url('user/term/create') }}">
                <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Thêm term</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('user/term/index') }}">
                <i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách term</a>
            </li>
        </ul>
    </div> 
</div> 
<div class="panel panel-default">
    <div class="panel-heading  text-center">
        <a href="#menuOrder2" data-toggle="collapse"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Biên tập</a>
    </div>
    <div class="panel-collapse collapse in" id="menuOrder2"> 
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('user/post/create') }}"><i class="glyphicon glyphicon-edit"></i> Viết bài mới</a></li>
            <li class="list-group-item"><a href="{{ url('user/post/index') }}"><i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách bài viết</a></li>
            <li class="list-group-item"><a href="{{ url('user/media/create') }}"><i class="glyphicon glyphicon-send"></i> Gửi ảnh</a></li>
            <li class="list-group-item"><a href="{{ url('user/media/index?view=icon') }}"><i class="glyphicon glyphicon-picture"></i> Thư viện ảnh</a></li>
            <li class="list-group-item"><a href="{{ url('user/user/edit') }}"><i class="glyphicon glyphicon-user"></i> Sửa tài khoản</a></li>
        </ul>
    </div>
</div>
<div class="panel panel-default"> 
    <div class="panel-heading text-center"> 
        <a href="#menuOrder3" data-toggle="collapse"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Cài đặt
        </a> 
    </div> 
    <div class="panel-collapse collapse in" id="menuOrder3"> 
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('user/setting/create') }}">
                <i class="glyphicon glyphicon-home"></i> Web</a>
            </li>
        </ul>
    </div> 
</div> 
<div>
    <p><img src="{{ asset('public/img/'.$setting->web_logo) }}" class="img-responsive center-block"></p>
    <a href="{{ url('/') }}" class="btn-block btn btn-success">www.phongkhamnamkhang.net</a>
</div>