<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'hours',
        'start_date',
        'end_date',
        'deadline',
        'slug'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }
}
