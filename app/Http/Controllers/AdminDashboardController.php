<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index'); // ফোল্ডার এবং ফাইল নাম অনুযায়ী
    }
}