<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {


       // $request->session()->put(['lobna'=>'instructor']);
        session(['peter'=>'student']);
        
        //return $request->session()->all();

        //$request->session()->get('lobna');

        // session(['edwin'=>'student']);
        // return session('edwin');
        //return view('home');
        //return $request->session()->all();
        // $request->session()->forget('peter');
        // $request->session()->flush(); //to delete all session variables

        // return $request->session()->all();
        // $request->session()->flash('message','post created');
        // return $request->session()->get('message');
        $request->session()->reflash();
        $request->session()->keep('message');
    }
}
