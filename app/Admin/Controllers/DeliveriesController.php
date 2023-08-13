<?php

namespace App\Admin\Controllers;

use App\Models\deliveries;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Storage; 

class DeliveriesController extends Controller
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
        $grid = new Grid(new deliveries);

        $grid->model()->orderby('id','desc');
        $grid->id('ID')->filter()->sort();
        $grid->column('title','Đơn vị vận chuyển')->filter('like');
        $grid->column('slug');
        $grid->column('order','Sắp xếp');
        $grid->column('active','Sử dụng')->bool(['1' => true, '0' => false]); 

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
        $show = new Show(deliveries::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->order('order');
        $show->active('active');
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
        $form = new Form(new deliveries);

        Admin::script(
            "$('#title').keyup(function () {
            var txtClone = $(this).val();
            $('#slug').val(locdau(txtClone));
            $('#seo_meta_title').val(txtClone);
            });"
        );
        $form->setWidth(10, 2);  
        $form->hidden('id');
        $form->text('title', 'Đơn vị vận chuyển');
        $form->text('slug', 'Slug');
        $form->number('order', 'Sort')->default(0);
        $active = [
            'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
        ];
        $form->switch('active','Kích hoạt')->states($active)->default(1)->required();

        return $form;
    }
}
