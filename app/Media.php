<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Media extends Model{
    protected $table = 'media';
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function term(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
    public function post(){
    	return $this->belongsTo('App\Post','post_id','id');
    }
}