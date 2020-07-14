<?php

namespace App\Http\Controllers;
use \App\Models\Study;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $study = new Study();
        $studantsStatus = $study->countStatus();
        // dd($studantsStatus);
        return view('home', compact('studantsStatus'));
    }
}
