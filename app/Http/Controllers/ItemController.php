<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use App\Models\TodoItem;

class ItemController extends Controller
{

    public function show(Request $request){   
        $lists = TodoList::where('id', $request->id)->get();     
        $item = TodoItem::where('todo_list_id', $request->id)->get();
        
    return view('show', compact('lists', 'item'));
}
}
