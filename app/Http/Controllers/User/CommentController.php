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
}