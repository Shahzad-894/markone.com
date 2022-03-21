@extends('admin.main')
@section('middle')
<br>
<h3>Insert Product</h3>
<div style="padding: 30px;border: 2px solid gray;">
    <form role="form" action="{{ url('insert_product') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Product Name" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label><span
                            style="color: red;margin-left: 20px;font-size:14px">( Image Size: 250 X 300 )</span>
                        <input type="file" name="image" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Releted View Images</label><span
                            style="color: red;margin-left: 20px;">( Only Select 3 Images & Sizes 250 X 300 )</span>
                        <input type="file" name="images[]" class="form-control" multiple required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" name="price" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Item No</label>
                            <input type="text" name="item_no" class="form-control" >
                        </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Category</label>
                        <select class="form-control" name="product_cat" required="">
                            <option value="">--Select Category--</option>
                            <option value="Gents">Gents</option>
                            <option value="Kides">Kids</option>
                            <option value="Ladies">Ladies</option>
                            <option value="Cosmetics">Cosmetics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" name="des" class="form-control" rows="8" required=""></textarea>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection