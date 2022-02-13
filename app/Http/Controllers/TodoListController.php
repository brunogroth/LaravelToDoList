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
    
        return TodoListController::index();
    }

    public function index(){
        
        $lists = DB::table('lists')->get();

    //     dando foreach no array funciona, mas não consigo exibir na view foreach ($lists as $value) {
        
    //     echo   'ID: '. $value->id . '<br>';
    //     echo   'Title: '. $value->title . '<br>';
    //     echo   'Description: ' . $value->description . '<br>';
    //     echo   '<br>';
    // }
    
    return view('show', compact('lists')); 
    //return view('atacado.stock', compact('revenda', 'veiculos', 'filtros', 'marcas', 'filters', 'metaTags'));
    }

}

