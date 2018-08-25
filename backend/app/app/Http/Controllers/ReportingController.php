<?php

namespace App\Http\Controllers;
use DB;
use Storage;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportingController extends Controller
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
public function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{

    $Latitude = $request->Latitude;
    $Longitude = $request->Longitude;
    $Altitude = $request->Altitude;
    $Accuracy = $request->Accuracy;
    $AltitudeAccuracy = $request->AltitudeAccuracy;
    $Heading = $request->Heading;
    $Speed = $request->Speed;
    $time = $request->timestamp;
    $RideID = $request->rid;
    $USERID = $request->USERID;
    $now = new DateTime();
    $x = $request->xvalue;
    $y = $request->yvalue;
    $z = $request->zvalue;

    $rideInsert = DB::table('RideData')->insert([
        'Latitude' => $Longitude, 
        'Longitude' => $Latitude,
        'Altitude' => $Altitude,
        'Accuracy' => $Accuracy,
        'Altitude Accuracy' => $AltitudeAccuracy,
        'Heading'=> $Heading,
        'Speed' => $Speed, 
        'Timestamp' => $now,
        'RideID' => $RideID,
        'USERID'=> $USERID,
        'x' => $x,
        'y' => $y,
        'z' => $z
    ]);
    // echo json_encode($rideInsert,JSON_NUMERIC_CHECK); 
    return response( json_encode('Success Added',JSON_NUMERIC_CHECK), 200)
    ->header('Content-Type', 'application/json')->header(
        'Success', 200);
}

// public function DistanceCalculator(){

//       $uid = '2';
//     $rideID = '4';
// $TimestampDateandTime = DB::table('RideData')->select('timestamp')->where([['USERID','=', $uid],['rideID','=', $rideID]])->orderBy('timestamp', 'asc')->get();
// $timeSTmapsArray = json_decode($TimestampDateandTime);
// $StartTime = array_first($timeSTmapsArray) ;
// $EndTime = array_last($timeSTmapsArray) ;

// $stime = data_get($StartTime,'timestamp');
// $etime = data_get($EndTime,'timestamp');

// $sdate = new DateTime($stime);
// $edate = new DateTime($etime);
// $diff = date_diff($sdate,$edate);

// echo $diff->h;
// }


public function odometer(Request $request)
{
// recieve data from summary and append to odometer in profile
    $carCO2 = 7.93664;
    $urbe = 0.0075376047441;

    $uid = $request->id;
    // sum of distance 
    $odometer = DB::table('ridesummary')->where('userId', $uid)->sum('distance');

    $urbeGreen = $urbe * $odometer;
    $carGreen = $carCO2 * $odometer;
    // insert to odmoter
    $odmoterInsert = DB::table('users')->where('id', $uid)->update(['odmoeter' => $odometer,
        'eCO2' => $urbeGreen, 'cCO2' => $carGreen]);

    return $this->LastRideShow($request);

}

public function summaryCreate(Request $request)
{
//starting vars for workload
    $carCO2 = 7.93664;
    $urbe = 0.0075376047441;
    $uid = $request->id;
    $rideID = $request->rid;
    $totalDistance = 0;
    $now = new DateTime();
//dev
    // $uid = 2;
    // $rideID =4;
//location
    $lats= DB::table('RideData')->select('Latitude','Longitude')->where([['USERID','=', $uid],['rideID','=', $rideID]])->get();


    $num = count($lats);

    if ($num == 0){
      return response('No Ride ID yet', 200)
      ->header('Content-Type', 'json');
  }

  $deal_lat=$lats[0]->Latitude;
  $deal_long=$lats[0]->Longitude;
  $geocode=file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.$deal_lat.','.$deal_long.'&sensor=false');
  $output = json_decode($geocode);



  $neighbourhood = $output->results[0]->address_components[1]->long_name;

  //   dd($neighbourhood);

  // if ($neighbourhood == 0){
  //     return response('No Record Created', 200)
  //     ->header('Content-Type', 'json');
  // }
  $city = $output->results[0]->address_components[4]->long_name;


  $Ridelocation = "$neighbourhood, $city";
//Speed
  $avgSpeed = DB::table('RideData')->where([['USERID','=', $uid],['rideID','=', $rideID]])->avg('Speed');


  $MaxSpeedArray = DB::table('RideData')->select('Speed')->where([['USERID','=', $uid],['rideID','=', $rideID]])->orderBy('Speed', 'desc')->limit(1)->get();


  $MaxSpeed = $MaxSpeedArray[0]->Speed;

