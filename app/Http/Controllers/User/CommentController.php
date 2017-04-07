<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class CommentController extends Controller{
	public function index(Request $request){
		$comments = Comment::paginate(15);
        $data['comments'] = $comments;
        return view('user.comment.index',['data'=>$data]);
	}
	public function delete($comment_id,Request $request){
		$comment = Comment::find($comment_id);
        if($request->isMethod('post')){
        	$comment->children()->delete();
        	$comment->delete();
        	return redirect('user/comment/index');
        }else{
        	$data['comment'] = $comment;
        	return view('user.comment.delete',['data'=>$data]);
        }
	}
	public function reply($comment_id,Request $request){
		$comment = Comment::find($comment_id);
        if($request->isMethod('post')){
        	if($comment->children()->first()){
        		$comment_reply = $comment->children()->first();
        	}else{
	        	$comment_reply = new Comment;
	        	$comment_reply->post_id = $comment->post_id;
	        	$comment_reply->comment_id = $comment_id;
        	}
        	$comment_reply->comment_detail = $request->input('comment_detail');
        	$comment_reply->save(); 
        	return back();
        }else{
        	$data['comment'] = $comment;
        	return view('user.comment.reply',['data'=>$data]);
        }
	}
}