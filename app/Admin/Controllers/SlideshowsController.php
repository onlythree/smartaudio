<?php

namespace App\Admin\Controllers;

use App\Models\slideshows;
use App\Models\languages;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class SlideshowsController extends Controller
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
        $grid = new Grid(new slideshows);
        $grid->id('ID')->filter()->sortable();
        $grid->column('images', 'Ảnh')->display(function ($images) {
            return '<a href="' . route('admin.slideshows.edit', $this->id) . '"><img src="' . Storage::url($images) . '" alt="" style="width:160px;height:90px;"/></a>';
        });
        $grid->column('title', 'Tiêu đề');
        //$grid->column('sub_title', 'Tiêu đề phụ');
        $grid->column('order', 'Sắp xếp');
        $grid->column('location', 'Vị trí')->filter([
            'top-slideshow' => 'Slide đầu trang',
            'after-top-slideshow' => 'Dưới slide đầu trang',
            'left-feature' => 'Bên trái sản phẩm nổi bật',
            'after-feature-product' => 'Dưới sản phẩm nổi bật',
            'after-bestseller-product' => 'Dưới sản phẩm bán chạy',
            'partner' => 'Đối tác',
            'shop-page' => 'Trang sản phẩm',
            'shop-bestseller' => 'Trang sản phẩm bán chạy',
            'shop-discount' => 'Trang sản phẩm khuyến mãi',
            'shop-new' => 'Trang sản phẩm moi',
        ])->display(function ($location) {
            switch ($location) {
                case 'top-slideshow':
                    return 'Slide đầu trang';
                case 'after-top-slideshow':
                    return 'Dưới slide đầu trang';
                case 'left-feature':
                    return 'Bên trái sản phẩm nổi bật';
                case 'after-feature-product':
                    return 'Dưới sản phẩm nổi bật';
                case 'after-bestseller-product':
                    return 'Dưới sản phẩm bán chạy';
                case 'partner':
                        return 'Đối tác';    
                case 'shop-page':
                    return 'Trang sản phẩm';
                case 'shop-bestseller':
                    return 'Trang sản phẩm bán chạy';
                case 'shop-discount':
                    return 'Trang sản phẩm khuyến mãi';
                case 'shop-new':
                    return 'Trang sản phẩm mới';
                    
                default:
                    # code...
                    break;
            }
        });

        $grid->column('active')->display(function () {
            if ($this->active == 1) {
                return '<label class="btn btn-xs btn-success">Đang sử dụng</label>';
            }
            return '<label class="btn btn-xs btn-warning">Không sử dụng</label>';
        });
        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new slideshows);
        $form->hidden('id');
        $form->text('title', 'Tên slide')->required();
        $form->text('sub_title', 'Tiêu đề phụ');
        $form->image('images', 'Ảnh')->required();
        $form->text('link', 'Link')->required();
        $form->select('location', 'Vị trí')->options([
            'top-slideshow' => 'Slide đầu trang',
            'after-top-slideshow' => 'Dưới slide đầu trang',
            'left-feature' => 'Bên trái sản phẩm nổi bật',
            'after-feature-product' => 'Dưới sản phẩm nổi bật',
            'after-bestseller-product' => 'Dưới sản phẩm bán chạy',
            'partner' => 'Đối tác',
            'shop-page' => 'Trang sản phẩm',
            'shop-bestseller' => 'Trang sản phẩm bán chạy',
            'shop-discount' => 'Trang sản phẩm khuyến mãi',
            'shop-new' => 'Trang sản phẩm mới',
        ])->required();
        $form->text('order', 'Sắp xếp')->required();
        $active = [
            'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
        ];

        $form->switch('active', 'Trạng thái')->states($active)->default(1);

        return $form;
    }
}
