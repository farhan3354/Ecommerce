<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function aboutus()
    {
        return view('about');
    }

    public function form()
    {
        return view('contactus');
    } 
    public function blogitem()
    {
        return view('blog');
    }
    
    public function paymen()
    {
        return view('payment');
    }
    
}

