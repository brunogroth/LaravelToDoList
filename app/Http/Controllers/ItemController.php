<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use App\Models\TodoItem;

class ItemController extends Controller
{

    public function show(Request $request){   
      
        $list = TodoList::where('id', $request->id)->first();  
        
        $id = $list->id;

        $item = TodoItem::where('todo_list_id', $request->id)->get();
        
    return view('show',  compact('id', 'list', 'item'));
}

    public function store(Request $request){
        $var = TodoItem::insert($request->except('_token'));
        $id= $request->todo_list_id;
        return redirect()->route('todo.show', $id)->with('success', 'Item sucessfully <strong>created!</strong>');
    }

    public function delete(Request $item){
        $id=$item->id;
        $deleteditems = TodoItem::where('todo_list_id',$id)->delete();

        return redirect()->route('todo.show', $id)->with('success', 'All Items sucessfully <strong>deleted!</strong>');
    }
}
