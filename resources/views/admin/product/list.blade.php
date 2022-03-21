@extends('admin.main')
@section('middle')




<div class="col-sm-12">
    <div class="box">
        <div class="box-header">
            <a href="{{ url('add_product') }}">
                <button class="btn btn-primary" style="float: right">
                    <i class="fas fa-fw fa-plus"></i>Add New Product</button></a>
            <h3 class="box-title">Product List</h3>
        </div>
        <!-- /.box-header -->


        <br>
        <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>SR #</td>
                            <td>Image</td>
                            <td>Title</td>
                            <td>Price</td>
                            <td>Catgory</td>
                            <td>Images</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1; ?>
                        @foreach($data as $val)
                        <tr>
                            <td>{{$count}}</td>
                            <td>
                                <img style="width: 60px; height:60px"
                                    src="{{asset('public/images/product/'.$val->image)}}">
                            </td>

                            <td>{{$val->title}}</td>

                            <td>{{$val->price}}</td>
                            <td>{{$val->product_cat}}</td>
                            <td> <a href="{{ url('veiw_product_related_images') }}/{{ $val->id }}"
                                    class="btn btn-success">
                                    <i class="fas fa-eye"> </i></td>
                            <td style="padding-top: 25px">@if($val->status=='disable')

                                <a href="{{ url('product_enable',$val->id) }}" class="btn btn-success btn-sm">Enable</a>
                                @else
                                <a href="{{url('product_disable',$val->id)}}" class="btn btn-warning btn-sm">Disable</a>
                                @endif
                            </td>
                            <td>
                                @if(session()->get('role')=='admin')
                                <a href="{{ url('edit_product') }}/{{ $val->id }}" class="btn btn-primary">
                                    <i class="fas fa-edit"> </i></a>

                                <a href="{{ url('delete_product') }}/{{ $val->id }}" class="btn btn-danger"
                                    style="margin-left: 4px;">
                                    <i class="fas fa-fw fa-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                        <?php $count=$count+1; ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->



@endsection