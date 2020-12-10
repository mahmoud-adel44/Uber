<?php

namespace App\Http\Controllers\Admin;

use App\Driver;
use App\Http\Controllers\Controller;
use App\Town;
use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['travels'] = Travel::orderBy('id', 'DESC')->paginate(25);
        $data['town'] = Town::select('id', 'name')->get();
        return view('admin.travels.index')->with($data);
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
        $travel = Travel::where('id', $id)->get();

        $driver = Driver::where('id', $travel[0]->driver_id)->get();

        $data['town'] = Town::select('id', 'name')->get();
        return view('admin.travels.show', [
            'travel' => $travel,
            'driver' => $driver,
        ])->with($data);
    }



    public function delete($id)
    {
        $driver = Travel::findOrFail($id);
        $driver->delete();
        return redirect(route('travels.index'));
    }
}
