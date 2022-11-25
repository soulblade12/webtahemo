<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class fetch_data_mqtt extends Controller
{
   

    public function getData()
    {
        // $requestData = $request->all();
        return dd("it is working...");
    }
}
   