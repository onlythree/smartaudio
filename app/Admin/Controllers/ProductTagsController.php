<?php

namespace App\Admin\Controllers;

use App\Models\ProductTags;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class ProductTagsController extends Controller
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
        $grid = new Grid(new ProductTags);

        $grid->id('ID')->sortable()->filter();
        $grid->column('images')->display(function ($images) {
            return '<a href="' . route('admin.products-tag.edit', $this->id) . '"><img src="' . Storage::url($images) . '" style="width:40px;height:40px"/></a>';
        });
        $grid->column('title', 'Tên tag')->display(function ($title) {
            return '<a href="' . route('admin.products-tag.edit', $this->id) . '">' . $title . '</a>';
        })->filter('like');
        $grid->column('slug', 'Liên kết');
        $grid->column('status', 'Sử dụng')->display(function () {
            if ($this->status == 1) {
                return '<label class="btn btn-xs btn-success">Đang sử dụng</label>';
            }
            return '<label class="btn btn-xs btn-warning">Không sử dụng</label>';
        })->filter([1 => 'Được sử dụng', 0 => 'Không sử dụng']);
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
        $show = new Show(ProductTags::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->status('status');
        $show->content('content');
        $show->seo_meta_title('seo_meta_title');
        $show->seo_meta_description('seo_meta_description');
        $show->images('images');
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
        $form = new Form(new ProductTags);

        $form->hidden('id');
        $form->column(1 / 2, function ($form) {
            $states = [
                'on'  => ['value' => 1, 'text' => 'Enable', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Disable', 'color' => 'danger'],
            ];

            $form->switch('status', 'Trạng thái')->states($states)->default(1);
            $form->text('title', 'Tên tag')->required();
            $form->text('slug', 'Slug')->required();
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
    function getTag()
    {
        $q = request()->get('q');
        $tag = ProductTags::where('title', $q)->first();
        dd($tag);
        return $tag->title;
    }
}
