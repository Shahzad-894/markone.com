<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class mainController extends Controller
{
    
    public function index(){  
        $kids = DB::Table('product')->where('status','enable')->where('product_cat','Kides')->get();
        $cosmatics = DB::Table('product')->where('status','enable')->where('product_cat','Cosmetics')->get();
        $ladies = DB::Table('product')->where('status','enable')->where('product_cat','Ladies')->get();        
        $gents = DB::Table('product')->where('status','enable')->where('product_cat','Gents')->get();
         return View("frontend/index",compact('kids','cosmatics','ladies','gents')); 
    }

    public function all_products(){
        $all_products =DB::Table('product')->where('status','enable')->paginate(12);
        return View("frontend/all_products",compact('all_products')); 
    }
    public function product_detail($id){
         $related_products =DB::Table('product')
                    ->where('status','enable')
                    ->inRandomOrder()
                    ->limit(10)
                    ->get();
         $product_detail = DB::Table('product')->where('status','enable')->where('id',$id)->first();
         return View("frontend/productdetail",compact('product_detail','related_products')); 
        
    }
    public function product404(){
        return View("frontend/product404");
        
    }
    public function contact(){
        return View("frontend/contact"); 
        
    }
    public function search_product(Request $req)
    {
     $data= $req['search'];
     $result = DB::Table('product')->where('title', 'like', '%'.$data.'%')->where('status','enable')->paginate(12);
     // print_r($result);
     return view('frontend/search_result',compact('result'));
    }
   public function adminlogin()
   {
    return view('frontend/adminlogin');
   }
   public function admin_login(Request $request)
   {
     $admin= DB::Table('admin')->where('email',$request['u_email'])->where('password',$request['password'])->get();
            if(count($admin)>0){
                $request->session()->put('admin_id', $admin[0]->id);
                $request->session()->put('role','admin'); 
                $request->session()->put('admin_email',$request['u_email']); 

                return redirect('/admindashboard');
            }
            else{
                Session::flash('msg','Email or Password is Wrong');
                return back();
            }
   }

     /// add to cart section ///

public function add_to_cart(Request $request, $id)
{
    $product =DB::Table('product')->where('status','enable')->where('id',$id)->first();
    if(!$product)
    {
       abort(404);
    }
    $cart = session()->get('cart');
    if(!$cart) {
            $cart = [
                    $id => [
                        "title" => $product->title,
                        "price" => $product->price,
                        "quantity" => $request['quantity'],
                        "total_price" => $request['total_price'],
                        "image" => $product->image,
                        "product_id"=>$product->id,
                        ]
            ];
            session()->put('cart', $cart);
            session()->flash('success_cart', 'Product Added to Cart Successfully');
            return back();
        }

        if(isset($cart[$id])) {                  
            $cart[$id]['quantity'] += $request['quantity']; 
            session()->put('cart', $cart);                              
        }else{
        $cart[$id] = [
            "title" => $product->title,
            "price" => $product->price,
            "quantity" =>$request['quantity'],
            "total_price"=>$request['total_price'],
            "image" => $product->image,
            "product_id"=>$product->id,
            
        ];
 
        session()->put('cart', $cart);
        session()->flash('success_cart', 'Product Added to Cart Successfully');
        return back();
        }
        session()->flash('success_cart', 'Product Added to Cart Successfully');
       return back();
}

public function cart_view()
{
    return View('frontend/cart');
}

public function update_item(Request $request)
{
     if($request->id and $request->quantity)
        {
            $cart = session()->get('cart'); 
            $cart[$request->id]["quantity"] = $request->quantity; 
             session()->put('cart', $cart);
        }
}

public function delet_item($id)
{
     session::forget('cart.'.$id);
     return redirect()->back();
}
public function cartcount(){
    $count=0;
    foreach(session('cart') as $id => $details)
    {
    $count=$count+1;
    }
    return $count;        
}

public function checkout()
{
    return View('frontend/checkout');
}

public function registor_account(Request $request)
{
    $emails =$request['email'];
    $check = DB::Table('orders')->where('email',$emails)->first();
    if(!$check)
    {
        
         $customer_data =array(
            'name'=>$request['name'],
            'address'=>$request['address'],
            'contact'=>$request['contact'],
            'email'=>$request['email'],
            'post_code'=>$request['post_code'],
            'city'=>$request['city'],
            'town'=>$request['town'],
            'district'=>$request['district'],
           
         );
          DB::Table('customer_detail')->insert($customer_data);
          session()->flash('register', 'Your Account Registor Successfully. Please Sing In !');      
            return back();
    }else
    {
       session()->flash('register_already', 'Your Have Account!!. Please Sing In !');      
            return back();
    }
    
}

public function place_order(Request $request)
{
    $emails =$request['email'];
    $check = DB::Table('customer_detail')->where('email',$emails)->first();
    if(!empty($check))
    {date_default_timezone_set("Asia/Karachi");        
         $date=date('d-m-Y');
         $time= date("h:i A");
          $customer_data =array(
            'name'=>$check->name,
            'address'=>$check->address,
            'contact'=>$check->contact,
            'email'=>$check->email,
            'post_code'=>$check->post_code,
            'city'=>$check->city,
            'town'=>$check->town,
            'district'=>$check->district,
             'date'=>$date,
            'time'=>$time,
         );
         $order_id= DB::Table('orders')->insertGetId($customer_data);

         foreach(session('cart') as $id => $details){
            $data=array(
                'order_id'=>$order_id,
                'image'=>$details['image'],
                'product_name'=>$details['title'],                
                'product_id'=>$details['product_id'],
                'price'=>$details['price'],
                'quantity'=>$details['quantity'],
                'total'=>$details['quantity'] * $details['price']
            );
            DB::Table('order_child')->insert($data);

        }
            $request->session()->forget('cart');
            session()->flash('order_placed', 'Order Placed Successfully!');        
            return back();
    }else
    {
        session()->flash('no_account', 'Your Have No Account!!. Please Registor Account !');      
            return back();
    }
      
}
public function cart_empty(Request $request)
{
     $request->session()->forget('cart');    
     return redirect('/');
}
     ///  end add to cart section  /// 

public function contact_message(Request $request)
{
    date_default_timezone_set("Asia/Karachi");        
         $date=date('d-m-Y');
         
    $data =array(
        'name'=>$request['name'],
        'email'=>$request['email'],
        'subject'=>$request['subject'],
        'message'=>$request['message'],
        'date'=>$date,
     
    );
     DB::table('contact_us')->insert($data);
     session()->flash('contact','Your Email Send to Markone Successfully');
     return back();
}










   // logout method

   public function logoutuser(Request $request)
   {
        $request->session()->forget('admin_email');
        $request->session()->forget('admin_id');
        $request->session()->forget('role');
        $request->session()->forget('msg');

        return redirect('/');
   }
}


