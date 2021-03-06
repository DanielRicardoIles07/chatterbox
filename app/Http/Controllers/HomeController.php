<?php

namespace babblerchat\Http\Controllers;

use Illuminate\Http\Request;
use babblerchat\Developersmodel;
use Illuminate\Support\Facades\Auth;
use babblerchat\Http\Requests\DevelopersFormRequest;
use DB;

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
    public function index(){
        $chatters = DB::table('users')
                    ->orderBy('name', 'asc')
                    ->get();
        return view('home', ["chatters" => $chatters]);
    }
}
