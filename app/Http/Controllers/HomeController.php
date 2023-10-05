<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $project = Project::all();

        return view("home");
    }


    public function homepage(){

        $project = Project::all(); 

        return view("homepage.homepage", compact("project"));
    }



    public function create() {
        return view ("createproject.create");
    }



    public function store( Request $request) {
        $request ->validate([
            "projectname"=>"required",
            "image"=>"required",
        ]);

        $project = new Project;
        $file_name = time() .".".request() -> image -> getClientOriginalExtension();    
        request()->image->move(public_path('images'), $file_name); 


        $project -> projectname = $request -> projectname;
        $project -> image = $file_name;

        $project -> save();

        return redirect()-> route('index')
        ->with('success', "Latest Prdoct Added");
    }
    
}
