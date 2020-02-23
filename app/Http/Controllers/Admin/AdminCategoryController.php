<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
class AdminCategoryController extends Controller
{
    public function getListCategory()
    {
    	$data['category']=Category::all();
    	return view('backend.category.cate_list',$data);
    }
    public function getAddCategory()
    {
    	return view('backend.category.cate_add');
    }
    public function postAddCategory(AddCateRequest $re)
    {
    	$category=new Category;
    	$category->cate_name=$re->name;
    	$category->cate_slug=str_slug($re->name);
    	$category->save();
    	return back();
    }
    public function getDeleteCategory($id)
    {
    	Category::destroy($id);
    	return back();
    }

    public function getEditCategory($id)
    {
        $data['category']=Category::find($id);
        return view('backend.category.cate_edit',$data);
    }
    public function postEditCategory(EditCateRequest $re,$id)
    {
        $category=new Category();
        $arr['cate_name']=$re->name;
        $category::where('cate_id',$id)->update($arr);
        return redirect('admin/category/list');
    }
}
