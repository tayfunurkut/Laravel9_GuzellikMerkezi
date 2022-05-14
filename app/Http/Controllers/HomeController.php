<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliderdata = Service::limit(4)->get();
        return view('home.index', [
            'sliderdata' => $sliderdata
        ]);
    }
}
