<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){

            $userType = Auth()->user()->userType;
            if($userType == 'user'){
                return view('dashboard');
            } elseif($userType=='admin'){
                return view('admin.adminHome');

            }elseif($userType =='agent'){
                return view('admin.agentHome');

            }
           
        }
        else{
             return redirect()->back();
        }
    }
    // public function post(){
    //     return view("admin.post");

    // }
}
