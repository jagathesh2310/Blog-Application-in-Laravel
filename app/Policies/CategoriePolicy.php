<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Category $categorie)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Category $categorie)
    {
    }

    public function delete(User $user, Category $categorie)
    {
    }

    public function restore(User $user, Category $categorie)
    {
    }

    public function forceDelete(User $user, Category $categorie)
    {
    }
}
