<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
class OrdersController extends Controller
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
     $now = new DateTime();
     $UId = $request->user()->id;



     $accountID = $request->user()->id;
     $agency_name = $request->agency_name;
     $contact_name = $request->contact_name;
     $contact_title = $request->contact_title;
     $ad_start_date = $request->ad_start_date;
     $ad_end_date = $request->ad_end_date;
     $ad_descritpion = $request->ad_descritpion;
     $ad_format = $request->ad_format;
     $device = $request->device;
     $os = $request->os;
     $interest = $request->interest;
     $ad_offer_payout = $request->ad_offer_payout;
     $whitelist = $request->whitelist;
     $blacklist = $request->blacklist;
     $pegi = $request->pegi;
     $payment = $request->payment;
     $signature_digital = $request->signature_digital;
     $signature_digital_date = $request->signature_digital_date;
     $payment_t_and_c = $request->payment_t_and_c;


     $ioInsertion = DB::table('orders')->insert([

'todays_date' => $now,
        'accountID' => $accountID,
        'agency_name' => $agency_name,
        'contact_name' => $contact_name, 
        'contact_title' => $contact_title, 
        'ad_start_date' => $ad_start_date, 
        'ad_end_date' => $ad_end_date, 
        'ad_descritpion' => $ad_descritpion,
        'ad_format' => $ad_format,
        'ad_duration' => '21',
        'device' => '2017-01-01', 
        'os' => '2017-01-01', 
        'interest' => $interest, 
        'ad_offer_payout' => $ad_offer_payout, 
        'whitelist' => $whitelist,
        'blacklist' => $blacklist,
        'pegi' => $pegi,
                'paid' => '2',

        'payment' => 'yes', 
        'signature_digital' => $signature_digital, 
        'signature_digital_date' => $signature_digital_date, 
        'payment_t_and_c' => $payment_t_and_c
]);
        echo json_encode($ioInsertion,JSON_NUMERIC_CHECK);
        return view('orders'); }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $OrdersView = DB::table('orders')->where('accountID','=','6')->get();
        return response($OrdersView);
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
