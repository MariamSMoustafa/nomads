<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment1(){
        return view('auth.payment.payment');

    }

    public function payment2(Request $request)
    {
        $request->validate([



        ]);

        Payment::create([

            'cardnum' => $request -> cardnum,
            'cvv' => $request->cvv,
            'expiration' => $request -> expiration,
            'card_user_name'=>$request->card_user_name,


        ]);

    }

}
