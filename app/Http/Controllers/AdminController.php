<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }
}
