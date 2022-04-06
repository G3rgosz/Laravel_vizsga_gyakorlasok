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
    public function delete($id){
        Drink::destroy($id);
        return redirect('/');
    }
}
