<?php

namespace App\Admin\Controllers;

use App\Models\customer_reviews;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CustomerReviewsController extends Controller
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
        $grid = new Grid(new customer_reviews);

        $grid->id('ID');
        $grid->column('customer_name', 'Tên khách hàng');
        $grid->column('customer_phone', 'Số điện thoại');
        $grid->column('customer_email', 'Email');
        $grid->column('review_content', 'Nhận xét');
        $grid->column('active', 'Sử dụng')->bool(['1' => true, '0' => false]);
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

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
        $show = new Show(customer_reviews::findOrFail($id));

        $show->id('ID');
        $show->customer_name('customer_name');
        $show->customer_phone('customer_phone');
        $show->customer_email('customer_email');
        $show->customer_images('customer_images');
        $show->review_content('review_content');
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
        $form = new Form(new customer_reviews);

        $form->hidden('id');
        $form->text('customer_name', 'Tên khách hàng')->required();
        $form->text('customer_phone', 'Số điện thoại');
        $form->text('customer_email', 'Email');
 
        $form->image('customer_images','Ảnh đại diện')->required();
        $form->textarea('review_content', 'Đánh giá')->required();
        $active = [
            'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
        ];
        $form->switch('active', 'Kích hoạt')->states($active)->default(1)->required();

        return $form;
    }
}
