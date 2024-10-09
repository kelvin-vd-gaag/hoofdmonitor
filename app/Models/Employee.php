<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class)
            ->withPivot('assigned_hours') // Zorg ervoor dat assigned_hours beschikbaar is
            ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
