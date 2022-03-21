@extends('admin.main')
@section('middle')


   
    
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                     
                    <h4 class="box-title">Order Details </h4>
                </div>
               
                   <br>
                <div class="box-body">
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                           <th>SR #</th>
                            <th>Product Name</th>
                            <th>Image</th>
                         
                            <th>quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $count=0; $full_total =0; ?>
                            @foreach($order_detail as $detail)
                            <?php $total =$detail->price * $detail->quantity;?>
                            <?php $full_total +=$detail->price * $detail->quantity;?>
                            <tr>
                                <td>{{ ++$count }}</td>
                                <td>{{ $detail->product_name }}</td>
                                <td><img style="width: 60px; height:60px" src="{{asset('public/images/product/'.$detail->image)}}"></td>
                                <td>{{ $detail->quantity }}</td>
                                <td>{{ $detail->price }}</td>
                                <td>{{ $total }}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                    <div>
                        @if(session()->has('charges'))
                           <div style="color: #fff;background-color:green; font-weight: bold;text-align: center;" class="alert alert-success" role="alert" >
                            {{session()->get('charges')}} Charges Add Successfully
                            </div>
                            @endif
                        <br>
                        <hr style="background-color:red;height: 1px;">
                            <h6>Add Delivery Charges As Per Address </h6>
                         <form action="{{ url('add_delivery_charge')}}" method="post">
                        <div class="col-sm-4 mt-3">
                             <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                             <input type="hidden" name="order_id" value="{{$detail->order_id}}">
                             <input type="hidden" name="order_charges" id="order_charges">
                             <select class="form-control charges" name="charges" id="ch" required="">
                                 <option value=""> --Select Delivery Charges--</option>
                                 <option value="150"> In City 150</option>
                                 <option value="250"> Out City 250</option>
                             </select>
                        <h4 class="mt-4">   Total :
                           @if($order_detail !='')
                         <span style="color:red">
                           <?php echo $full_total;?>
                           <input type="hidden" name="final_total" value="<?php echo $full_total ?>" id="ft">
                         </span>
                           <h5>Delivery Charges = <span id="dc">
                           @if($charges == 0)
                             0
                            @else
                            {{ $charges }}  
                            @endif
                            </span></h5>
                           <!-- dc for delivery charges -->
                           <br>

                           <!-- this total with delivery charges -->
                           <h4 style="border:1px solid gray; padding: 15px">Final Total PKR= <span id="final"><?php echo $full_total + $charges;?></span></h4>
                           @endif
                       </h4>
                         </div>
                        <button class="btn btn-success pull-right mb-2 ml-3" type="submit">Add Charges</button>
                         </form>
                <a href="{{url('order_list')}}" class="btn btn-primary mb-2 ml-3">Back To Order List</a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
  
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
  
    $("select.charges").change(function(){
        var charges = parseInt($(this).children("option:selected").val());
        var total = parseInt($("#ft").val());
        var final = charges+total;
        // alert(final);
        $('#dc').text();
        $('#dc').text(charges);
        $('#order_charges').val(charges); //this is order charges and submit this form with charges and order id and update the order table column delivery charges 0 to seleted charges
        $('#final').text();
        $('#final').text(final);
    });

   
</script>
@endsection