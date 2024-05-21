<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SupervisorController extends Controller
{
    public function dashboard(){
        return view('supervisor/dashboard'); 
    }

    public function logout(){
        Auth::guard('supervisor')->logout(); 
        return redirect()->route('multilogin'); 
    }
}
