<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class CommentController extends Controller{
	public function create($post_id,Request $request){
		$comment = new Comment;
        $comment->post_id = $post_id;
        $comment->comment_status = 0;
        $comment->comment_is_new = 1;
        $comment->comment_detail = $request->comment_detail;
        $comment->comment_id = 0;
        $comment->save();
        return back();
	}
}