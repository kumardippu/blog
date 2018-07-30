<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){
        return view('production.index');
    }
    public function test(){
        //Auth::logout();
        $this->middleware('auth');
        //$user = Auth::user();
        $user = Auth::id();
        //print_r($user);exit;
        //Auth::logout();
        $data['id'] = $user;
        return view('production.test',$data);
        
    }

        public function users(){
        //Auth::logout();
        $this->middleware('auth');
        //$user = Auth::user();
        $user = Auth::id();
        //print_r($user);exit;
        //Auth::logout();
        $data['id'] = $user;
        return view('production.users',$data);
        
    }


}
