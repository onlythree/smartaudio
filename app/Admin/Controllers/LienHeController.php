<?php

namespace App\Admin\Controllers;

use App\Models\LienHe;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class LienHeController extends Controller
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
        $grid = new Grid(new LienHe);
        $grid->model()->orderby('id','desc');
        $grid->id('ID')->sortable()->filter();
        $grid->column('name','Họ tên')->display(function(){
            return '<a href="'.route('admin.contacts.show',$this->id).'">'.$this->name.'</a>';
        })->filter();
        $grid->column('email','Email')->filter();
        $grid->column('phone','Điện thoại')->filter();
        $grid->column('reason','Mục đích');
        $grid->column('subject','Tiêu đề')->filter();
        $grid->column('content','Nội dung')->display(function(){
            return strip_tags($this->content);
        }); 

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
        $contact = LienHe::findOrFail($id);
        $data = ['contacts'=>$contact];
        return view('admin.contacts.show',$data);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new LienHe);

        $form->hidden('id');
        $form->text('name', 'Tên liên hệ');
        $form->text('email', 'Email');
        $form->text('phone', 'Điện thoại');
        $form->text('subject', 'Tiêu đề');
        $form->textarea('content', 'Nội dung');
        
        return $form;
    }
}
