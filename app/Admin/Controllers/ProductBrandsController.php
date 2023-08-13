<?php

namespace App\Admin\Controllers;

use App\Models\ProductBrands;
use App\Http\Controllers\Controller;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class ProductBrandsController extends Controller
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
        $grid = new Grid(new ProductBrands);

        $grid->id('ID')->sortable()->filter();
        $grid->column('logo', 'Logo')->display(function ($logo) {
            return '<a href="' . route('admin.product-brands.edit', $this->id) . '"><img src="' . Storage::url($logo) . '" style="width:30px;height:30px;"/></a>';
        });
        $grid->column('title','Tên hãng');
        $grid->column('slug'); 
      
        $grid->column('active', 'Sử dụng')->display(function () {
            if ($this->active == 1) {
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
        $show = new Show(ProductBrands::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->logo('logo');
        $show->content('content');
        $show->active('active');
        $show->seo_meta_title('seo_meta_title');
        $show->seo_meta_description('seo_meta_description');
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
        $form = new Form(new ProductBrands);
        Admin::script(
            "$('#title').keyup(function () {
				var txtClone = $(this).val();
				$('#slug').val(locdau(txtClone));
				$('#seo_meta_title').val(txtClone);
            });
			"
        );
        $form->hidden('ID');
        $form->text('title', 'Tên hãng');
        $form->text('slug', 'Slug');
        $form->image('logo', 'Logo')->retainable()->required();
        $form->ckeditor('content', 'content');
        $active = [
            'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
        ];
        $form->switch('active', 'Sử dụng')->states($active)->default(1);
        $form->text('seo_meta_title', 'SEO Title');
        $form->textarea('seo_meta_description', 'SEO Description')->rows(2);

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
