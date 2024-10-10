<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'hours',
        'deadline',
        'task_id',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
