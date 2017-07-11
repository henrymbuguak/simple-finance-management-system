<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
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
        $financeUserDetails = DB::table('finances')->get();
        return view('home', ['financeUserDetails' => $financeUserDetails]);
    }

    public function getPdf() {
        $financeUserDetails = DB::table('finances')->get();

        $data = array(
            'financeUserDetails'=>$financeUserDetails
        );

        //dd($data);
        $pdf = PDF::loadView('report.finance-report', $data);
        return $pdf->stream('finance.pdf');
    }
}
