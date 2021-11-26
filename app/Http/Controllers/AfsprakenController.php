<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfsprakenController extends Controller
{
    //constructor
    public function __construct(){
        //stel de middelware in dat alleen authenticated users toegang tot de pagina hebben.
        $this->middleware("auth");
    }

    //
    public function loadCalendar(){
        return 123;
    }

}
