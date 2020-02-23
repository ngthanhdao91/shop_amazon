<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class AboutController extends Controller
{
    public function getAbout()
    {
    	$data['product_random']=Product::inRandomOrder()->limit(4)->get();
    	return view('frontend.about.about',$data)->render();
    }
}
