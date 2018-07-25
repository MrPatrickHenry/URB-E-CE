<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Storage;


class AssetsController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    // {
    //     $UId = $request->user()->id;

    //     $AssetsManagerShow = DB::table('assets')->select('assetname', 'downloaded')
    //     ->where('account_id','=', $UId)->get();

    //     return response($AssetsManagerShow)
    //     ->header('Content-Type', 'application/json');
    //     // echo json_encode($AssetsManagerShow,JSON_NUMERIC_CHECK);

    }

    public function stream(Request $request){
                //authentication to api change to incorporate passport?
        // $UId = $request->user()->id;
        $sdkKey = $request->sdkkey;
        $sdkID = $request->sdkID;
           // bid engine parameters really
        $datetime = $request->datetime;
        $country  = $request->country; //reporting
        $device = $request->device;
        $os = $request->os;

        $interestsAffinty = $request->interestsAffinty; //should be both
        $whitelist = $request->whitelist; //future state
        $cpv = $request->ad_offer_payout;
               // $demographicage = $request->demographicage;
        $pegi = $request->pegi;

//find the order highest bid basd on criteria
        $findOrder = DB::table('orders')->select
        ('id')->where([
            ['ad_end_date', '>=', $datetime],
            ['country', '=', $country],
            ['device', '=', $device],
            ['os', '=', $os],
            ['pegi', '=', $pegi],
        // ['active', '=', '1']
        ])->get();
        $orderIDFound = $findOrder[0]->id;

// dd($orderIDFound);
//get the asset for the right id
        $AssetStream = DB::table('ActiveAsset')->select
        ('assetname','order_ID')->where([
            ['order_ID', '=', $orderIDFound]
        ])->get();

//increment asset download
        $assetStreamIncrement = DB::table('assets')->where('order_ID','=',$AssetStream[0]->order_ID)->increment('downloaded');
        return response($AssetStream);
        // ->header('Content-Type', 'application/json');
    }

    public function identify(Request $request)
    {
        $files = $request->file;
        $path = Storage::putFile('assets', $request->file('file'));

        exec("/usr/bin/python ~/classify_image.py $path", 
            $output, 
            $return_var);

        dd($output);



        return response()->json([
            'status' => '200',
            'state' => 'Successfully Created the Resource.'
        ]);
    }

    public function listen(Request $request)
    {

        // $input = $request->all();

        // dd($input);

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
