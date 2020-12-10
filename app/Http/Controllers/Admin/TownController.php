<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view(route(''))
        $data['towns'] = Town::orderBy('id', 'DESC')->paginate(25);
        return view('admin.towns.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.towns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:20',
            'maridians' => 'required',
            'latitudes' =>   'required',
        ]);
        // dd($request->all());
        // dd($request->number);
        Town::create([
            'name' => $request->name,
            'maridians' => $request->maridians,
            'latitudes' => $request->latitudes,
        ]);

        return redirect(route('towns.index'));
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
        $data['town'] = Town::findOrFail($id);

        return view('admin.towns.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:20',
            'maridians' => 'required',
            'latitudes' =>   'required',
        ]);
        // dd($request->all());

        Town::findOrFail($request->id)->update($data);

        return redirect(route('towns.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $driver = Town::findOrFail($id);
        $driver->delete();
        return redirect(route('towns.index'));
    }
}
