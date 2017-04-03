<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    protected $table = 'post';
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function term(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
    public function view(){
    	return $this->hasOne('App\View','post_id','id');
    }
}