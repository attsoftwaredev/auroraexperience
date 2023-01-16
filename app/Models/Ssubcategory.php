<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ssubcategory extends Model
{
    protected $fillable = ['name', 'slug', 'category_id','status'];
    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo('App\Models\Scategory')->withDefault();
    }

    public function childcategory()
    { 
        return $this->hasMany('App\Models\SchildCategory')->where('status',1);
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item')->where('status',1);
    }

}
