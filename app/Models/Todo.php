<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public $table = 'todos';

    public $fillable = ['name', 'description', 'is_done'];

    protected $casts = [
        'is_done' => 'boolean'
    ];

    protected $attributes = [
        'is_done' => false
    ];

    public function getReadableTodoStatus()
    {
        if ($this->is_done) 
            return 'Yes';

        return 'No';
    }
}
