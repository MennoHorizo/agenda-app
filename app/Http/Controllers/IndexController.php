<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __construct(){

    }

    //method die de index pagine laad via een route @returns view
    public function loadIndexPage(){
        return view("welcome")->with("data",array("pagetype" => "index"));
    }
}
