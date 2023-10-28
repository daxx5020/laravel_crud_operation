<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\login;

use Illuminate\Support\Facades\DB;

class examcontroller extends Controller
{
    public function register(){
        return view('home');
    }

    public function store(Request $request){

        $exam = new Exam();
        $exam->first_name = $request['firstname'];
        $exam->last_name = $request['lastname'];

        $exam->save();
        return redirect("view");
    }

    public function view(){

        $users = Exam::all();
        $data = compact("users");    

        return view("view")->with($data);
    }

    public function delete($id){

        $users = Exam::find($id); 
        $users->delete();

        return redirect("view");

    }

    public function update($id){
        $users = Exam::find($id);
        $data = compact("users");

        return view('edit')->with($data);

    }

    public function edit(Request $request, $id){

        $exam = Exam::find($id);
        $exam->first_name = $request['firstname'];
        $exam->last_name = $request['lastname'];

        $exam->save();

        return redirect('view');

    }

    

    
}
