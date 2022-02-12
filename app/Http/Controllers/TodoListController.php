<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function create() {
        return view('create');
    } 

    public function store(Request $request){

        $var = TodoList::insert($request->except('_token'));
    
        return 'success!';

    }


}

