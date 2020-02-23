<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Str;
class AdminNewController extends Controller
{
     public function getListNew()
    {
    	$data['new']=News::orderBy('new_id','desc')->get();
    	return view('backend.new.new_list',$data);
    }
    public function getAddNew()
    {
    	$data['new']=News::all();
    	return view('backend.new.new_add',$data);
    }
    public function postAddNew(request $re)
    {
    	$data=new News;
    	$data->new_title=$re->title;
    	$data->new_slug=str_slug($re->title);
    	$data->new_summary=$re->summary;
    	$data->new_status=$re->status;
    	$data->new_description=$re->description;
    	$data->new_featured=$re->featured;

    	if($re->hasFile('img'))
        {
            $file=$re->file('img');

            //kiem tra duoi hinh
            $duoi=$file->getClientOriginalExtension();
            //dd($duoi);
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
            {
                return redirect('admin/new/add')->with('$errors','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            //kt hinh ton tai chua
            $nameHinh=$file->getClientOriginalName();
            $randomName=Str::random(4)."_".$nameHinh;
            //kiem tra ten hinh trung khong
            while(file_exists("img/".$randomName)){
                $randomName=Str::random(4)."_".$nameHinh;
            }

            //luu file image
            $file->move("img",$randomName);
             //xoa file hinh cu
            // if($re->prod_img!=null)
            //     unlink("../../public/backend/upload/images/".$product_id->prod_img);
            //luu ten hinh vao csdl
            $data->new_img=$randomName;
           
        }


        $data->save();
        //$product::where('prod_id',$id)->update($arr);
        return redirect('admin/new/list');
    }
    public function getDeleteNew($id)
    {
    	News::destroy($id);
    	return back();
    }
    public function getEditNew($id)
    {
    	$data['new']=News::find($id);
    	return view('backend.new.new_edit',$data);
    }
    public function postEditNew(Request $re,$id)
    {
    	$new=new News();
    	$new_id=News::find($id);
    	$data['new_title']=$re->title;
    	$data['new_slug']=str_slug($re->title);
    	$data['new_summary']=$re->summary;
    	$data['new_description']=$re->description;
    	$data['new_status']=$re->status;
    	$data['new_featured']=$re->featured;

    	if($re->hasFile('img'))
        {
            $file=$re->file('img');

            //kiem tra duoi hinh
            $duoi=$file->getClientOriginalExtension();
            //dd($duoi);
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
            {
                return redirect('admin/new/add')->with('$errors','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            //kt hinh ton tai chua
            $nameHinh=$file->getClientOriginalName();
            $randomName=Str::random(4)."_".$nameHinh;
            //kiem tra ten hinh trung khong
            while(file_exists("img/".$randomName)){
                $randomName=Str::random(4)."_".$nameHinh;
            }

            //luu file image
            $file->move("img",$randomName);
                unlink("img/".$new_id->new_img);
                //dd($product_id->prod_img);
            //luu ten hinh vao csdl
            $data['new_img']=$randomName;
           
        }


        //$data->save();
        $new::where('new_id',$id)->update($data);
        return redirect('admin/new/list');
    }
}
