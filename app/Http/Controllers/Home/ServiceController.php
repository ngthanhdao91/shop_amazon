<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
class ServiceController extends Controller
{
    public function getService()
    {
    	return view("frontend.service.service");
    }
}
