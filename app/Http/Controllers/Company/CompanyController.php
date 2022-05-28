<?php

namespace App\Http\Controllers\Company;
use App\Company;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function addCompany(){
        return view('auth.Company.addCompany');

    }
    public function storeCompany(Request $request)
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
//        ]);

        $file_extension2 = $request ->logo -> getClientOriginalExtension();
        $file_name2 = time().'.'.$file_extension2;
        $path2 = 'image/Company';
        $request -> logo -> move($path2,$file_name2);

        Company::create([
            'name' => $request->name,
            'address' => $request -> address,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'aboutus' => $request -> aboutus,
            'logo' => $file_name2,

        ]);

        return redirect('home');
    }

}
