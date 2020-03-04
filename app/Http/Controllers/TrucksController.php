<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;

class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Truck::all();
        // $truck = new Truck();
        // $trucks = $truck->orderBy('created_at', 'desc');
        return view('/trucks/view_truck', compact('trucks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/trucks/create_truck");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'driver_name'=>'required',
            'driver_phone_number'=>'required',
            'company_name'=>'required',
            'owner_name'=>'required',
            'owner_email'=>'required',
            'truck_model'=>'required',
            'truck_registration'=>'required',
            'truck_chassis_number'=>'required',
            'truck_engine_number'=>'required',
            'truck_mileage'=>'required'
        ]);

        $truck = new Truck([
            'driver_name' => $request->get('driver_name'),
            'driver_phone_number' => $request->get('driver_phone_number'),
            'company_name' => $request->get('company_name'),
            'owner_name' => $request->get('owner_name'),
            'owner_email' => $request->get('owner_email'),
            'truck_model' => $request->get('truck_model'),
            'truck_registration' => $request->get('truck_registration'),
            'truck_chassis_number' => $request->get('truck_chassis_number'),
            'truck_engine_number' => $request->get('truck_engine_number'),
            'truck_mileage' => $request->get('truck_mileage')
        ]);
        $truck->save();
        return redirect('/trucks/view_truck')->with('success', "A new truck has just checked
                                                                in. You need to attend to it.
                                                    'This message will be sent to email as well  
                                                    for the technician to see' ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $truck = Truck::find($id);
        
        return view('/trucks/show_truck', compact('truck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truck = Truck::find($id);
        return view('/trucks/edit_truck', compact('truck'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
