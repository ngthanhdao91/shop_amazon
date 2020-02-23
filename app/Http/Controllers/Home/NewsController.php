<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
class NewsController extends Controller
{
    public function getNews()
    {
    	$data['news']=News::orderBy('new_id','desc')->where('new_status','1')->paginate(3);
    	return view('frontend.news.news',$data);
    }
    public function getPagination(Request $re)
    {
    	if($re->ajax())
    	{
    		$data['news']=News::orderBy('new_id','desc')->where('new_status','1')->paginate(3);
    		return view('frontend.news.pagination',$data)->render();
    	}
    }
    public function getDetails($id)
    {
    	$data['news']=News::where('new_id',$id)->first();
    	$data['news_new']=News::orderBy('new_id','desc')->where('new_status','1')->take(5)->get();
    	return view('frontend.news.details',$data)->render();
    }
}
