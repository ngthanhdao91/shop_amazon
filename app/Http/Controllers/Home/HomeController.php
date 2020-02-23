<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\News;
use App\Models\Contact;
use Cart;
class HomeController extends Controller
{
	// function __construct()
	// {
	// 	$data['slider']=Slider::orderBy('id','desc')->where('slid_status','1')->take(3)->get();
 //        view()->share($data);  
	// }
    public function getHome()
    {
    	$data['category']=Category::all();
    	$data['product']=Product::orderBy('prod_id','desc')->get();
    	$data['product_best_seller']=Product::where('prod_featured','1')->orderBy('prod_id','desc')->take(6)->get();
    	$data['new']=News::orderBy('new_id','desc')->where('new_status','1')->take(4)->get();
    	return view('frontend.index.index',$data);
    }
    public function getMenu()
    {
    	$data['category']=Category::all();
    	$data['product']=Product::orderBy('prod_id','desc')->get();
    	return view("frontend.menu.menu",$data);
    }
    public function getDetails($id,$id2)
    {
    	$data['product']=Product::where('prod_id',$id2)->first();
    	//dd($data['product']);
    	return view("frontend.details.details",$data);
    }
    public function postDetails($id2,$id,Request $re)
    {
        $product=Product::find($id);
        //add vao cart
        $size=$re->size;
        $price=$product->prod_price;
        if($size=="l")
            $price+=10000;
        Cart::add(['id' => $id, 'name' => $product->prod_name, 'quantity' => $re->quantity, 'price' => $price, 'attributes' => ['img' =>  $product->prod_img,'size' => $size]]);
        //dd(Cart::add);
        return redirect('cart/show');
    }
    public function postReviewCustomer(Request $re)
    {
        $data=new Contact;
        $data->cont_name=$re->name;
        $data->cont_email=$re->email;
        $data->cont_message=$re->description;
        $data->save();
        //toastr()->info('User has been created!');
        //set message with title
        toastr()->success('Góp ý thành công!', 'Chân thành cám ơn !');
        return back();
    }
}
