<?php

namespace App\Policies;

use App\Models\Milestone;
use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MilestonePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Milestone $milestone, Task $task): bool
    {
        // Haal de taak op die bij de milestone hoort
        $task = $milestone->task;

        // Controleer of de ingelogde gebruiker is gekoppeld aan de taak via de employees relatie
        return $user->employee && $task->employees->contains($user->employee->id);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Milestone $milestone): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Milestone $milestone): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Milestone $milestone): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Milestone $milestone): bool
    {
        //
    }
}
