<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\User;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function singlevhicle($id){
        $car = Car::find($id);
        $user=User::find($car->user_id);
// dd($car);
         return view('singleCar',compact('car','user'));
    }
    public function allcars(){
        $cars = Car::all();
        return view('allcars',compact('cars'));

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
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car=new Car();
        $car->car_model = $request->car_model;
        $car->user_id = $request->user_id;
        if ($request->hasFile('image1')) {
            $file=$request->image1;
            $new_file=time().$file->getClientOriginalName();
            $file->move('images',$new_file);
            $car->image1='images/'.$new_file;
             }
             if ($request->hasFile('image2')) {
                $file=$request->image2;
                $new_file=time().$file->getClientOriginalName();
                $file->move('images',$new_file);
                $car->image2='images/'.$new_file;
                 }
                 if ($request->hasFile('image3')) {
                    $file=$request->image3;
                    $new_file=time().$file->getClientOriginalName();
                    $file->move('images',$new_file);
                    $car->image3='images/'.$new_file;
                     }
        $car->car_description = $request->car_description;
        $car->car_color = $request->car_color;
        $car->car_number = $request->car_number;
        $car->category_id = $request->category_id;
        $car->save();
        return redirect('user')->with(['status' => 'Success Add Car ']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
