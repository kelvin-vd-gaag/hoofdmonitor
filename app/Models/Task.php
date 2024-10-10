<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

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
