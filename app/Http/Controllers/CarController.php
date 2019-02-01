<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $cars = Car::all();

        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('car.create');
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
        
        $request->validate([
            'name'=>'required',
            'brand'=> 'required',
            'year' => 'required|digits:4|integer',
            'cost' => 'numeric'
        ]);
        $car = new Car([
            'name' => $request->get('name'),
            'brand'=> $request->get('brand'),
            'year'=> $request->get('year'),
            'cost' => $request->get('cost'),
            'description'=> $request->get('description')
        ]);
        $car->save();
        return redirect('/car')->with('success', 'Car has been added');
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
        //
        $car = Car::find($id);

        return view('car.edit', compact('car'));
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
        $request->validate([
            'name'=>'required',
            'brand'=> 'required',
            'year' => 'required|digits:4|integer',
            'cost' => 'numeric'
        ]);
        $car = Car::find($id);
        $car->name = $request->get('name');
        $car->brand = $request->get('brand');
        $car->year = $request->get('year');
        $car->cost = $request->get('cost');
        $car->description = $request->get('description');
        $car->save();
        return redirect('/car')->with('success', 'Car has been updated');
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
        $car = Car::find($id);
        $car->delete();

        return redirect('/car')->with('success', 'Car has been deleted Successfully');
    }
}
