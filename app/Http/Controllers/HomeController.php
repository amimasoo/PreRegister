<?php

namespace App\Http\Controllers;

use App\OptionDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Session::put('deptID', Auth::user()->deptID);
        $term = OptionDepartment::where('deptID', Session::get('deptID'))->where('optionID', 1)->first()->option_value; /** get current term */
        $year = OptionDepartment::where('deptID', Session::get('deptID'))->where('optionID', 2)->first()->option_value; /** get current year */
        Session::put('term', $term);
        Session::put('year', $year);
        return view('home');
    }
}
