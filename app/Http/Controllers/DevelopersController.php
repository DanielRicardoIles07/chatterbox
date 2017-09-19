<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developersmodel;
use Illuminate\Support\Facades\Auth;
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
                    ->orderBy('name', 'desc')
                    ->get();
        return view('developers/index', ["developers" => $developers]);
    }
}
