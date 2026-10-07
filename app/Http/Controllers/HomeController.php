<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id')->take(4)->get();
        return view('home', compact('services'));
    }

}
