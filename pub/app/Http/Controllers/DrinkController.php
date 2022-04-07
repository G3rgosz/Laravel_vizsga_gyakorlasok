<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function index(){
        $drinks = Drink::all();
        return view('list_drinks',[
            "drinks" => $drinks
        ]);
    }
    public function create(){
        return view("new_drink");
    }
    public function store(Request $request){
        Drink::create($request->all());
        return redirect('/');
    }
    public function edit($id){
        $drink = Drink::find($id);
        return view("edit_drink",[
            "drink" => $drink
        ]);
    }
    public function update(Request $request){
        $drink = Drink::find($request->id);
        $drink->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        Drink::destroy($id);
        return redirect('/');
    }
    public function search(Request $request){
        $drinks = Drink::where("type",$request->type)->get();
        return view('show_drinks',[
            "drinks" => $drinks
        ]);
    }
}
