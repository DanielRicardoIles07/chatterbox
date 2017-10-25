<?php

namespace chatterbox\Http\Controllers;

use Illuminate\Http\Request;
use chatterbox\Developersmodel;
use Illuminate\Support\Facades\Auth;
use chatterbox\Http\Requests\DevelopersFormRequest;
use DB;

class DevelopersEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        return view('developers/edit_profile');
    }
    public function store(DevelopersFormRequest $request){
    	$developer= new Developersmodel();
        $developer->name = $request->get('name');
        $developer->email = $request->get('email');
        $developer->username = $request->get('username');
        $developer->developer_in = $request->get('developer_in');
        $developer->birth = $request->get('birth');
        $developer->email_2 = $request->get('email_2');
        $developer->save();
        return view('home');
    }
    
}
