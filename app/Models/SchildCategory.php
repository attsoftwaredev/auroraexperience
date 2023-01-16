<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchildCategory extends Model
{ 
    protected $fillable = ['name','slug','status','category_id','subcategory_id'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Models\Scategory')->withDefault();
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Ssubcategory')->withDefault();
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item','childcategory_id')->where('status',1);
    }
}
