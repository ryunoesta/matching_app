<?php

namespace App\Repositories;

use App\Models\User;

class ProjectRepository
{
    /**
        * ユーザーの事業けいかく一覧取得
        *
        * @param User $user
        * @return Collection
        */
    public function forUser(User $user)
    {
        return $user->projects()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}