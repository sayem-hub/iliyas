<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'salary',
        'address',
        'position',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
