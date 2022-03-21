<!DOCTYPE html>
<html>
<head>
    <title>Markone</title>
   

</head>
<body>
    <h3>{{ $details['title'] }} <span>Order No : {{$details['order_no']}}</span></h3>
   
    <b>{{ $details['body'] }}</b>
   
    <p>{{ $details['message'] }}</p>
    
    <br>

    <?php $data = $details['order_details'];?>
    <strong>Order Summery</strong>
    <table style="border:1px solid black;width: 100%;">
        <tr>
            <td style="padding: 10px 4px 10px 4px ;">Title</td>
            <td style="padding: 10px 4px 10px 4px ">Price | Quantity</td>
            <td style="padding: 10px 4px 10px 4px ;">Total</td>
            
        </tr>
       <tbody>
       @foreach($data as $val)
           <tr>        
               <td>{{$val->product_name}}</td>
               <td style="border-left: 1px solid black;padding: 10px 0px 10px 18px">{{$val->price}} x {{ $val->quantity}}</td>
               <td>{{$val->total}}</td>
           </tr>
       @endforeach
       </tbody>
     
    </table>
    <br>
   <hr>
   <br>
    <p><span>Subtotal : <strong>Rs {{ $details['total_without_d_charges'] }}.00 PKR</strong> </span></p>
    
    <p><span>Delivery Charges : <strong>Rs {{ $details['delivery_charges'] }}.00 PKR</strong></span></p>
    <hr>
    <p><span>Net Amount : <strong style="font-size:19px">Rs {{ $details['final_total'] }}.00 PKR</strong></span></p>

  <h4>Customer Information</h4>
  <div style="width:50%;float:left;">
      <p><strong>Shipping Address</strong></p>
      <p>{{ $details['customer_name'] }}</p>
      <p>{{ $details['address'] }}</p>
      <p>{{ $details['post_code'] }}</p>
      <p>{{ $details['country'] }}</p>
  </div>
  <div style="width:50%;float:right;">
       <p><strong>Billing Address</strong></p>
      <p>{{ $details['customer_name'] }}</p>
      <p>{{ $details['address'] }}</p>
      <p>{{ $details['post_code'] }}</p>
      <p>{{ $details['country'] }}</p>
  </div>
  <p>Thank you</p>
</body>
</html>