<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\AddProdRequest;
use App\Http\Requests\EditProRequest;
use Illuminate\Support\Str;
class AdminProductController extends Controller
{
    public function getListProduct()
    {
    	$data['product']=Product::orderBy('prod_id','desc')->get();
    	return view('backend.product.product_list',$data);
    }
    public function getAddProduct()
    {
    	$data['category']=Category::all();
    	return view('backend.product.product_add',$data);
    }
    public function postAddProduct(AddProdRequest $re)
    {
    	$data=new Product;
    	$data->prod_name=$re->name;
    	$data->prod_slug=str_slug($re->name);
    	$data->prod_price=$re->price_hide;
    	$data->prod_temperature=$re->temperature;
    	$data->prod_sugar=$re->sugar;
    	$data->prod_caffeine=$re->caffeine;
        $data->prod_calories=$re->calories;
    	$data->prod_stauts=$re->status;
    	$data->prod_description=$re->description;
    	$data->prod_featured=$re->featured;
    	$data->prod_cate=$re->category;

    	if($re->hasFile('img'))
        {
            $file=$re->file('img');

            //kiem tra duoi hinh
            $duoi=$file->getClientOriginalExtension();
            //dd($duoi);
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
            {
                return redirect('admin/category/add')->with('$errors','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
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
            $data->prod_img=$randomName;
           
        }


        $data->save();
        //$product::where('prod_id',$id)->update($arr);
        return redirect('admin/product/list');
    }
    public function getDeleteProduct($id)
    {
    	Product::destroy($id);
    	return back();
    }
    public function getEditProduct($id)
    {
    	$data['product']=Product::find($id);
    	$data['category']=Category::all();
    	return view('backend.product.product_edit',$data);
    }
    public function postEditProduct(EditProRequest $re,$id)
    {
    	$product=new Product();
    	$product_id=Product::find($id);
    	$data['prod_name']=$re->name;
    	$data['prod_slug']=str_slug($re->name);
    	$data['prod_price']=$re->price_hide;
    	$data['prod_temperature']=$re->temperature;
    	$data['prod_sugar']=$re->sugar;
    	$data['prod_caffeine']=$re->caffeine;
    	$data['prod_calories']=$re->calories;
    	$data['prod_stauts']=$re->status;
    	$data['prod_description']=$re->description;
    	$data['prod_featured']=$re->featured;
    	$data['prod_cate']=$re->category;

    	if($re->hasFile('img'))
        {
            $file=$re->file('img');

            //kiem tra duoi hinh
            $duoi=$file->getClientOriginalExtension();
            //dd($duoi);
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
            {
                return redirect('admin/category/add')->with('$errors','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
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
                unlink("img/".$product_id->prod_img);
                //dd($product_id->prod_img);
            //luu ten hinh vao csdl
            $data['prod_img']=$randomName;
           
        }


        //$data->save();
        $product::where('prod_id',$id)->update($data);
        return redirect('admin/product/list');
    }
}
