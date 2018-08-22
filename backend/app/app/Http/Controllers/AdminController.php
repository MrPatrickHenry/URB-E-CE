<?php

namespace App\Http\Controllers;
use DB;
use Storage;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;


class AdminController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    //
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function createUser()
{
    $email = $request->email;
    $password   = $request->password;
    $name = $request->name;


    $userCreation = DB::table('users')->insert([
        'email' => $email,
        'password' => Hash::make($password),  
        'name' => $name
    ]);

    echo json_encode($userCreation,JSON_NUMERIC_CHECK); 

}


public function updateUser(Request $request)
{
   $now = new DateTime();
   $uid = $request->id;
   $nameUpdated = $request->name;
   $active = $requst->active;
   $tier = $request->tier;
   $account_type = $request->accountType;
   $emailUpdated = $request->email;
   $profilepic = $request->file('profilepic')->store('profile_pictures');
   $gender = $request->gender;
   $height = $request->height;
   $weight = $request->weight;
   $publicShare = $request->publicShare;
   $metric = $request->metric;
   $devices = $request->devices;

   $userUpdate = DB::table('users')->where('id', $uid)->update(
    ['name' => $nameUpdated,
    'email' => $emailUpdated,
    'updated_at' => $now,
    'user_profile_avatar' => $profilepic,
    'gender' => $gender,
    'active' => $active,
    'account_type' => $account_type,
    'tier' => $tier,
    'height' => $height,
    'weight' => $weight,
    'publicShare' => $publicShare,
    'metric' => $metric,
    'devices' => $devices]);
   return response( json_encode('Success Updated',JSON_NUMERIC_CHECK), 200)
   ->header('Content-Type', 'application/json')->header(
    'Success', 200);
}

public function resetPassword(Request $request)
{


    $uid = $request->id;
    $userCreation = DB::table('users')->update([
        'password' => Hash::make($password)
    ])->where('id',$uid);

    echo json_encode($userCreation,JSON_NUMERIC_CHECK); 

}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */


public function UserDetails(Request $request){

    $userlocation = 'America/New_York';
    // $userlocation = $request->usrlocale;

    // $timezone->setTimezone($userlocation);

    $userCount = DB::table('users')->where('active','active')->count();

    $userInActiveCount = DB::table('users')->where('active','inactive')->count();

    $men = DB::table('users')->where('gender','Male')->count();
    $woman = DB::table('users')->where('gender','Female')->count();
    $genderless = DB::table('users')->where('gender','other')->count();


    $sumsECarbon = DB::table('ridesummary')
    ->where('id','>', 1)
    ->sum('eCO2');

    $sumsCCarbon = DB::table('ridesummary')
    ->where('id','>', 1)
    ->sum('cCO2');

    $sumsOdometer = DB::table('ridesummary')
    ->where('id','>', 1)
    ->sum('distance');

    $devices =DB::table('users')->select(DB::raw('count(devices) as rides, devices'))->where('id','>',1)->groupBy('devices')->get();

    $avgSpeed = DB::table('ridesummary')->avg('avgSpeed');

    $topRider= DB::table('users')
    ->where('active', '=','active')
    ->orderBy('odmoeter', 'desc')->take(1)->get(); 

    $MaxSpeed= DB::table('ridesummary')
    ->select('maxSpeed')
    ->orderBy('maxSpeed', 'desc')->take(1)->get(); 

//bike Analyitcs
    $altituteOverSpeed =DB::table('RideData')
    ->select('Altitude','speed' )->get();

    $speedwithXTrend=DB::table('RideData')->select('speed','x');

    $TrendaltitutewithX =DB::table('RideData')
    ->select('Altitude','x' )->get();

    $centripetalForce=DB::table('RideData')->select('z','speed');

    $wobblersSpeedwithY =DB::table('RideData')
    ->select('speed','y' )->get();
// removing password  
    $userdecoded = json_decode($topRider);
    $BlueRider =  data_fill($userdecoded, 'password', 10);


    $furtherstDistance= DB::table('ridesummary')->select('distance')
    ->orderBy('distance', 'desc')->get();
    
    $DistanceDecoded = json_decode($furtherstDistance);

    $distanceLongest = array_first($DistanceDecoded);
    $longestRide = array_get($distanceLongest, 'distance');



//best Day//
    $daymostRide= DB::table('ridesummary')->select('created_at')->orderBy('distance', 'desc')->groupBy('created_at'
)->get();

    $timeSTmapsArray = json_decode($daymostRide);
    $StartTime = array_first($timeSTmapsArray);
    $stime = data_get($StartTime,'timestamp');
    $cronos = new DateTime($stime);

//changing recorded user locale time from GMT UTC to userAdmin local time zone for relavance
// $CronosString = \Carbon\Carbon::parse($timeSTmapsArray[0]->created_at);
// $cronosLocale = new Carbon($CronosString, $userlocation);
    $data = [
        "status"=> "OK",
        "data"=> [ 
            "userDetails" =>
            [
                "Gender"=>[
                    "Men"=> $men,
                    "Women"=> $woman,
                    "other"=>$genderless
                ],
                "totalActiveUsers"=> $userCount,
                "totalInActiveUsers"=> $userInActiveCount,
                "odmoeter"=>$sumsOdometer,
                "devices"=>$devices,
                "topRider"=> $topRider
            ],
            "usage"=> [
             "day" => $cronos->format('l'),
             "time" => $cronos->format('H:i:s'),
             "avgSpeed" => $avgSpeed,
             "eCO2"=>$sumsECarbon,
             "cCO2"=>$sumsCCarbon,
               "longestRide" => $distanceLongest->distance //mile
           ],
           "Rideanalytics"=>[
            "altOverSpeed"=> $altituteOverSpeed,
            "speedwithX"=>$speedwithXTrend,
            "TrendAltwithX"=>$TrendaltitutewithX,
            "speedwobble"=>$wobblersSpeedwithY,
            "LeanersCorners"=>$centripetalForce,
            "MaxSpeed"=>$MaxSpeed


        ]

    ]
];
return response()->json($data);

}

public function rideData(Request $request){
    $avgSpeed = DB::table('RideData')
    ->where('id','>', 1)->select('TimeStamp')
    ->avg('x','y','z');  


    $avgSpeed = DB::table('ridesummary')
    ->where('id','>', 1)->selec('TimeStamp')
    ->avg('x','y','z');         

}


public function yellowJacket(Request $request)
{
    $dailyTravel = DB::table('users')->select('created_at','odmoeter','eCO2')->where([['active','=','active']])->orderBy('odmoeter','desc')->groupBy(DB::raw("day(created_at)"))->get();
    echo json_encode($dailyTravel,JSON_NUMERIC_CHECK); 

}


public function milesToday()
{
       $sumsOdometer = DB::table('ridesummary')
    ->where('id','>', 1)
    ->sum('distance');

    $data = [
        "status"=> "OK",
        "data"=> [ 
                "distance"=> $sumsOdometer,
                ]
            ];
return response()->json($data);

}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{

}
}
