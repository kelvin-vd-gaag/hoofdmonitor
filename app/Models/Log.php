<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'model_type', 'model_id', 'action', 'description', 'changes', 'action_time'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    // Polymorfe relatie om te verwijzen naar meerdere modellen
    public function loggable()
    {
        return $this->morphTo();
    }
}
