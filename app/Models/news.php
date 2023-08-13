<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\newscategories;

class news extends Model
{
    public function newscategories()
    {
        return $this->belongsTo(newscategories::class,'id');
    }
  
    public function getNewsCateIdAttribute($value)
    {
        if ($value != null) {
            $value = str_replace('[', '', $value);
            $value = str_replace(']', '', $value);
            $value = str_replace('"', '', $value);
            
            return explode(',', $value);
        }
        return false;
    }
    public function setNewsCateIdAttribute($value)
    {
        $this->attributes['news_cateid'] = implode(',', $value);
    } 

}
