<?php

namespace chatterbox\Http\Controllers;

use Illuminate\Http\Request;
use chatterbox\Developersmodel;
use Illuminate\Support\Facades\Auth;
use chatterbox\Http\Requests\DevelopersFormRequest;
use DB;

class DevelopersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $developers = DB::table('users')
                    ->orderBy('name', 'asc')
                    ->get();
        return view('home', ["developers" => $developers]);
    }

    
}
