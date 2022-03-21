@extends('admin.main')
@section('middle')
<div style="padding: 30px;border: 2px solid gray;">  

        <h3>Insert New Slider</h3>
        <!-- <div class="row "  style="padding" >
            <input class="btn btn-primary" type="submit" value="Add Product">            
            <br><br>
        </div> -->
        <form role="form" action="{{ url('insert_slider') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="box-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Slider Heading:</label>
                                <input type="text" name="save_tag" class="form-control" placeholder="Enter Heading "><br>
                            </div>

                            <div class="form-group">
                                <label>Slider Title:</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title "><br>
                            </div>

                            <div class="form-group">
                                 <label>Slider Image:</label>
                                 <input type="file" name="image" class="form-control"><br>
                            </div>     
                        </div>
                        <!-- /.box-body -->
                        </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                     </div>
                     </div>   
        </form>
</div>

@endsection
