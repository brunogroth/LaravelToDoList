<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;
    protected $table = "item";
    protected $fillable = ['id', 'id_list', 'todo_item', 'checked'];
}
