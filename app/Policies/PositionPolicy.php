<?php

namespace App\Policies;

use App\Models\Position;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PositionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Position $position)
    {
        //
        return $user->role->hasPermission('view_position');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role->hasPermission('create_position');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Position $position)
    {
        return $user->role->hasPermission('edit_position');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Position $position)
    {
        return $user->role->hasPermission('delete_position');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Position $position)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Position $position)
    {
        //
    }
}