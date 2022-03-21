<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CountController extends Controller
{
    public function product_count( Request $request){      
        $total_products =DB::table('product')->where('status','enable')->count();
        return $total_products;
    }

    public function pending_order_count( Request $request){      
        $data =DB::table('orders')
        ->leftJoin('order_child','orders.id','=','order_child.order_id')->where('progress','!=','deliverd')->get();
        $pending_orders =$data->unique('order_id')->count();
        
        return $pending_orders;
        
    }

    public function deliverd_order( Request $request){      
        $data =DB::table('orders')
        ->leftJoin('order_child','orders.id','=','order_child.order_id')->where('progress','deliverd')->get();
        $deliverd_orders =$data->unique('order_id')->count();        
        return $deliverd_orders;
    }

    public function emails( Request $request){      
        $emails =DB::table('contact_us')->where('status','not_seen')->count();
        return $emails;
    }
}
