<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    // $fillableを用いて、一括代入
    protected $fillable = [
        'todo',
    ];
}
