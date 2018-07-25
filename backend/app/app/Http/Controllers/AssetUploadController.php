<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadAssetRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;

class AssetUploadController extends Controller
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
        // $now = new DateTime();
        // $UId = $request->user()->id;
        // $location = $request->file_type;
        // //Storage
        // $path = $request->file('fbxasset')->store($location);
        // $size = Storage::size($path);
        // //DB insertion
        // $AssetUploadDBStore = DB::table('assets')->insert([
        //     'assetname' => $path, 'created_at' => $now, 'size' => $size, 'active' => '1',  'description' => 'TBC', 'downloaded' => '1', 'account_id' => $UId
        // ]);
        
        // echo json_encode($AssetUploadDBStore,JSON_NUMERIC_CHECK);
        
        // return view('assets');


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
