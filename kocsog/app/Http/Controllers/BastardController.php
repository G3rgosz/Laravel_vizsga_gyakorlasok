<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bastard;

class BastardController extends Controller
{
    public function index(){
        $bastards = Bastard::all();
        return view("list_bastard", ["bastards"=>$bastards]);
    }
    public function create(){
        return view("new_bastard");
    }
    public function store(Request $request){
        Bastard::create($request->all());
        return redirect('/');
    }
    public function edit($id){
        $bastard = Bastard::find($id);
        return view("edit_bastard", ["bastard"=>$bastard]);
    }
    public function update(Request $request){
        $bastard = Bastard::find($request->id);
        $bastard->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        Bastard::destroy($id);
        return redirect('/');
    }
    public function search(Request $request){
        $bastards = Bastard::where("type",$request->type)->get();
        return view("show_bastard", ["bastards"=>$bastards]);
    }
}
