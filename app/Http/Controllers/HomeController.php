<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Faq;
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

    public function storemessage(Request $request)
    {
        
        $data = new Message();
        $data->name = $request->input('name');
        $data->lastname = $request->input('lastname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your Message has been sent , Thank You.');

    }

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();

        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist

        ]);
    }



    // public function loginadmincheck(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/admin');

    //     }
    //     return back()->withErrors([
    //         'error' => 'The provided credentials do not  match  our records.',
    //     ])->onlyInput('email');
    // }


    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }

    // public function loginadmin(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }


}
