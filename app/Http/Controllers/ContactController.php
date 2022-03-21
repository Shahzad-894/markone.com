<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ContactController extends Controller
{
    public function contact_email()
    {
        $data= DB::Table('contact_us')->orderBy('id', 'DESC')->get();
        $not_seen= DB::Table('contact_us')->where('status','not_seen')->count();
        return View('admin/contact/list',compact('data','not_seen'));
    }

    public function seen_email($id)
    {
        $data= array(
            'status'=>"seen",
        );
        DB::Table('contact_us')->where('id',$id)->update($data);
        return back();        
    }

    public function delete_email($id)
    {
        DB::Table('contact_us')->where('id',$id)->delete();
        return back();        
    }
}
