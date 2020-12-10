<?php

namespace App\Http\Controllers\Admin;

use App\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $data['drives'] = Driver::orderBy('id', 'DESC')->paginate(25);
        return view('admin.drivers.index')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drivers.create');
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
            'name' => 'required|string|max:20',
            'number' => 'required',
            'car' => 'required|string',
        ]);
        // dd($request->all());
        // dd($request->number);
        Driver::create([
            'name' => $request->name,
            'number' => $request->number,
            'car' => $request->car,
        ]);

        return redirect(route('drivers.index'));
    }



    public function edit($id)
    {
        $data['driver'] = Driver::findOrFail($id);

        return view('admin.drivers.edit')->with($data);
    }


    public function update(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:20',
            'number' => 'required',
            'car' => 'required|string',
        ]);
        // dd($request->all());

        Driver::findOrFail($request->id)->update($data);

        return redirect(route('drivers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $Driver
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect(route('drivers.index'));
    }
}
