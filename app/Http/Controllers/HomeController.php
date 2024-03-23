<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){

            $post=Post::all();
            $userType = Auth()->user()->userType;
            if($userType == 'user'){
                return view('home.homepage',compact('post'));
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
    public function homepage(){

        $post =Post::all();
        return view('home.homepage',compact('post'));
    }

    public function post_details($id){

        $post =Post::find($id);
    
        return view('home.post_details',compact('post'));
    }
}
