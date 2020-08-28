<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
    $id = Auth::user()->id;
    $seed = User::findorfail($id)->seed;
    return view('pages.seeds')->with('seeds', $seed);
        //return view('pages.home');
    }
    public function test(){
        return "";
    }
    public function aurora(){
        return "aurora";
    }
}
