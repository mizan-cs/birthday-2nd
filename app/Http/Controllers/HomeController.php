<?php

namespace App\Http\Controllers;

use App\Activity;
use App\People;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $storys = Story::all();
        $activities = Activity::all();
        $peoples = People::all();
        if (Session::has('local')){
            \App::setLocale(Session::get('local'));
        }
        return view('index', compact('storys','activities','peoples'));
    }
}
