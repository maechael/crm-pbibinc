<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserProfilePolicy
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
        return $user->role->hasPermission('view_admin_nav');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, UserProfile $userProfile)
    {
        //
        return $user->role->hasPermission('view_user-profile');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role->hasPermission('create_user-profile');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, UserProfile $userProfile)
    {
        return $user->role->hasPermission('edit_user-profile');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, UserProfile $userProfile)
    {
        return $user->role->hasPermission('delete_user-profile');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, UserProfile $userProfile)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, UserProfile $userProfile)
    {
        //
    }
}