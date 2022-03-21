<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class productController extends Controller
{
    
      public function __construct()
    {
       $this->middleware('adminCheck');
    }


     public function list()
    {
        $data = DB::Table('product')->orderBy('id', 'DESC')->get();
        return View ('admin/product/list',compact('data'));
    }

    public function add()
    {
        return View('admin/product/add');
    }

    public function insert_product(Request $request)
    {
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName();
        $image->move('public/images/product/',$image_name);

            $images=array();
            if($files=$request->file('images')){
                foreach($files as $file){
                    $name=$file->getClientOriginalName();
                    
                    $file->move('public/images/product/',$name);
                    $images[]=$name;
                }
            }

        $data=array(
            'title'=>$request['title'],            
            'price'=>$request['price'],
            'product_cat'=>$request['product_cat'],
            'item_no'=>"no",
            'status'=>"disable",
            'image'=>$image_name,
            'related_images'=>  implode("|",$images),
            'description' =>$request['des'],
        );
        DB::Table('product')->insert($data);
      return redirect('products');
      
    }

      public function edit($id)
    {
        $data =DB::Table('product')->where('id',$id)->first();
        return View('admin/product/edit',compact('data'));
    }

     public function update_product(Request $request)
    {
        $id = $request['product_id'];
        $image_name="";
        $images=array();
                if($request->has('image'))
                {
                    $image=$request->file('image');
                    $image_name=$image->getClientOriginalName();
                     $image->move('public/images/product/',$image_name);
                 }else{
                    $image_name =$request['old_image'];
                 }
                // echo $image_name;      ///this is image obj 

                if($files = $request->file('images')){
                    foreach($files as $file){
                        $name=$file->getClientOriginalName();                        
                        $file->move('public/images/product/',$name);
                        $images[]=$name;
                    }
                }else{
                   $images[]=$request['old_images'];
                }
                $product=array(
                        'title'=>$request['title'],
                        'price'=>$request['price'],
                        'product_cat'=>$request['product_cat'],
                        'item_no'=>'no',
                        'status'=>$request['status'],
                        'description'=>$request['des'],
                        'image'=>$image_name,
                        'related_images'=>implode("|",$images)

                    );
                DB::Table('product')->where('id',$id)->update($product);
        return redirect('/products');
    }

    public function veiw_product_related_images($id)
    {
        $related_images =DB::Table('product')->where('id',$id)->first();
        // print_r($related_images); 
        return view('admin/product/related_images',compact('related_images'));
    }

    public function product_enable($id)
    {
        $data=array(
            'status'=>'enable'
        );
        DB::Table('product')->where('id',$id)->update($data);
        return back();
    }

    public function product_disable($id)
    {
        $data=array(
            'status'=>'disable'
        );
        DB::Table('product')->where('id',$id)->update($data);
        return back();
    }

    public function delete_product($id)
    {
        DB::Table('product')->where('id',$id)->delete();
        return back();
    }
}
