<?php

namespace App\Admin\Controllers;

use App\Models\pages;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
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
        $grid = new Grid(new pages);  
        $grid->id('ID')->sortable();
        $grid->column('images', 'Images')->display(function ($images) {
           
            if ($images != null) {
                return '<a href="' . route('admin.pages.edit', $this->id) . '"><img src="' . Storage::url($images) . '" style="width:30px;height:30px;"/></a>';
            } else {
                return '<a href="' . route('admin.pages.edit', $this->id) . '"><img src="' . asset('../asset/image/noimage.jpg') . '" style="width:30px;height:30px;"/></a>';
            }
        });
        $grid->column('title', 'Title')->display(function () {
            return '<a href="' . route('admin.pages.edit', $this->id) . '">' . $this->title . '</a>';
        })->filter();
        $grid->column('slug', 'Link');
        $grid->column('order', 'Sort');
        $grid->column('active', 'Sử dụng')->display(function () {
            if ($this->active == 1) {
                return '<label class="btn btn-xs btn-success">Đang sử dụng</label>';
            }
            return '<label class="btn btn-xs btn-warning">Không sử dụng</label>';
        });
        $grid->column('created_at', 'Ngày tạo')->display(function () {
            return \Carbon\Carbon::parse($this->created_at)->format('d/m/Y h:i:s');
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
        $show = new Show(pages::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->order('order');
        $show->active('active');
        $show->short_description('short_description');
        $show->content('content');
        $show->images('images');
        $show->seo_meta_title('seo_meta_title');
        $show->seo_meta_description('seo_meta_description');
        $show->seo_meta_image('seo_meta_image');
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
        $form = new Form(new pages);
        Admin::script(
            "$('#title').keyup(function () {
            var txtClone = $(this).val();
            $('#slug').val(locdau(txtClone));
            $('#seo_meta_title').val(txtClone);
            });
            $('.short_description').keyup(function () {
                var txt_short_description = $(this).val();          
                $('.seo_meta_description').val(txt_short_description);
            });"
        );
        $form->hidden('id');
        $form->column(1 / 2, function ($form) {
            $form->text('title', 'Tên trang')->required();
            $form->text('slug', 'Slug')->required();
            $form->text('order', 'Sắp xếp')->default(1)->required();
            $form->select('display_type', 'Kiểu hiện thị')->options(['fullpage' => 'Toàn bộ trang','sidebar-left' => 'Cột bên trái', 'sidebar-right' => 'Cột bên phải']); 
        });
        $form->column(1 / 2, function ($form) {
            $active = [
                'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
            ];
            $form->switch('active', 'Hiện thị')->states($active)->default(1);
            $form->image('images', 'Ảnh đại diện')->removable();
            $form->text('seo_meta_title', 'SEO Title');
            $form->textarea('seo_meta_description', 'SEO Description')->rows(2);
        });
        $form->column(12, function ($form) {
            $form->textarea('content', 'Nội dung')->setWidth(10, 1);
        });

       
        $form->footer(function ($footer) {
            // disable reset btn
            $footer->disableReset();
            // disable `View` checkbox
            // $footer->disableViewCheck();
            // // disable `Continue editing` checkbox
            // $footer->disableEditingCheck();
            // // disable `Continue Creating` checkbox
            // $footer->disableCreatingCheck();
        });
        // Admin::disablePjax();
        // $form->saved(function (Form $form) {
        //     return redirect()->route('admin.pages.index');
        // });
        return $form;
    }
}
