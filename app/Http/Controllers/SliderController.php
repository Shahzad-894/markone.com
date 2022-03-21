<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class slidercontroller extends Controller
{
    
    public function slider(){
        $sliders=DB::table('sliders')->get(); //table name        
        return view('admin.sliders.list',array('sliders'=>$sliders));

    }
    public function add_slider(){
        return view('admin.sliders.add');

    }// for  form view method
    public function insert_slider(Request $request)
    {
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName();
        $image->move('public/images/product/',$image_name);


        $sliders=array(
            'save_tag'=>$request['save_tag'],            
            'title'=>$request['title'],
            'status'=>"disable",
            'image'=>$image_name,
        );
        DB::Table('sliders')->insert($sliders);
      return redirect('sliders');
      
    }

      public function edit_slider($id)
    {
        $sliders =DB::Table('sliders')->where('id',$id)->first();
        return View('admin/sliders/edit',compact('sliders'));
    }
     public function update_slider(Request $request)
    {
        $id = $request['slider_id'];
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
                
                $sliders=array(
                    'save_tag'=>$request['save_tag'],            
                    'title'=>$request['title'],
                    'status'=>"disable",
                    'image'=>$image_name,
                    );
                DB::Table('sliders')->where('id',$id)->update($sliders);
        return redirect('/sliders');
    }

    public function slider_enable($id)
    {
        $sliders=array(
            'status'=>'enable'
        );
        DB::Table('sliders')->where('id',$id)->update($sliders);
        return back();
    }

    public function slider_disable($id)
    {
        $sliders=array(
            'status'=>'disable'
        );
        DB::Table('sliders')->where('id',$id)->update($sliders);
        return back();
    }
    public function delete_slider($id){
        DB::Table('sliders')->where('id',$id)->delete();
        return back();
    }// for delete data method
}
