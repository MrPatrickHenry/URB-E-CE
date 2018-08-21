<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$healthCheckVar = DB::table('users')->get();
return response( json_encode(200,JSON_NUMERIC_CHECK), 200)
       ->header('Content-Type', 'application/json')->header(
        'Success', 200);
          }

   
}
