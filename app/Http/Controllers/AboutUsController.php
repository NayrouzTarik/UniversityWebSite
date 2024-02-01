<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('aboutus.aboutus');
    }
    public function showServices()
    {
        return view('services.services');
    }
    public function showContact()
    {
        return view('contact.contact');
    }
    public function showHelp()
    {
        return view('help.help');
    }


}
