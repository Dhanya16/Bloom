<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class servicesController extends Controller
{
    //
    function getData(Request $req)
    {
        return $req->input();
        
    }

}
