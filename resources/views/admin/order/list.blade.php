@extends('admin.main')
@section('middle')

<div class="col-sm-12">
    <div class="box">

        @if(session()->has('order_email'))
        <div style="color: #fff;background-color:green; font-weight: bold;text-align: center;"
            class="alert alert-success" role="alert">
            {{session()->get('order_email')}}
        </div>
        @endif
        @if(session()->has('order_cencel'))
        <div style="color: #fff;background-color:red;text-align: center;" class="alert alert-danger" role="alert">
            {{session()->get('order_cencel')}}
        </div>
        @endif
        <div class="box-header">

            <h4 class="box-title">Customer Order Detail </h4>
        </div>
        <!-- /.box-header -->


        <br>
        <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead style="font-size:13px">
                        <tr>

                            <td>Order#</td>
                            <td>Customer Name</td>
                            <td>Order<br> Detail</td>
                            <td>Delivery<br>Charges</td>
                            <td>Order Date</td>
                            <td>Order time</td>

                            <td>Cencel</td>
                            <td>Seen</td>
                            <td style="text-align:center;">Delivery<br>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($order_data as $data)
                        <tr>

                            <td width="5%">{{ $data->order_id }}</td>
                            <td width="18%">{{ $data->name }}</td>
                            <td width="5%"><a href="{{ url('customer_detail',$data->id) }}"
                                    class="btn btn-success btn-sm">
                                    <i class="fas fa-eye"></i>
                            </td>
                            <td>{{ $data->delivery_charges }}</td>
                            <td width="12%">{{ $data->date }}</td>
                            <td width="12%">{{ $data->time }}</td>
                            <td width="5%">
                                <a href="{{ url('order_cencel') }}/{{ $data->order_id }}"
                                    class="btn btn-danger btn-sm"><i class="fas fa-trash "></i></a>
                            </td>

                            @if($data->seen_status=='N')
                            <td style="color: red;font-size:13px"><b>Not Seen</b></td>
                            @else
                            <td style="color: #008000;">Seen</td>
                            @endif
                            @if($data->compilation_status=='N')
                            <td style="color: red;font-size:13px"><b>Pending</b></td>
                            @else
                            <td style="color: #008000;font-size:15px">Successfully<br><span
                                    style="margin-left: 20px">Done</span></td>
                            @endif

                            <td width="20%" style="font-size:15px">
                                @if($data->progress=='deliverd')
                                <!-- <a href="#"><button class="btn btn-primary">Completed</button></a> -->
                                <a href="{{ url('view_order_detail') }}/{{ $data->order_id }}"
                                    class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                @elseif($data->progress=='in_progress')
                                <a href="{{ url('view_order_detail') }}/{{ $data->order_id }}"
                                    class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{ url('deliverd') }}/{{ $data->order_id }}"><button
                                        class="btn btn-success btn-sm">Deliver</button></a>
                                @else
                                <a href="{{ url('view_order_detail') }}/{{ $data->order_id }}"
                                    class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{ url('in_progress') }}/{{ $data->order_id }}"><button
                                        class="btn btn-primary btn-sm">In_Progress</button></a>
                                @endif
                            </td>
                        </tr>

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


<script type="text/javascript">
function autoRefreshPage() {
    window.location = window.location.href;
}
setInterval('autoRefreshPage()', 15000);
</script>
@endsection