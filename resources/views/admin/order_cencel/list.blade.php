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
        <div class="box-header">

            <h4 class="box-title">Cencel Orders </h4>
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

                            <td>Status</td>

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


                            @if($data->progress=='cencel')
                            <td style="color: red;font-size:13px"><b>Order Cencel</b></td>
                            @endif
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