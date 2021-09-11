<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Auth\Events\Login;
// use Illuminate\Support\Facades\Redirect;
session_start();
// use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    public function add_category(){
        return view('admin.add_category');
    }
    public function all_category(){
        $all_category = DB::table('product')->get();
        $manage_category = view('admin.all_category')->with('all_category', $all_category);
        return view('admin.adminLayout')->with('admin.all_category', $manage_category);
    }
    public function save_category(Request $request){
        $data = array();
        $data['product_name'] = $request -> category_name;
        $data['product_desc'] = $request -> category_desc;
        $data['id_category'] = $request -> category_status1;
        $data['id_class'] = $request -> category_status2;
        $data['price'] = $request -> price;
        $data['discount'] = $request -> discount;
        DB::table('product')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('add_category');
    }
    public function edit_category($id_product){
        $edit_category = DB::table('product')->where('id_product', $id_product)->get();
        $manage_category = view('admin.edit_category')->with('edit_category', $edit_category);
        return view('admin.adminLayout')->with('admin.edit_category', $manage_category);

    }
    public function update_category(Request $request, $id_product){
        $data = array();
        $data['product_name'] = $request -> category_name;
        $data['product_desc'] = $request -> category_desc;
        $data['id_category'] = $request -> category_status1;
        $data['id_class'] = $request -> category_status2;
        $data['price'] = $request -> price;
        $data['discount'] = $request -> discount;
        DB::table('product')->where('id_product', $id_product) -> update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all_category');
    }
    public function delete_category($id_product){
        DB::table('product')->where('id_product', $id_product) -> delete();
        Session::put('message', 'Xóa nhật sản phẩm thành công');
        return Redirect::to('all_category');
    }
}
