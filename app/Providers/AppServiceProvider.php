<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Slider;
use App\Models\Comment;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['slider']=Slider::orderBy('id','desc')->where('slid_status','1')->take(3)->get();
        $data['comment']=Comment::orderBy('com_id','desc')->take(5)->get();
        view()->share($data);  
    }
}
