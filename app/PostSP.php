<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class PostSP extends Model{
    protected $table = 'post_sp';
    public $column = ['post_price'];
    
    public function post(){
    	return $this->belongsTo('App\Post','post_id','id');
    }
}