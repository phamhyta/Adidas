<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
