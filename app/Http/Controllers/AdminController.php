<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB; 
use log;
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
        Log::info('result is '.$result);    // just for checking result (storage/logs)    
        if (!empty($result))
        {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return redirect()->to('/dashboard');
        }else{
            Session::put('message', 'Email or Password Invalid');
            return redirect()->to('/login');
        }
        return view('admin.dashboard');
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
    }
}
