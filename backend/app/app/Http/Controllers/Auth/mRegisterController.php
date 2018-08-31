<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Storage;
use DateTime;
use Illuminate\Http\Request;

class mRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    


public function CreateMUser(Request $request)
{
    $email = $request->email;
    $password   = $request->password;
    $name = $request->name;


$userCreation = DB::table('users')->insert([
        'email' => $email,
        'created_at' => new DateTime();
        'password' => Hash::make($password),  
        'name' => $name
          ]);

    echo json_encode($userCreation,JSON_NUMERIC_CHECK); 

}


}
