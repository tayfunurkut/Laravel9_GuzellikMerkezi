<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Appointment::all();
        return view('admin.appointment.index',[
            'datalist'=>$datalist
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Appointment::find($id);
        $datalist =Appointment::all();
        return view('admin.appointment.edit',[
            'data'=>$data,'datalist'=>$datalist
        ]);
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Appointment::find($id);
        $data->note=$request->input('note');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->back()->with('success','Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::destroy($id);
        return redirect('/webpanel/appointment');
    }


    public function acceptedAppointment()
    {

        $datalist=Appointment::where('status', 'Accepted')->get();
        return view('admin.appointment.acceptedappointment',[
            'datalist'=>$datalist
        ]);
    }
    public function completedAppointment()
    {

        $datalist=Appointment::where('status', 'Completed')->get();
        return view('admin.appointment.acceptedappointment',[
            'datalist'=>$datalist
        ]);
    }
}
