@extends('admin.main')
@section('middle')
<br>
<h3>Update Slider</h3>
<div style="padding: 30px;border: 2px solid gray;">  
    
        <form role="form" action="{{ url('update_slider') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="slider_id" value="{{ $sliders->id }}">
                    <input type="hidden" name="status" value="{{ $sliders->status }}">
                    <div class="box-body">
                        <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Slider Heading:</label>
                            <input type="text" name="save_tag" class="form-control" value="{{ $sliders->save_tag}}"><br>
                        </div>
                        <div class="form-group">
                            <label>Slider Title:</label>
                            <input type="text" name="title" class="form-control" value="{{ $sliders->title}}"><br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="image" class="form-control" >
                            <input type="hidden" name="old_image" value="{{ $sliders->image}}">
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