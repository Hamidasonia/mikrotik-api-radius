<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \RouterOS\Client;
use \RouterOS\Query;

class MikrotikController extends Controller
{
    public function index(){
        $client = new Client([
            'host' => "",
            'user' => "apps",
            'pass' => "apps123"
        ]);

        $query = (new Query('/ip/address/print'));
        
        // $code = Str::random(5);
        // echo $query;
        // $code = Str::lower($code);
        // strtolower($code);
        // $code = rand(1,100);
        // Send query and read response from RouterOS
        $response = $client->query($query)->read();
        
        dd($response);
    }
}
