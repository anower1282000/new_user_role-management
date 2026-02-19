<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraineeDashboardController extends Controller
{
     
    public function index()
    {
        return view('trainee.dashboard.index'); //
    }
}
