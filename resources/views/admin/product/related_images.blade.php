@extends('admin.main')
@section('middle')


   
    
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                              <h3 class="box-title">Product Related Images </h3>
                </div>
                <!-- /.box-header -->
                
    
                   <br>
                <div class="box-body">
                  @foreach (explode('|', $related_images->related_images) as $image)
         
              <span style="margin-right: 30px;"><img style="width: 150px; height:150px" src="{{asset('public/images/product/'.$image)}}"></span>
                  @endforeach
                </div>
                <!-- /.box-body -->
                <br><hr style="margin-top: 1rem;margin-bottom: 1rem;border: 2px solid goldenrod; border-top: 1px solid golden"><br>
                <h4>Product Description :</h4>
                <div>
                    {{$related_images->description}}
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
  


@endsection