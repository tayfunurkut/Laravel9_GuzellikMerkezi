<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function categoryservice($id)
    {
        $category = Category::find($id);
        $services = DB::table('services')->where('category_id', $id)->get();
        return view('home.categoryservices', [
            'category' => $category,
            'services' => $services
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }


}
