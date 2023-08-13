<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\categories;

class products extends Model
{
    // public function categories()
    // {
    //     return $this->belongsTo(categories::class,'id');
    // }
    public function categories()
    {
        return $this->belongsToMany(categories::class);
    } 
    public function getCateIdAttribute($value)
    {
        if ($value != null) {
            $value = str_replace('[', '', $value);
            $value = str_replace(']', '', $value);
            $value = str_replace('"', '', $value);
            
            return explode(',', $value);
        }
        return false;
    }
    public function setCateIdAttribute($value)
    {
        $this->attributes['cate_id'] = implode(',', $value);
    } 

    public function getOtherImageAttribute($value)
    {
        if ($value != null) {
            $value = str_replace('[', '', $value);
            $value = str_replace(']', '', $value);
            $value = str_replace('"', '', $value);
            return explode(',', $value);
        }
        return false;
    }

    public function setOtherImageAttribute($value)
    {
        $this->attributes['other_image'] = implode(',', $value);
    }
}
