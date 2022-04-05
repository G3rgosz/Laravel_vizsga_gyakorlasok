<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bakery;

class BakeryController extends Controller
{
    public function index(){
        $bakeries = Bakery::all();
        return view("list_bakery",["bakeries" => $bakeries]);
    }
    public function create(){
        return view("new_bakery");
    }
    public function store(Request $request){
        Bakery::create($request->all());
        return redirect('/');
    }
    public function delete($id){
        Bakery::destroy($id);
        return redirect('/');
    }
}
