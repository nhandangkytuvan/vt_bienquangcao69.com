<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class View extends Model{
    protected $table = 'view';
    public function post(){
    	return $this->belongsTo('App\Post','post_id','id');
    }
    public function term(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
}
