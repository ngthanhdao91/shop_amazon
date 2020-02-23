<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
class AdminCommentController extends Controller
{
    public function getListComment()
    {
    	$data['comment']=Comment::all();
    	return view('backend.comment.comment_list',$data);
    }
    public function getAddComment()
    {
    	return view('backend.comment.comment_add');
    }
    public function postAddComment(Request $re)
    {
    	$comment=new Comment;
    	$comment->com_name=$re->name;
    	$comment->com_description=$re->description;
    	$comment->com_stauts=$re->stauts;
    	$comment->com_job=$re->job;
        $comment->save();
    	return back();
    }
    public function getDeleteComment($id)
    {
        Comment::destroy($id);
        return back();
    }
    public function getEditComment($id)
    {
        $data['comment']=Comment::find($id);
        return view('backend.comment.comment_edit',$data);
    }
    public function postEditComment(Request $re,$id)
    {
        $comment=new Comment();
        $data['com_name']=$re->name;
        $data['com_job']=$re->job;
        $data['com_description']=$re->description;
        $data['com_stauts']=$re->stauts;
        //$data->save();
        $comment::where('com_id',$id)->update($data);
        return redirect('admin/comment/list');
    }
}
