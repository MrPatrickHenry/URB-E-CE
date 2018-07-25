<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\User;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request,$id)
    {

        $Invoices = DB::table('invoices')->where('invoicable_id', $id)->get();
return response($Invoices)
        ->header('Content-Type', 'application/json');    }


    public function indexDetails(Request $request)
    {
        $UId = $request->user()->id;

        // $invoiceID = $requst=>$invoice_id;

        $InvoiceDetails = DB::table('invoice_lines')->where('invoice_id',1)->get();
        echo json_encode($InvoiceDetails,JSON_NUMERIC_CHECK); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createInvoice()
    {
   // Get all id's for invoicing who had IO end in the last 30 days
$uIDs = DB::table('AssetoOrder')->select('accountID')->where('ad_end_date','<=','2018-05-18')->get();
   // Get all id's with actual assts in the db

foreach($uIDs as $accounts=>$accountID){
    //vars needed
    //$acountingID = $accountID; //should be called from scheduluer?
    $BrandTax = 1.08; //should be called from somewhere else
    $now = new DateTime();
    $datetime = '2018-05-02';
    $BrandCurrency = 'USD'; //should be called from somewhere else 
    $invoiceID = $accounts*4+4; //should be better

//rates needed
 $OfferRate = DB::table('orders')->select('id','ad_offer_payout')
        ->where([
            ['accountID', '=', $invoiceID]
        // ['active', '=', '1']
        ])->get();

if (empty($OfferRate[0])) {
        continue;
    }


//asset to charge against
 $assetsToCharge = DB::table('assets')->select('order_ID','downloaded','description')
        ->where(
            'order_ID', '=', $OfferRate[0]->id)
        ->get();


//charge

        $tax = $BrandTax;
        if (empty($assetsToCharge[0])) {
        continue;
    }
    else{
        $varA = $assetsToCharge[0]->downloaded;
        $varB = $OfferRate[0]->ad_offer_payout;
        $varC = $varA * $varB;
        $varD = $varC * $tax;
        $varE = ($varA * $varB * $tax);
        $varF = $varD - $varC;
    }

//insert invoice

        $InvoiceInsertion = DB::table('invoices')->insert([
            'invoicable_type' => 'xR Views', 
            'order_ID' => $assetsToCharge[0]->order_ID,
            'invoicable_ID' => $invoiceID, 
            'tax' => $BrandTax,
            'total' => $varE,
            'currency' => $BrandCurrency,
            'reference' => '20-twenty', 
            'status' => 'UnPaid',
            'receiver_info' => 'TBC',
            'sender_info' => 'TBC',
            'payment_info' => 'To be Paid within 14 days', 
            'note' => 'Testing',
            'created_at' => now()
        ]);

$newInvoiceID = DB::table('invoices')->latest()->get();
     
 // extract value from name field. 
        //should make  function call to createinvoiceLines and pass data through but later....for now this dirty workaround
        $InvoiceLineItems = DB::table('invoice_lines')->insert([
            'amount' => $varE, 
            'tax' => $varF,
            'tax_percentage' => $BrandTax,
 'invoice_id' => $newInvoiceID[0]->id,
            'description' => $assetsToCharge[0]->description,
            'created_at' => now()
        ]);
                 echo json_encode($InvoiceLineItems,JSON_NUMERIC_CHECK); 

}


    }

    public function createInvoiceLines()
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
