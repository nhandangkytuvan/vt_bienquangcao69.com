<div class="panel panel-default"> 
    <div class="panel-heading text-center"> 
        <i class="fa fa-cogs" aria-hidden="true"></i> Quản trị
    </div> 
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{ url('user/user/create') }}">
            <i class="fa fa-user" aria-hidden="true"></i> Thêm user</a>
        </li>
        <li class="list-group-item">
            <a href="{{ url('user/user/index') }}">
            <i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách user</a>
        </li>
        <li class="list-group-item">
            <a href="{{ url('user/term/create') }}">
            <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Thêm term</a>
        </li>
        <li class="list-group-item">
            <a href="{{ url('user/term/index') }}">
            <i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách term</a>
        </li>
    </ul>
</div> 
<div class="panel panel-default">
    <div class="panel-heading  text-center">
        <i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Biên tập
    </div>
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('user/post/create') }}"><i class="glyphicon glyphicon-edit"></i> Viết bài mới</a></li>
        <li class="list-group-item"><a href="{{ url('user/post/index') }}"><i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách bài viết</a></li>
        <li class="list-group-item"><a href="{{ url('user/post-sp/create') }}"><i class="fa fa-shopping-basket"></i> Viết sản phẩm</a></li>
        <li class="list-group-item"><a href="{{ url('user/post-sp/index') }}"><i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách sản phẩm</a></li>
        <li class="list-group-item"><a href="{{ url('user/media/create') }}"><i class="fa fa-cloud-upload"></i> Gửi ảnh</a></li>
        <li class="list-group-item"><a href="{{ url('user/media/index?view=icon') }}"><i class="glyphicon glyphicon-picture"></i> Thư viện ảnh</a></li>
        <li class="list-group-item"><a href="{{ url('user/comment/index') }}"><i class="glyphicon glyphicon-question-sign"></i> Hỏi đáp</a></li>
        <li class="list-group-item"><a href="{{ url('user/user/edit') }}"><i class="glyphicon glyphicon-user"></i> Sửa tài khoản</a></li>
    </ul>
</div>
<!-- link - slide -->
<div class="panel panel-default"> 
    <div class="panel-heading text-center"> 
        <i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Slide - link
    </div> 
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('user/slide/create') }}"><i class="fa fa-fire"></i> Thêm slide</a></li>
        <li class="list-group-item"><a href="{{ url('user/slide/index') }}"><i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách slide</a></li>
        <li class="list-group-item"><a href="{{ url('user/link/index') }}"><i class="glyphicon glyphicon-sort-by-alphabet"></i> Danh sách link</a></li>
    </ul>
</div> 
<!-- web cofig -->
<div class="panel panel-default"> 
    <div class="panel-heading text-center"> 
        <i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Cài đặt website
    </div>  
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('user/setting/create') }}">
            <i class="fa fa-globe"></i> Web</a>
        </li>
        <li class="list-group-item"><a href="{{ url('user/user/update') }}">
            <i class="glyphicon glyphicon-repeat"></i> Hoàn thiện</a>
        </li>
    </ul>
</div> 
<!-- logo -->
<div>
    <p><img src="{{ asset('public/img/'.$setting->web_logo) }}" class="img-responsive center-block"></p>
</div>