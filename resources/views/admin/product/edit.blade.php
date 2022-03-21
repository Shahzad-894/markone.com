@extends('admin.main')
@section('middle')
<br>
<h3>Edit Product</h3>
<div style="padding: 30px;border: 2px solid gray;">
    <form role="form" action="{{ url('update_product') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="product_id" value="{{ $data->id }}">
        <input type="hidden" name="status" value="{{ $data->status }}">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $data->title}}" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control" >
                        <input type="hidden" name="old_image" value="{{ $data->image}}" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Releted View Images</label><span
                            style="color: red;margin-left: 20px;font-weight: bold;">(Only Select 3 Images)</span>
                        <input type="file" name="images[]" class="form-control" multiple >
                        <input type="hidden" name="old_images" value="{{ $data->related_images}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" name="price" class="form-control" value="{{ $data->price}}" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Category</label>
                        <select class="form-control" name="product_cat" required="">
                            <option value="">--Select Category--</option>
                            <option <?php if($data->product_cat == "Gents"){echo 'selected';} ?> value="Gents">Gents
                            </option>
                            <option <?php if($data->product_cat == "Kids"){echo 'selected';} ?> value="Kides">Kids
                            </option>
                            <option <?php if($data->product_cat == "Ladies"){echo 'selected';} ?> value="Ladies">Ladies
                            </option>
                            <option <?php if($data->product_cat == "Cosmetics"){echo 'selected';} ?> value="Cosmetics">
                                Cosmetics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" name="des" class="form-control" rows="5" required="">
                            {{ $data->description }}
                        </textarea>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection