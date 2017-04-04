<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Term;
use Session;
class MyAPI {
    public static function getUrlPost($post_id){
        $post = Post::find($post_id);
        if($post){
        	return url($post->post_alias.'/'.$post->id.'.htm');
        }else{
        	return url('/');
        }
    }
    public static function getUrlTerm($term_id){
        $term = Term::find($term_id);
        if($term){
        	return url($term->term_alias.'/'.$term->id);
        }else{
        	return url('/');
        }
    }
    public static function limitWord($text, $limit) {
        $words = explode(" ",$text);
        return implode(" ",array_splice($words,0,$limit));
    }
    public static function getPost($post_id){
        return Post::find($post_id);
    }
    public static function getTerm($term_id){
        return Term::find($term_id);
    }
}