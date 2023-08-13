<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree; 
use App\Models\news; 

class newscategories extends Model
{
    use ModelTree, AdminBuilder;
    protected $table = 'news_categories';
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('order');
        $this->setTitleColumn('title');
    }
    public function news()
    {
        return $this->hasMany(news::class,'news_cateid');
    }
}
