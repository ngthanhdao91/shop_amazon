<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Product;
use App\Models\Slider;
use Mail;
class CartController extends Controller
{
 //    function __construct()
	// {
	// 	$data['slider']=Slider::orderBy('id','desc')->where('slid_status','1')->take(3)->get();
 //        view()->share($data);  
	// }

	public function getCart()
	{
		$data['total']=Cart::getTotal();
    	$data['items']=Cart::getContent();
    	//dd($data['items'])
    	return view('frontend/cart/cart',$data);
	}
	public function getCartDelete($id)
    {
    	if($id=='all')
    		Cart::destroy();
    	else
    		Cart::remove($id);
    	return back();
    }
    public function getCartUpdate(Request $re)
    {
    	//Cart::update($re->rowId,$re->qty);
    	Cart::update($re->rowId, array(
		  'quantity' => array(
		      'relative' => false,
		      'value' => $re->qty
		  ),
		));
	}
	public function postCartComplete(Request $re)
    {
    	$data['info']=$re->all();
    	$email=$re->email;
    	$data['cart']=Cart::getContent();
    	$data['total']=Cart::getTotal();
    	Mail::send('frontend.cart.email', $data, function ($message) use($email) {
    	    $message->from('ngthanhda91@gmail.com', 'Chu cua hang');
    	
    	    $message->to($email, $email);
    		

    	    $message->cc('ngthanhdao02@gmail.com', 'Chu shop 2');
    	

    		//tieu de
    	    $message->subject('Xac nhan viec mua hang DaoNguyen');

    	});
    	Cart::clear();
    	return redirect('cart/complete');
    }
    public function getCartComplete()
    {
    	return view('frontend.cart.complete');
    }
}
