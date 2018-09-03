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

class featureService extends Controller
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

    


    public function navigation(Request $request)
    {
        $uid = $request->uid;  
        $datetime = new DateTime();

        $UserFeatures = DB::table('users')->select('locale','ReleaseVersion')->where([
            'id' => $uid
        ])->get();

$language = $UserFeatures[0]->locale;
$release = $UserFeatures[0]->ReleaseVersion;

        $Features = DB::table('featureService')
        ->select($language,'url','icon','FeaturedID')
        ->where([
            'Enabled' => 'True','release'=>$release
        ])->orderBy('FeaturedID','asc' )
        ->get();

        echo json_encode($Features,JSON_NUMERIC_CHECK); 

    }


}
