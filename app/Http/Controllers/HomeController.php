<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static function mainCategoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public function index(){
        $sliderdata = Service::limit(4)->get();
        $servicedata = Service::limit(6)->get();
        return view('home.index', [
            'sliderdata' => $sliderdata,
            'servicedata' => $servicedata
        ]);
    }

    public function service($id){
        $data = Service::find($id);
        return view('home.service',[
            'data'=>$data
        ]);
    }

}
