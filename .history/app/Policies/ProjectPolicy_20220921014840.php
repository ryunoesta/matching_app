<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;

use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
        * 指定されたユーザーのタスクのとき削除可能
        *
        * @param User $user
        * @param Project $project
        * @return bool
        */
        public function destroy(User $user, Project $project)
        {
            return $user->id === $project->user_id;
        }
}
