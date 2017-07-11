<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Finance;
use Mail;

class FinanceController extends Controller
{
    public function index() {
        return view('finance');
    }

    public function financeUser(Request $request) {
        $financeUserDetails = new Finance();

        $confirmation_code = str_random(30);

        $financeUserDetails->first_name=$request->first_name;
        $financeUserDetails->last_name=$request->last_name;
        $financeUserDetails->phone_number=$request->phone_number;
        $financeUserDetails->id_number=$request->id_number;
        $financeUserDetails->email=$request->email;
        $financeUserDetails->save();

        Mail::send('mail.welcome-email',['confirmation_code'=>$confirmation_code], function ($message) {
            $message->to(input::get('email')/*, input::get('phone_number')*/)
                ->subject('Welcome to Simple Finance Management App');
        });

        return redirect('/')->with('status','Successfully submitted, Check your email!');
    }
}
