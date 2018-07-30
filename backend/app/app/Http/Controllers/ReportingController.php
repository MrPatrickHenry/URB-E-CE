<?php

namespace App\Http\Controllers;
use DB;
use Storage;
use DateTime;

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
        $RideID = 3;
        $USERID = 2;
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

        echo json_encode($rideInsert,JSON_NUMERIC_CHECK); 

    }


    public function summaryCreate(Request $request)
    {
// get data ready for math
// math for summary
// inject in to table


        $uid = $request->id;
        $rideID = $request->RideID;
        $totalDistance = 0;

//get the data and totals in seperate array
        $lats= DB::table('RideData')->select('Latitude','Longitude')->where('USERID','=',1)->get();
        $num = count($lats);
       
       function distance($lat1, $lon1, $lat2, $lon2, $unit) 
        {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
              return ($miles * 1.60934);
          } else if ($unit == "N") {
              return ($miles * 0.8684);
          } else {
              return $miles;
              echo json_encode($miles,JSON_NUMERIC_CHECK);  

          }
      } 



for($i=0;$i<$num;$i++){
            $distance = distance($lats[$i]->Latitude,$lats[$i]->Longitude,$lats[$i+1]->Latitude,$lats[$i+1]->Longitude,"N");
        }

      
         
  }



  public function summaryShow(Request $request){


    $uid = $request->id;
    $riderSummary = DB::table('ridesummary')->where('userID','=',$uid)->get();
    echo json_encode($riderSummary,JSON_NUMERIC_CHECK);  
}

public function odometer(Request $request)
{
    // recieve data from summary and append to odometer in profile

    $uid = $request->id;

    $odometer = DB::table('ridesummary') >where('userId', $uid)
    ->sum('distance')-get();

    echo json_encode($odometer,JSON_NUMERIC_CHECK);  
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
