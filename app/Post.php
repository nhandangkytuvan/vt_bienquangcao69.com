<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    protected $table = 'post';
    public static $rules = [
        'post_name' => 'required',
        'post_description' => 'required',
        'term_id' => 'required',
    ];
    public static $messages = [
        'post_name.required' => 'Bạn chưa nhập tên bài viết.',
        'post_description.required' => 'Bạn chưa nhập tóm tắt bài viết.',
        'term_id.required' => 'Bạn chưa chọn mục úp bài viết.',
    ];
    public $column = ['post_name','post_description','post_detail','post_keyword','post_status'];
    
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function term(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
    public function visit(){
    	return $this->hasOne('App\Visit','post_id','id');
    }
    public function postSP(){
        return $this->hasOne('App\PostSP','post_id','id');
    }
    public function comment(){
        return $this->hasMany('App\Comment','post_id','id');
    }
}