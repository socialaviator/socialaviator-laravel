<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        return view('website.home');
    }
    public function contact_us(Request $req)
    {
        return view('website.contact_us');
    }
    public function about_us(Request $req)
    {
        return view('website.about_us');
    }
}
