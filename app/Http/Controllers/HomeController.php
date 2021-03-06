<?php

namespace Herbnkulture\Http\Controllers;

use Herbnkulture\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


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
     * Show the application dashboard Home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('master');
    }

 
}
