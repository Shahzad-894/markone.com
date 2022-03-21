<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdmindashboardController extends Controller
{
    public function __construct()
    {
       $this->middleware('adminCheck');
    }

     public function index()
    {
        return View ('admin/index');
    }

    public function admin_list()
    {
        $data = DB::table('admin')->get();
        return View ('admin/admin_list/list',compact('data'));
    }

    public function edit_admin($id)
    {
        $data = DB::table('admin')->where('id',$id)->first();
        return View ('admin/admin_list/edit',compact('data'));
    }

    public function update_admin(Request $request)
    {
        $id = $request['id'];
        $data =array(
            'email' =>$request['email'],
            'password' =>$request['password'],
        );
        DB::table('admin')->where('id',$id)->update($data);
        Session::flash('msg','Admin Information Updated Successfully');
        return back();
        
    }
}
