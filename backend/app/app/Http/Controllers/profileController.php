<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\UploadAssetRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;
class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healthCheckVar = DB::table('users')->get();
        echo json_encode($healthCheckVar,JSON_NUMERIC_CHECK);  
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request)
    {
     
$uid = $request->id;
$AccountInfo = DB::table('users')->select('name', 'email','created_at','email','account_type','active','user_profile_avatar','devices','gender','height','weight','publicShare','metric')->where('id','=',$uid)->get();
        echo json_encode($AccountInfo,JSON_NUMERIC_CHECK);  
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
    public function update(Request $request)
    {
        // $now = new DateTime();
        // $UId = $request->user()->id;
        // $nameUpdated = $request->name;
        // $emailUpdated = $request->email;
        // $profilepic = $request->file('profilepic')->store('profile_pictures');
        // $businessLogoUpdated = $request->file('business_logo')->store('business_logo');
        // $businesstitleUpdated = $request->business_title;
        // $businessNameUpdated = $request->business_name;

        // $userUpdate = DB::table('users')
        // ->where('id', $UId)
        // ->update(['name', '=' $nameUpdated],
        //     ['email', '=', $emailUpdated],
        //     ['user_profile_avatar', '=', $profilepic],
        //     ['business_logo', '=', $businessLogoUpdated],
        //     ['business_title', '=', $businesstitleUpdated],
        //     ['business_name', '=', $businessNameUpdated]
        // );

        // return response($userUpdate)
        // ->header('Content-Type', 'application/json');

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
