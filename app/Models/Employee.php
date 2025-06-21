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
        'designation_id',
        'department_id',
        'inserted_by',
        'updated_by',
        'employee_image',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function insertedBy()
    {
        return $this->belongsTo(User::class, 'inserted_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function itComponents()
    {
        return $this->hasMany(ItComponent::class);
    }
}
