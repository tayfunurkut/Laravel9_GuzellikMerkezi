<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($service, $title)
    {
        if($service->parentid == 0){
            return $title;
        }
        $parent = Service::find($service->parentid);
        $title  = $parent->title . ' > ' . $title;
        return AdminServiceController::getParentsTree($parent, $title);
        # code...
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();

        return view('admin.service.index', [
            'data' => $data
        ]);
    
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();

        return view('admin.service._create',[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = new Service();
        $data->categoryid = $request->categoryid;
        $data->userid = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }

        $data->save();
        return redirect('webpanel/service');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
        $data = Service::find($id);

        return view('admin.service._show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $data = Service::find($id);
        $datalist = Service::all();

        return view('admin.service._edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service, $id)
    {
        $data = Service::find($id);
        $data->categoryid = $request->categoryid;
        $data->userid = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }

        $data->save();
        return redirect('webpanel/service');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service, $id)
    {
        $data = Service::find($id);

        if($data->image && Storage::disk('public')->exists('$data->image')){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('webpanel/service');
    }
}
