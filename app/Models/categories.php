<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree; 
use App\Models\products;

class categories extends Model
{
    use ModelTree, AdminBuilder;
    protected $table = 'categories';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('order');
        $this->setTitleColumn('title');
    }
    public function products()
    {
        return $this->hasMany(products::class,'cate_id');
    }
}
