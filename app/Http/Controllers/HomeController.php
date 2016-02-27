<?php

namespace SchoolApp\Http\Controllers;

use Gate;
use SchoolApp\Http\Requests;
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
    public function index()
    {
        //if(Gate::denies('isRole', 'admin')) {
        //    abort(403, "Sorry, You need to be admin");
        //}

        return view('home');
    }
}
