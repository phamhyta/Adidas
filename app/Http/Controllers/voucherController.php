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
class voucherController extends Controller
{
    public function add_voucher(){
        return view('admin.add_voucher');
    }
    public function all_voucher(){
        $all_voucher = DB::table('voucher')->get();
        $manage_voucher = view('admin.all_voucher')->with('all_voucher', $all_voucher);
        return view('admin.adminLayout')->with('admin.all_voucher', $manage_voucher);
    }
    public function save_voucher(Request $request){
        $data = array();
        $data['voucher_desc'] = $request -> voucher_desc;
        $data['percent'] = $request -> percent;
        $data['decrease'] = $request -> decrease;
        $data['create_at'] = $request -> create_at;
        $data['HSD'] = $request -> HSD;
        DB::table('voucher')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('add_voucher');
    }
    public function edit_voucher($id_voucher){
        $edit_voucher = DB::table('voucher')->where('id_voucher', $id_voucher)->get();
        $manage_voucher = view('admin.edit_voucher')->with('edit_voucher', $edit_voucher);
        return view('admin.adminLayout')->with('admin.edit_voucher', $manage_voucher);

    }
    public function update_voucher(Request $request, $id_voucher){
        $data = array();
        $data['voucher_desc'] = $request -> voucher_desc;
        $data['percent'] = $request -> percent;
        $data['decrease'] = $request -> decrease;
        $data['create_at'] = $request -> create_at;
        $data['HSD'] = $request -> HSD;
        DB::table('voucher')->where('id_voucher', $id_voucher) -> update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all_voucher');
    }
    public function delete_voucher($id_voucher){
        DB::table('voucher')->where('id_voucher', $id_voucher) -> delete();
        Session::put('message', 'Xóa nhật sản phẩm thành công');
        return Redirect::to('all_voucher');
    }
}

