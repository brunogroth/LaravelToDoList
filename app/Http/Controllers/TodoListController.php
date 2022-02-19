<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use Illuminate\Support\Facades\DB;

class TodoListController extends Controller
{
    public function create() {
        return view('create');
    } 

    public function store(Request $request){

        $var = TodoList::insert($request->except('_token'));
    
        return redirect()->route('todo.show')->with('success', 'To do List sucessfully <strong>created!</strong>'); ;
    }

    public function index(){        
        $lists = DB::table('lists')->get();

    return view('show', compact('lists'));
}

    public function delete(Request $request){
        $deleted = DB::table('lists')->where('id', '=', $request->id)->delete();

        return redirect()->back()->with('success', 'To do List sucessfully <strong> deleted!</strong>');  
    }

}

