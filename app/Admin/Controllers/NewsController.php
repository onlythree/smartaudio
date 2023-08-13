<?php

namespace App\Admin\Controllers;

use App\Models\news;
use App\Models\newscategories;
use App\Http\Controllers\Controller;
use App\Models\NewsTags;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
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
        $grid = new Grid(new news);
        $grid->model()->orderby('id', 'desc');
        $grid->id('ID')->filter()->sort();

        $grid->column('images', 'Ảnh đại diện')->display(function ($images) {
            if ($images != null) {
                return '<a href="' . route('admin.news.edit', $this->id) . '"><img src="' . Storage::url($images) . '" style="width:30px;height:30px;"/></a>';
            } else {
                return '<a href="' . route('admin.news.edit', $this->id) . '"><img src="' . asset('../asset/image/noimage.jpg') . '" style="width:30px;height:30px;"/></a>';
            }
        });
        $grid->column('title', 'Tiêu đề')->filter('like')->display(function ($title) {
            return '<a href="' . route('admin.news.edit', $this->id) . '">' . $title . '</a>';
        });
        $grid->column('news_cateid', 'Danh mục')->display(function () {

            $cateString = '';

            foreach ($this->news_cateid as $value) {
                $category = newscategories::find($value);
                $cateString .= '<label class="btn btn-xs btn-default">' . $category->title . '</label> ';
            }

            return $cateString;
        });
        $grid->column('order', 'Sort');
        $grid->column('active', 'Sử dụng')->display(function () {
            if ($this->active == 1) {
                return '<label class="btn btn-xs btn-success">Đang sử dụng</label>';
            }
            return '<label class="btn btn-xs btn-warning">Không sử dụng</label>';
        })->filter([1 => 'Được sử dụng', 0 => 'Không sử dụng']);
        $grid->column('tags', 'Tags')->display(function ($tags) {
            $string = '';
            if ($tags != '') {
                $tag = explode(',', $tags);
                foreach ($tag as $key => $value) {
                    $string .= '<label class="btn btn-xs btn-primary">' . $value . '</label> ';
                }
            }
            return $string;
        });
        // $grid->column('tags', 'Tags')->editable('textarea');
        $grid->column('views', 'Xem trước')->display(function () {
            return '<a href="' . route('detail', $this->slug) . '" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Xem sản phẩm</a>';
        });
        $grid->column('copy', 'Sao chép')->display(function () {
            return '<a href="' . route('admin.copy-news', $this->id) . '" class="btn btn-xs btn-default"><i class="bi bi-clipboard-plus"></i> Sao chép</a>';
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
        $show = new Show(news::findOrFail($id));

        $show->id('ID');
        $show->title('title');
        $show->slug('slug');
        $show->order('order');
        $show->active('active');
        $show->images('images');
        $show->short_description('short_description');
        $show->content('content');
        $show->news_cateid('news_cateid');
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
        $form = new Form(new news);

        Admin::script(
            "$('#title').keyup(function () {
            var txtClone = $(this).val();
            $('#slug').val(locdau(txtClone));
            $('#seo_meta_title').val(txtClone);
            });"
        );

        $form->hidden('id');
        $form->column(1 / 2, function ($form) {
            $active = [
                'on'  => ['value' => 1, 'text' => 'Bật', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Tắt', 'color' => 'danger'],
            ];
            $form->switch('active', 'Sử dụng')->states($active)->default(1);
            $form->text('title', 'Tiêu đề')->required();
            $form->text('slug', 'Slug')->required();
            $form->multipleSelect('news_cateid', 'Danh mục')->options(newscategories::orderby('order', 'asc')->get()->pluck('title', 'id'))->required();
            $form->number('order', 'Sắp xếp')->default(0);
            $form->textarea('short_description', 'Mô tả ngắn')->rows(3);
            // $form->tags('tags', 'Tags');
            // $form->textarea('tags', 'Tags');
        });
        $form->column(1 / 2, function ($form) {

            $form->image('images', 'Ảnh đại diện')->retainable()->removable();
            $form->text('seo_meta_title', 'SEO Title');
            $form->textarea('seo_meta_description', 'SEO Description')->rows(2);
            $form->multipleImage('other_image', 'Ảnh mô tả')->retainable();
        });

        $form->column(12, function ($form) {
            $form->ckeditor('content', 'Mô tả')->rows(10)->setWidth(10, 1);
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
    function copyNews()
    {
        $news = news::find(request()->newsid);
        $newNews = $news->replicate();
        $newNews->save();
        return redirect()->route('admin.news.index');
    }
}
