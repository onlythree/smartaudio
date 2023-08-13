<?php

namespace App\Admin\Controllers;

use App\Models\menus;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class MenusController extends Controller
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
        $grid = new Grid(new menus);

        $grid->id('ID')->sortable();
        $grid->column('title', 'Menu')->display(function(){
            return '<a href="' . route('admin.menus.edit', $this->id) . '">' . $this->title . '</a>';
        })->filter();
        $grid->column('link', 'Link');
        $grid->column('order', 'Sắp xếp');
        $grid->column('parent_id', 'Nhóm chính')->display(function ($parentId) {
            $menu = menus::where('id', $parentId)->first();
            if (!empty($menu)) {
                return $menu->title;
            }
        });
        $grid->column('position', 'Vị trí')->display(function($position){
            if($position == 'top-bar'){
                return 'Đầu trang';
            }
            if($position == 'main-menu'){
                return 'Menu chính';
            }
        })->filter(['top-bar' => "Đầu trang", 'main-menu' => "Menu chính"]);
        $grid->column('type', 'Kiểu hiện thị')->display(function($type){
            if($type == '1'){
                return '1 Cột';
            }
            if($type == '2'){
                return '2 Cột';
            }
        })->filter(['1' => "1 Cột", '2' => "2 Cột"]);
        $grid->column('active', 'Sử dụng')->bool(['1' => true, '0' => false]);

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
        $show = new Show(menus::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->link('link');
        $show->order('order');
        $show->active('active');
        $show->parent_id('parent_id');
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
        $form = new Form(new menus);

        $form->hidden('id');
        $form->text('title', 'Tiêu đề')->required();
        $form->text('link', 'Link')->required();
        $form->number('order', 'Sắp xếp')->default(1);
        $form->select('parent_id', 'Nhóm lớn')->options(menus::selectOptions())->required(); 
        $form->select('position', 'Vị trí')->options([
            'top-bar' => 'Đầu trang',
            'main-menu' => 'Menu chính',
        ])->required();
        $form->select('type', 'Kiểu hiện thị')->options([
            '1' => '1 Cột',
            '2' => '2 Cột',
        ]);
        $active = [
            'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
        ];
        $form->switch('active', 'Sử dụng')->states($active)->default(1);
        $form->disableReset();
        return $form;
    }
}
