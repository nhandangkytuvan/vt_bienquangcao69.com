<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Visit extends Model{
    protected $table = 'visit';
    public function post(){
    	return $this->belongsTo('App\Post','post_id','id');
    }
    public function term(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
}
