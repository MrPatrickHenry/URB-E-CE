<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use DateTime;


class InvoiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */




    protected $signature = 'invoice:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Invoices';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        


//vars needed
        // this does just one invoice and not an array as needed

        $uID = '23'; //should be called from scheduluer?
        $BrandTax = 1.08; //should be called from somewhere else
        $now = new DateTime();
        $datetime = '2018-05-02';
        $BrandCurrency = 'USD'; //should be called from somewhere else 
        $invoiceID = $uID; //should be better

//rates needed
 $OfferRate = DB::table('orders')->select('id','ad_offer_payout')
        ->where([
            ['ad_end_date', '>=', $datetime],
            ['accountID', '=', 23],
        // ['active', '=', '1']
        ])->get();

//asset to charge against
 $assetsToCharge = DB::table('ActiveAsset')->select('downloaded','description')
        ->where(
            'order_id', '=', $OfferRate[0]->id)->get();

//charge
        $tax = $BrandTax;

        $varA = $assetsToCharge[0]->downloaded;
        $varB = $OfferRate[0]->ad_offer_payout;

        $varC = $varA * $varB;
        $varD = $varC * $tax;
        $varE = ($varA * $varB * $tax);
        $varF = $varD - $varC;


//insert invoice



        $InvoiceInsertion = DB::table('invoices')->insert([
            'invoicable_type' => 'xR Views', 
            'invoicable_id' => $invoiceID, 
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
// dd($newInvoiceID);
        $InvoiceLineItems = DB::table('invoice_lines')->insert([
            'amount' => $varE, 
            'tax' => $varF,
            'tax_percentage' => $BrandTax,
 'invoice_id' => $newInvoiceID[0]->invoicable_id,
            'description' => $assetsToCharge[0]->description,
            'created_at' => now()
        ]);




            }
}
