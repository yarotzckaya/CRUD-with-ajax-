<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;
use App\User;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return view('autos.index', ['autos' => $autos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autos = Auto::all();
        return view('autos.create', ['autos' => $autos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'brand' => 'required',
            'user_id' => 'required',
        ]);

        //create new auto
        $auto = new Auto;
        $auto->name = $request->name;
        $auto->brand = $request->brand;
        $auto->user_id = $request->user_id;
        $auto->save();
        return redirect()->route('auto.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = Auto::findOrFail($id);
        return view('autos.edit', compact('auto')
        );
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
        $this->validate($request, [                 // updating auto
            'name' => 'required',
            'brand' => 'required',
            'user_id' => 'required',
        ]);

        $auto = Auto::findOrFail($id);
        $auto->name = $request->name;
        $auto->brand = $request->brand;
        $auto->user_id = $request->user_id;
        $auto->save();
        return redirect()->route('auto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Auto::findOrFail($id);      //find and delete the auto
        $auto->delete();
        return redirect()->route('auto.index');
    }
}
