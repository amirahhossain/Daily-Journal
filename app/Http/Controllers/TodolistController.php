<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;
use DB;

class TodolistController extends Controller
{
  
      
    public function showAllData(){
        return view('fetchedData')->with('TodoArr',todolist::all());
        return response(['created'=>true],201);
    }


    public function delete($id){
       $res=todolist::find($id);
    $result=$res->delete();

    return redirect('/');
    return response(['created'=>true],202);
  
       }

    public function create(){
        return view('createView');
        
    }

    public function todo_submit(Request $req){
        

        $todo = new todolist;
        $todo->name = $req->input('name');
        $todo->save();
        return redirect('/');
        
    }

    public function edit($id){
          
         return view('edit_todo')->with('TodoArr_name',todolist::find($id));
         return response(['created'=>true],205);
    }

    public function edit_submit(Request $req, $id){

       
         $todo = todolist::find($id);
         $todo->name = $req->input('name');
         $todo->save();
         return redirect('/');
         return response(['created'=>true],206);
    }

   
}

