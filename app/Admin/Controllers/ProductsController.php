<?php

namespace App\Admin\Controllers;

use App\Models\products;
use App\Models\categories;
use App\Http\Controllers\Controller;
use App\Models\ProductBrands;
use App\Models\ProductTags;
use Illuminate\Support\Str;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;
use Encore\Admin\Facades\Admin;

class ProductsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new products);
        $grid->model()->orderby('id', 'desc');
        $grid->id('ID')->sortable()->filter();

        $grid->column('images', 'Ảnh đại diện')->display(function ($images) {
            return '<a href="' . route('admin.products.edit', $this->id) . '"><img src="' . Storage::url($images) . '" style="width:30px;height:30px;"/></a>';
        });
        $grid->column('title', 'Tên sản phẩm')->filter('like')->display(function ($title) {
            return '<a href="' . route('admin.products.edit', $this->id) . '">' . $title . '</a>';
        });
        $grid->column('slug', 'Liên kết');
        $grid->column('order', 'Sắp xếp');
        $grid->column('active', 'Sử dụng')->display(function () {
            if ($this->active == 1) {
                return '<label class="btn btn-xs btn-success">Đang sử dụng</label>';
            }
            return '<label class="btn btn-xs btn-warning">Không sử dụng</label>';
        })->filter([1 => 'Được sử dụng', 0 => 'Không sử dụng']);
        $grid->column('best_seller', 'Bán chạy')->display(function () {
            if ($this->best_seller == 1) {
                return '<label class="btn btn-xs btn-danger">Bán chạy</label>';
            }
            return '<label class="btn btn-xs btn-default">Tắt</label>';
        })->filter([1 => 'Bán chạy', 0 => 'Tắt']);
        $grid->column('hot', 'Hot')->display(function () {
            if ($this->hot == 1) {
                return '<label class="btn btn-xs btn-danger">Hot</label>';
            }
            return '<label class="btn btn-xs btn-default">Tắt</label>';
        })->filter([1 => 'Hot', 0 => 'Tắt']);

        $grid->column('base_price', 'Giá bán')->display(function () {
            return number_format($this->base_price, 0, ',', '.');
        });
        $grid->column('sale_price', 'Giá sale')->display(function () {
            return number_format($this->sale_price, 0, ',', '.');
        });
        $grid->column('cate_id', 'Danh mục')->display(function () {

            // $cate = categories::find($cate_id);
            // if ($cate != null) {
            //     return $cate->title;
            // }

            $cateString = '';
            foreach ($this->cate_id as $value) {
                $category = categories::find($value);
                $cateString .= '<label class="btn btn-xs btn-default">' . $category->title . '</label> ';
            }
            return $cateString;
        });
        $grid->column('brand_id', 'Thương hiệu')->display(function () {

            $brand = ProductBrands::find($this->brand_id);
            if ($brand != null) {
                return $brand->title;
            }
            return '';          
        });
        // $grid->column('tags', 'Tags')->display(function ($tags) {

        //     $string = '';
        //     if ($tags != '') {
        //         $tag = explode(',', $tags);
        //         foreach ($tag as $key => $value) {
        //             $string .= '<label class="btn btn-xs btn-primary">' . $value . '</label> ';
        //         }
        //     }

        //     return $string;
        // })->filter('like');
        $grid->column('views', 'Xem trước')->display(function ($cate_id) {
            return '<a href="' . route('detail', $this->slug) . '" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Xem sản phẩm</a>';
        });
        $grid->column('reviews', 'Đánh giá')->display(function () {
            return '<a href="/admin/product-reviews/?productid='.$this->id.'" class="btn btn-xs btn-default"><i class="fa fa-star"></i> Đánh giá</a>';
        });
        $grid->filter(function ($filter) {
            // Remove the default id filter
            $filter->disableIdFilter();
            // Add a column filter
            $filter->column(1 / 2, function ($filter) {
                $filter->equal('cate_id', 'Danh mục lớn')->select(Categories::all()->pluck('title', 'id'));
            });
            $filter->column(1 / 2, function ($filter) {
            });
        });
        $grid->disableActions();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(products::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->order('order');
        $show->active('active');
        $show->images('images');
        $show->short_description('short_description');
        $show->content('content');
        $show->cate_id('cate_id');
        $show->seo_meta_title('seo_meta_title');
        $show->seo_meta_description('seo_meta_description');
        $show->seo_meta_images('seo_meta_images');
        $show->created_at(trans('admin.created_at'));
        $show->updated_at(trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new products);
        Admin::script(
            "$('#title').keyup(function () {
				var txtClone = $(this).val();
				$('#slug').val(locdau(txtClone));
				$('#seo_meta_title').val(txtClone);
            });
			"
        );
        $form->hidden('id');
        $form->column(1 / 2, function ($form) {
            $active = [
                'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
            ];
            $form->switch('active', 'Sử dụng')->states($active)->default(1);
            $form->text('title', 'Tên sản phẩm')->required();
            $form->text('slug', 'Slug')->required();
            $form->multipleSelect('cate_id', 'Danh mục')->options(categories::orderby('order_string', 'asc')->get()->pluck('title', 'id'))->required();
            $form->select('brand_id', 'Thương hiệu')->options(ProductBrands::get()->pluck('title', 'id'));
            $form->number('order', 'Sắp xếp')->default(0);
            // $form->currency('min_price', 'Giá thấp nhất')->symbol('vnđ');
            $form->currency('base_price', 'Giá bán')->symbol('vnđ')->required();

            $form->currency('sale_price', 'Giá sale')->symbol('vnđ');
            $form->textarea('short_description', 'Mô tả ngắn')->rows(3);
           
            $form->switch('best_seller', 'Bán chạy')->states($active)->default(0);
            $form->switch('hot', 'Hot')->states($active)->default(0);
            $form->switch('deal_today', 'Ưu đãi trong ngày')->states($active)->default(0);
            //$form->tags('tags', 'Tags');
            $form->text('seo_meta_title', 'SEO Title');
            $form->textarea('seo_meta_description', 'SEO Description')->rows(2);
        });
        $form->column(1 / 2, function ($form) {

            $form->image('images', 'Ảnh đại diện')->retainable()->required();
           
            $form->multipleImage('other_image', 'Ảnh mô tả')->sortable()->removable()->retainable();
            //$form->image('banner', 'Ảnh banner');
        });

        $form->column(12, function ($form) {
            $form->ckeditor('content', 'Mô tả')->rows(10)->setWidth(10, 1);
            $form->ckeditor('technical', 'Thông số kĩ thuật')->rows(10)->setWidth(10, 1);
        }); 
        $form->footer(function ($footer) {
            // disable reset btn
            $footer->disableReset();
            // disable `View` checkbox
            $footer->disableViewCheck();
            // disable `Continue editing` checkbox
            $footer->disableEditingCheck();
            // disable `Continue Creating` checkbox
            $footer->disableCreatingCheck();
        });
        return $form;
    }
    function copyProduct()
    {
        $product = products::find(request()->productid);
        $newProduct = $product->replicate();
        $newProduct->save();
        return redirect()->route('admin.products.index');
    }
}
