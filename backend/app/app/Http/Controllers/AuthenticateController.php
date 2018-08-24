<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\ControllersController;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuthExceptions\JWTException;
use app\user;
use Illuminate\Support\Facades\Auth;


class AuthenticateController extends Controller
{

public function __construct()
   {
       // Apply the jwt.auth middleware to all methods in this controller
       // except for the authenticate method. We don't want to prevent
       // the user from retrieving their token if they don't already have it
       $this->middleware('jwt.auth', ['except' => ['authenticate']]);
   }

public function index()
{
    // Retrieve all the users in the database and return them
    // $users = User::all();
    $users = User::where('id', '=', Auth::id())->get();

 $data = [
        "status"=> "200",
        "data"=> [ $users[0]->id]
      ];


return response()->json($data);
}

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

 $credentialsError = [
        "status"=> "401",
        "message"=>"invalid credentials" ];

 $tokenError = [
        "status"=> "500",
        "message"=>"invalid credentials" ];

        try {
            // verify the credentials and create a token for the user
           if (! $token = JWTAuth::attempt($credentials)) {
//error handling

return response()->json($credentialsError);
            }
        } catch (JWTException $e) {
            // something went wrong
return response()->json($tokenError);

        }

        // if no errors are encountered we can return a JWT

//         $JWT=response()->json(compact('token'));
//         // $JWTtoken = $JWT[0]->token;
// echo $JWT;
// // return redirect()->action(
// //     'AuthenticateController@index', ['token' => $JWT]
// // );        // return response()->json(compact('token'));

return redirect()->action('AuthenticateController@index', ['token' => $token]
);

    }
}