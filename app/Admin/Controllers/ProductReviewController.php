<?php

namespace App\Admin\Controllers;

use App\Models\ProductReviews;
use App\Http\Controllers\Controller;
use App\Models\products;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProductReviewController extends Controller
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
        $grid = new Grid(new ProductReviews);
        if (request()->productid != null) {
            $grid->model()->where('product_id', request()->productid);
        }
        $grid->id('ID')->sortable()->filter();
        $grid->column('product_id', 'Sản phẩm')->display(function () {
            $product = products::find($this->product_id);
            if ($product != null) {
                return "<a href='/admin/product-reviews/".$this->id."/edit'>".$product->title."</a>";
            }
        });
        $grid->column('product_rate', 'Đánh giá')->display(function($product_rate){
            if($product_rate==1){
                return '<i class="fa fa-star"></i>';
            }
            if($product_rate==2){
                return '<i class="fa fa-star"></i><i class="fa fa-star"></i>';
            }
            if($product_rate==3){
                return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
            }
            if($product_rate==4){
                return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
            }
            if($product_rate==5){
                return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
            }
        })->filter([
            1 => '<i class="fa fa-star"></i>',
            2 => '<i class="fa fa-star"></i><i class="fa fa-star"></i>',
            3 => '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>',
            4 => '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>',
            5 => '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>',
        ]);
        $grid->column('product_reviewer_name', 'Người gửi')->filter();
        $grid->column('product_reviewer_email', 'Email')->filter();
        $grid->column('product_review_content', 'Nội dung');
        $grid->column('product_review_review_active', 'Duyệt')->display(function(){
            if($this->active == 1){
                return '<a href="'.route('admin.updateStatus',$this->id).'" class="btn btn-sm btn-danger">Hủy hiện thị</a>';
            }
            if($this->active == 0){
                return '<a href="'.route('admin.updateStatus',$this->id).'" class="btn btn-sm btn-success">Duyệt hiện thị</a>';
            }
        });
        $grid->created_at(trans('admin.created_at'));

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
        $show = new Show(ProductReviews::findOrFail($id));

        $show->id('ID');
        $show->product_id('product_id');
        $show->product_rate('product_rate');
        $show->product_review_content('product_review_content');
        $show->product_reviewer_name('product_reviewer_name');
        $show->product_reviewer_email('product_reviewer_email');
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
        $form = new Form(new ProductReviews);

        $form->hidden('ID');
        $form->text('product_id', 'Mã sản phẩm');
        $form->select('product_rate', 'Đánh giá')->options([
            1 => '1*',
            2 => '2*',
            3 => '3*',
            4 => '4*',
            5 => '5*',
        ]);

        $form->text('product_reviewer_name', 'Người gửi');
        $form->text('product_reviewer_email', 'Email người gửi');
        $form->ckeditor('product_review_content', 'Nội dung');
        return $form;
    }
    function updateStatus($id) {
        $productReview = ProductReviews::find($id);
       
        if($productReview->active ==0){
            $productReview->active=1; 
        }else{
            $productReview->active=0; 
        }
        $productReview->save();
        return redirect()->back();
    }
}
