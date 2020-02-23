<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Str;
class AdminSliderController extends Controller
{
    public function getListSlider()
    {
    	$data['slider']=Slider::all();
    	return view('backend.slider.slider_list',$data);
    }
    public function getAddSlider()
    {
    	return view('backend.slider.slider_add');
    }
    public function postAddSlider(Request $re)
    {
    	$slider=new Slider;
    	$slider->slid_title=$re->title;
    	$slider->slid_description=$re->description;
    	$slider->slid_status=$re->status;
    	if($re->hasFile('img'))
        {
            $file=$re->file('img');

            //kiem tra duoi hinh
            $duoi=$file->getClientOriginalExtension();
            //dd($duoi);
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
            {
                return redirect('admin/slider/add')->with('$errors','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
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
            $slider->slid_img=$randomName;
           
        }
        $slider->save();
    	return back();
    }
    public function getDeleteSlider($id)
    {
        Slider::destroy($id);
        return back();
    }
    public function getEditSlider($id)
    {
        $data['slider']=Slider::find($id);
        return view('backend.slider.slider_edit',$data);
    }
    public function postEditSlider(Request $re,$id)
    {
        $slider=new Slider();
        $slider_id=Slider::find($id);
        $data['slid_title']=$re->title;
        $data['slid_description']=$re->description;
        $data['slid_status']=$re->status;

        if($re->hasFile('img'))
        {
            $file=$re->file('img');

            //kiem tra duoi hinh
            $duoi=$file->getClientOriginalExtension();
            //dd($duoi);
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
            {
                return redirect('admin/slider/add')->with('$errors','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
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
                unlink("img/".$slider_id->slid_img);
                //dd($product_id->prod_img);
            //luu ten hinh vao csdl
            $data['slid_img']=$randomName;
           
        }


        //$data->save();
        $slider::where('id',$id)->update($data);
        return redirect('admin/slider/list');
    }
}