//Time
  $TimestampDateandTime = DB::table('RideData')->select('timestamp')->where([['USERID','=', $uid],['rideID','=', $rideID]])->orderBy('timestamp', 'asc')->get();

  $timeSTmapsArray = json_decode($TimestampDateandTime);

  $StartTime = array_first($timeSTmapsArray);

  $EndTime = array_last($timeSTmapsArray) ;

  $stime = data_get($StartTime,'timestamp');

  $etime = data_get($EndTime,'timestamp');
  $sdate = new DateTime($stime);
  $edate = new DateTime($etime);
  $diff= date_diff($sdate,$edate);
  $diffh = $diff->h*3600;
  $dateminsec = $diffh+$diff->i*60+$diff->s;

  $time = round($dateminsec / 60);
//distance

  if ($time != 0){
    $distance = $avgSpeed / $time;
}
else {
    $distance = 0;
}


//carbonfootprint

$urbeGreen = $urbe * $distance;
$carGreen = $carCO2 * $distance;








    // google maps distanc
// function distance($lat1, $lon1, $lat2, $lon2) 
    // {
    //     $theta = $lon1 - $lon2;
    //     $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    //     $dist = acos($dist);
    //     $dist = rad2deg($dist);
    //     $miles = $dist * 60 * 1.1515;
    // } 

    // for($i=0;$i<$num;$i++){
    //     $distance = distance($lats[$i]->Latitude,$lats[$i]->Longitude,$lats[$i+1]->Latitude,$lats[$i+1]->Longitude);  

    // }


$rideSummaryInsert = DB::table('ridesummary')->insert([
    'distance' => $distance,
    'rideID' => $rideID,
    'city'=> $Ridelocation,
    'avgSpeed' => $avgSpeed,
    'created_at'=> $now,
    'maxSpeed' => $MaxSpeed,
    'userID' => $uid,
    'eCO2' => $urbeGreen,
    'cCO2' => $carGreen
]);
echo json_encode($rideSummaryInsert,JSON_NUMERIC_CHECK); 

return $this->odometer($request);

}
public function newRiderID(Request $request){
    $uid = $request->id;
    $RiderID = DB::table('RideData')->select('RideID')->where('userID','=',$uid)->orderBy('RideID', 'desc')->limit(1)->get();
//count the array incase its empty 
    $countobj = count($RiderID);
//make sure a new record can be run if new user
    if ($countobj == 0) {
        $NewRiderID  = 1;
        echo json_encode($NewRiderID,JSON_NUMERIC_CHECK); 
    } else {
        $NewRiderID = $RiderID[0]->RideID+1;
        echo json_encode($NewRiderID,JSON_NUMERIC_CHECK); 
    }
    
}

public function summaryShow(Request $request){
    $uid = $request->id;
    $riderSummary = DB::table('ridesummary')->where('userID','=',$uid)->get();
    echo json_encode($riderSummary,JSON_NUMERIC_CHECK);  
}


public function mapLatLong(Request $request){
    $uid = $request->id;
    $rid = $request->rid;

    $latsNLongs = DB::table('RideData')->select('Latitude as lat','Longitude as lng')->where([['userID','=',$uid],['RideID','=',$rid]])->get();
    echo json_encode($latsNLongs,JSON_NUMERIC_CHECK);  
}

public function LastRideShow(Request $request){
    $uid = $request->id;

    $lastRiderSummary = DB::table('ridesummary')->where('userID','=',$uid)->orderby('id','desc')->limit(1)->get();


$lastRideData = [
    "status"=> "200",
    "data"=> [ "summary"=> $lastRiderSummary]
  ];

    return response()->json($lastRideData);

}


public function yellowJacket(Request $request)
{
// recieve data from summary and append to odometer in profile
    // sum of distance 
    $odometerYellowJacket = DB::table('users')->select('name','user_profile_avatar','odmoeter','eCO2')->where([['active','=','active'],['publicShare','=',1]])->orderBy('odmoeter','desc')->limit(10)->get();
    echo json_encode($odometerYellowJacket,JSON_NUMERIC_CHECK); 
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
    //
}
}
