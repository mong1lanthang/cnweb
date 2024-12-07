<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainAdminController extends Controller
{
    //

    public function index()
    {
        $admin = Auth::user();
        return view('backend.home')->with('admin', $admin);
    }
}
