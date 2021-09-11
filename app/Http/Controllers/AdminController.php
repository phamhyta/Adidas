<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB; 
use log;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB as FacadesDB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('admin') -> where('admin_email', $admin_email) -> where('admin_password', $admin_password) -> first();
        if($result){
            $request->session()->put('admin_name', $result-> admin_name);
            $request->session()->put('admin_id', $result-> admin_id);
            // session::put('admin_name', $result -> admin_name);
            // session::put('admin_id', $result -> admin_id);
            return redirect::to('/dashboard');
        }else{
            $request->session()->put('message', 'Mật khẩu hoặc tài khoản sai');
            //session::put('message', 'Mật khẩu hoặc tài khoản sai');
            return redirect::to('/login');
        }
    }
    public function logout(){
        return view('admin.login');
    }
}
