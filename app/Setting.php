<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Setting extends Model{
    protected $table = 'setting';
    public $column = ['web_name','web_description','web_keyword',];
    public $column_avatar = ['web_icon','web_logo']; 
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}