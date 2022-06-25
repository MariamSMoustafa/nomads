<?php

namespace App\Http\Controllers\Guide;

use App\Http\Controllers\Controller;
use App\LanguageCertificate;
use Illuminate\Http\Request;

class langcerController extends Controller
{
    public function register2(){
        return view('auth.Guide.guide2');

    }

    public function storeUser2(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'gender' => 'required|string|max:255',
//            'phone' => 'required|string|max:11',
//            'idNumber' => 'required|string|max:14',
//            'city' => 'required|string|max:20',
//            'birthday' =>'required|string|max:20',
//            'password' => 'required|string|min:8|confirmed',
//            'password_confirmation' => 'required',
///       ]);




        $file_extension = $request -> certificate_img -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'image/guide';
        $request -> certificate_img -> move($path,$file_name);

        LanguageCertificate::create([
            'id'=>$request->id,
            'language_name' => $request->language_name,
            'certificate_img' => $file_name,


        ]);

        return redirect('home');
    }

    protected function langcer(Request $request){

        $langcer=   LanguageCertificate::create([

            'language_name' => $request['language_name'],
            'certificate_img' => $request['certificate_img'],
            'guide_id'=> $request['guide_id'],

        ]);
        return response()->json($langcer,201);
    }



}