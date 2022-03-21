<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class OrderController extends Controller
{
    public function __construct()
    {
       $this->middleware('adminCheck');
    }
    
    public function list()
    {
           $order =DB::Table('order_child')
            ->leftJoin('orders','order_child.order_id','=','orders.id')
            ->orderBy('orders.id','DESC')
            ->where('order_child.progress','!=','cencel')
            ->get();
           $order_data=$order->unique('order_id');            
           return View('admin/order/list',compact('order_data'));
    }

    public function customer_detail($id)
    {
        $customer_detail = DB::table('orders')->where('id',$id)->first();
        return View('admin/order/customer_address_detail',compact('customer_detail'));
    }

    public function view_order_detail($id)
    {
        $data = DB::table('orders')->where('id',$id)->first();
        $charges = $data->delivery_charges;
        $order_detail = DB::table('order_child')->where('order_id',$id)->get();
        return View('admin/order/view_order_detail',compact('order_detail','charges'));
    }

    public function in_progress($id)
    {
      $data = array(
          'seen_status'=>'seen',
          'progress'=>'in_progress'
        );
       DB::table('order_child')->where('order_id',$id)->update($data);
        // // // // // // send email process to customers after all process
       //first wo get customer and order detail by order_id
       $customer_detail =DB::table('orders')->where('id',$id)->first();
       $order_detail =DB::table('order_child')->where('order_id',$id)->get();




        //this full total all product amount with multiply there quantity without delivery charges
       $total_all_product_amount =0;
            foreach($order_detail as $detail)
            {
                $total_all_product_amount += $detail->total;
            }
            

       $final_total = $customer_detail->delivery_charges + $total_all_product_amount;

        $details = [
            'title'=>'MARK ONE',
       'body' => 'Thanks You for Your Purchase.',
        'message' => "You'll soon receive anorder confirmation call  from +92 300 8532323. if you have any questions you can call ur at +92 300 8532323.",
        'customer_name'=>$customer_detail->name,
        'order_no'=>$customer_detail->id,
        'address'=>$customer_detail->address,
        'country'=>$customer_detail->city,
        'post_code'=>$customer_detail->post_code,
        'delivery_charges'=>$customer_detail->delivery_charges,
        'total_without_d_charges'=>$total_all_product_amount,
        'final_total'=>$final_total,
        'order_details'=>$order_detail,
        
    ];    
  
     $customer_email = $customer_detail->email;
     $emails =['shahzadsaleem641@gmail.com','info@markone.com.pk',$customer_email];
    \Mail::to($emails)->send(new \App\Mail\MyTestMail($details));
     session::flash('order_email','Order In Progress Stag and Email Send to Customer');
       return redirect()->back();
    }

    public function add_delivery_charge(Request $req)
    {
        $order_id = $req['order_id'];
        $charges = $req['order_charges'];
        $data =['delivery_charges' => $charges];
        DB::Table('orders')->where('id',$order_id)->update($data);
        session::flash('charges',$charges);
        return back();
    }


    public function deliverd($id)
    {
      $name = session()->get('role');
      $data = array(
          'status'=>$name,
          'progress'=>'deliverd',
          'compilation_status'=>'done'
        );
       DB::table('order_child')->where('order_id',$id)->update($data);

   return back();
    }

    public function order_cencle()
    {        
        $order =DB::Table('order_child')
        ->leftJoin('orders','order_child.order_id','=','orders.id')
        ->orderBy('orders.id','DESC')
        ->where('order_child.progress','cencel')
        ->get();
       $order_data=$order->unique('order_id');
        return view('admin/order_cencel/list',compact('order_data'));
    }

    public function order_cencel($id)
    {
        echo $id;
        $data =['progress'=>'cencel'];
        DB::table('order_child')->where('order_id',$id)->update($data);
        session::flash('order_cencel','Order Cencel');
        return back();
    }

}