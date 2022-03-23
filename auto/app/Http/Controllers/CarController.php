<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view("/list_cars",[
            "cars" => $cars
        ]);
    }
    public function create(){
        return view("new_car");
    }
    public function store(Request $request){
        Car::create($request->all());
        return redirect('/');
    }
    public function edit($id){
        $car = Car::find($id);
        return view("edit_car",[
            "car"=>$car
        ]);
    }
    public function update(Request $request){
        $car = Car::find($request->id);
        $car->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        Car::destroy($id);
        return redirect('/');
    }
}
