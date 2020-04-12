<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if (Auth::user()->hasAnyRole(['super-admin', 'admin'])){
            return view('ADMIN.index');
        } else {
            return view('home');
        }
    }
}
