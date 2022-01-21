<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banks = Bank::all()->take(3);
        return view('welcome',['banks'=>$banks]);
    }

    public function banksList()
    {
        return view('banks-list',['banks'=>Bank::all()]);
    }
    public function showBank(Bank $bank)
    {

        return view('bank',['bank'=>$bank]);
    }
}
