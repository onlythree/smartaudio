<?php

namespace App\Admin\Controllers;

use App\Models\categories;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
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
        $grid = new Grid(new categories);

        // $grid->model()->orderby('id', 'desc');
        $grid->id('ID')->sortable();

        $grid->column('images', 'Ảnh đại diện')->display(function ($images) {
            return '<a href="' . route('admin.categories.edit', $this->id) . '"><img src="' . Storage::url($images) . '" style="width:30px;height:30px;"/></a>';
        });

        $grid->column('title', 'Tên danh mục')->display(function () {
            return '<a href="' . route('admin.categories.edit', $this->id) . '">' . $this->title . '</a>';
        })->filter('like');
        $grid->column('slug', 'Liên kết')->display(function ($slug) {
            return '<a href="' . route('detail', $slug) . '">' . route('detail', $slug) . '</a>';
        });
        $grid->column('show_home', 'Trang chủ')->display(function () {
            if ($this->show_home == 1) {
                return '<i class="fa fa-star" style="color:green"></i>';
            } else {
                return '<i class="fa fa-star-o"></i>';
            }
        })->filter([0 => 'Không hiện thị', 1 => 'Hiện thị']);

        $grid->column('order', 'Sắp xếp');
        $grid->column('parent_id', 'Nhóm chính')->display(function ($parentId) {
            $cate = Categories::where('id', $parentId)->first();
            if (!empty($cate)) {
                return $cate->title;
            }
        });
        $grid->column('active', 'Sử dụng')->bool(['1' => true, '0' => false])->filter(['1' => 'Hiện thị', '0' => 'Không hiện thi']);
        $grid->column('show_menu', 'Menu')->bool(['1' => true, '0' => false])->filter(['1' => 'Hiện thị', '0' => 'Không hiện thi']);
        $grid->column('show_feature_product', 'Nổi bật')->bool(['1' => true, '0' => false])->filter(['1' => 'Hiện thị', '0' => 'Không hiện thi']);
        $grid->column('show_bestseller', 'Bán chạy')->bool(['1' => true, '0' => false])->filter(['1' => 'Hiện thị', '0' => 'Không hiện thi']);
        $grid->column('mega_type', 'Hiện thị')->display(function () {
            if ($this->mega_tytpe == 1) {
                return '1 Cột';
            }
            if ($this->mega_tytpe == 4) {
                return '1 Cột + Bán chạy';
            }
            if ($this->mega_tytpe == 2) {
                return '2 Cột';
            }
            if ($this->mega_tytpe == 3) {
                return '3 Cột';
            }
        })->filter(['1' => '1 Cột', '4' => '1 Cột + Bán chạy', '2' => '2 Cột', '3' => '3 Cột']);
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->column(1 / 2, function ($filter) {
                $filter->equal('parent_id', 'Danh mục lớn')->select(Categories::where('parent_id', 0)->pluck('title', 'id'));
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
        $show = new Show(categories::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->order('order');
        $show->parent_id('parent_id');
        $show->active('active');
        $show->short_description('short_description');
        $show->content('content');
        $show->images('images');
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
        Admin::script(
            "$('#title').keyup(function () {
            var txtClone = $(this).val();
            $('#slug').val(locdau(txtClone));
            $('#seo_meta_title').val(txtClone);
            });"
        );
        $form = new Form(new categories);
        $form->hidden('id');

        $form->column(1 / 2, function ($form) {
            $active = [
                'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
            ];
            $form->switch('active', 'Sử dụng')->states($active)->default(1);

            $form->text('title', 'Tên danh mục')->required();
            $form->text('slug', 'Slug')->required();
            $form->number('order', 'Sắp Xếp')->default(1);
            $form->hidden('order_string', 'Chuỗi sắp xếp');

            $form->select('parent_id', 'Nhóm lớn')->options(categories::selectOptions())->required();

            $active = [
                'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
            ];

            $form->switch('show_menu', 'Hiện thị menu')->states($active)->default(1);
            $form->switch('show_home', 'Hiện thị trang chủ')->states($active)->default(0);
            $form->switch('show_feature_product', 'Danh mục nổi bật')->states($active)->default(0);
            $form->switch('show_bestseller', 'Danh mục bán chạy')->states($active)->default(0);
            $form->select('mega_type', 'Kiểu hiện thị danh mục')->options(['1' => '1 cột','4' => '1 cột + Bán chạy', '2' => '2 cột', '3' => '3 cột']);
        });
        $form->column(1 / 2, function ($form) {
            // $form->switch('show_home', 'Hiện thị trang chủ')->states($active)->default(0);
            $form->image('images', 'Ảnh đại diện');
            $form->image('home_banner', 'Banner trang chủ');
            $form->text('seo_meta_title', 'Tiêu đề SEO');
            $form->textarea('seo_meta_description', 'Mô tả SEO')->rows(2);
        });

        $form->column(12, function ($form) {
            $form->ckeditor('short_description', 'Mô tả ngắn')->setWidth(10, 1);
            $form->ckeditor('content', 'Nội dung')->setWidth(10, 1);
        });


        $form->saving(function (Form $form) {
            $form->order_string = $form->order;
            if ($form->parent_id != 0) {
                $parent = categories::find($form->parent_id);
                $form->order_string = $parent->order . $form->order;
            }
        });

        $form->disableReset();
        return $form;
    }
}
