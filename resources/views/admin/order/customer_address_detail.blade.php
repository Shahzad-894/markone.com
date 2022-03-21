@extends('admin.main')
@section('middle')

<div class="col-sm-12">
    <div class="box">
        <div class="box-header">

            <h4 class="box-title">Customer And Order Detail </h4>
        </div>
        <!-- /.box-header -->


        <br>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <td>Customer Name</td>
                        <td>Email</td>
                        <td>Contact</td>
                        <td>Country</td>
                        <td>Town</td>
                        <td>Address</td>
                        <td>P_Code</td>
                        <td>Provines</td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$customer_detail->name}}</td>
                        <td>{{$customer_detail->email}}</td>
                        <td>{{$customer_detail->contact}}</td>
                        <td>{{$customer_detail->city}}</td>
                        <td>{{$customer_detail->town}}</td>
                        <td>{{$customer_detail->address}}</td>
                        <td>{{$customer_detail->post_code}}</td>
                        <td>{{$customer_detail->district}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->



@endsection