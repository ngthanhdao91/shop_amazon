<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='vp_news';
    protected $primaryKey='new_id';
    protected $guarded=[];
}
