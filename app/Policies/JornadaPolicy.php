<?php

namespace App\Policies;

use App\Models\Jornada;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JornadaPolicy
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
    public function view(User $user, Jornada $jornada): bool
    {
        //
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
    public function update(User $user, Jornada $jornada): bool
    {
        return $user->id === $jornada->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jornada $jornada): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jornada $jornada): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jornada $jornada): bool
    {
        //
    }
}
