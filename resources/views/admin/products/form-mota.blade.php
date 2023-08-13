<fieldset>
    <legend>Thông tin sản phẩm</legend>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#short_description">Mô tả</a></li>
        <li><a data-toggle="tab" href="#content">Quyền lợi chi tiết</a></li>
        <li><a data-toggle="tab" href="#tech_description">Đối tượng nên mua</a></li>
    </ul>

    <div class="tab-content">
        <div id="short_description" class="tab-pane fade in active">
            <textarea name="content" id="content" class="form-control short_description" rows="10"
                placeholder="Input Mô tả">@if(!empty($products)) {{ $products->short_description }} @endif</textarea>
        </div>
        <div id="content" class="tab-pane fade">
            <textarea name="content" id="content" class="form-control content" rows="10"
                placeholder="Input Quyền lợi chi tiết">@if(!empty($products)) {{ $products->content }} @endif</textarea>
        </div>
        <div id="tech_description" class="tab-pane fade">
            <textarea name="tech_description" id="tech_description" class="form-control tech_description content"
                rows="10"
                placeholder="Input Đối tượng nên mua">@if(!empty($products)) {{ $products->tech_description }} @endif</textarea>
        </div>
    </div>
</fieldset>