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
        $RideID = $request->rid;
        $USERID = $request->USERID;


        $rideInsert = DB::table('RideData')->insert([
            'Latitude' => $Latitude, 
            'Longitude' => $Longitude,
            'Altitude' => $Altitude,
            'Accuracy' => $Accuracy,
            'Altitude Accuracy' => $AltitudeAccuracy,
            'Heading'=> $Heading,
            'Speed' => $Speed, 
            'Timestamp' => $time,
            'RideID' => $RideID,
            'USERID'=> $USERID,
            'avgSpeed' => 5
        ]);

        echo json_encode($rideInsert,JSON_NUMERIC_CHECK); 

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
