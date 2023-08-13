<?php

namespace App\Admin\Controllers;

use App\Models\newscategories;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\news;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Storage;

class NewsCategoriesController extends Controller
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
        $grid = new Grid(new newscategories);  
        $grid->id('ID')->sort()->filter();

        $grid->column('images')->display(function ($images) {
            if($images != null){
            return '<a href="' . route('admin.news-categories.edit', $this->id) . '"><img src="' . Storage::url($images) . '" style="width:40px;height:40px"/></a>';
            }else{
                return '<a href="' . route('admin.news-categories.edit', $this->id) . '"><img src="' . asset('../asset/image/noimage.jpg') . '" style="width:40px;height:40px"/></a>';
            }
        });
        $grid->column('title', 'Tên danh mục')->display(function () {
            return '<a href="' . route('admin.news-categories.edit', $this->id) . '">' . $this->title . '</a>';
        })->filter();
        $grid->column('slug', 'Slug');
        $grid->column('order', 'Sort');
    
        $grid->column('active', 'Sử dụng')->display(function () {
            if ($this->active == 1) {
                return '<label class="btn btn-xs btn-success">Đang sử dụng</label>';
            }
            return '<label class="btn btn-xs btn-warning">Không sử dụng</label>';
        })->filter([1 => 'Được sử dụng', 0 => 'Không sử dụng']);
        $grid->column('parent_id', 'Danh mục lớn')->display(function ($parentId) {
            $cate = newscategories::where('id', $parentId)->first();
            if (!empty($cate)) {
                return $cate->title;
            } else {
                return 'Root';
            }
        });
        $grid->column('views', 'Xem trước')->display(function () {
            return '<a href="' . route('detail', $this->slug) . '" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Xem danh mục</a>';
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
        $show = new Show(newscategories::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->order('order');
        $show->active('active');
        $show->images('images');
        $show->short_description('short_description');
        $show->content('content');
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
        $form = new Form(new newscategories);
        Admin::script(
            "$('#title').keyup(function () {
            var txtClone = $(this).val();
            $('#slug').val(locdau(txtClone));
            $('#seo_meta_title').val(txtClone);
            });"
        );
        $form->setWidth(10, 2);
        $form->hidden('id');
        $form->column(1 / 2, function ($form) {
            $states = [
                'on'  => ['value' => 1, 'text' => 'Sử dụng', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
            ];

            $form->switch('active', 'Trạng thái')->states($states)->default(1);
            $form->text('title', 'Tên danh mục')->required();
            $form->text('slug', 'Slug')->required();
            $form->select('parent_id', 'Mục lớn')->options(newscategories::selectOptions())->required();

            $form->number('order', 'Sort')->default(0);
          
            $form->textarea('short_description', 'Mô tả ngắn')->rows(3);
        });
        $form->column(1 / 2, function ($form) {

            $form->image('images', 'Ảnh đại diện');
            $form->text('seo_meta_title', 'SEO Title');
            $form->textarea('seo_meta_description', 'SEO Description')->rows(3);
        });

        $form->column(12, function ($form) {
            $form->textarea('content', 'Mô tả')->rows(10)->setWidth(10, 1);
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
}
