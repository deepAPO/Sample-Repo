<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Select * FROM Car;

        $cars = Car::all();
        //$cars = json_decode($cars);




        //Select * From Cars Where name = ' ';

        // $cars = Car::where('name', '=', 'Audi')
        // ->get();;

        // $cars = Car::where('name', '=', 'Audi')->firstOrFail();;

        // $cars = Car:: chunk(2, function($cars){
        //     foreach($cars as $car) {
        //         print_r($car);
        //     }
        // });

        //dd($cars);


        return view('cars.index',[
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Method 1
        // $car = new Car; // Initializing

        // $car->name =$request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');

        // $car->save();  // Save the Data

        $car= Car::create([

            'name'=> $request->input('name'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description')
        ]);

        return redirect('/cars'); // Redirect After Submitting


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        // dd($car->engines);
        //var_dump($car->productionDate);

        return view('cars.show')->with('car', $car) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id)->first();

        return view('cars.edit')->with('car', $car);
        // return view('cars.edit',compact('cars'));
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
        $car= Car::where('id', $id)
            ->update([

                'name'=> $request->input('name'),
                'founded'=>$request->input('founded'),
                'description'=>$request->input('description')
        ]);

        //$car->update($request->all());

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {

        $car->delete();

        return redirect('/cars');
    }
}
