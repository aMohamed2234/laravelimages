<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BlogPostPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, BlogPost $post)
    {
        return $post->published || $user->id === $post->user_id || $user->isAdmin();
    }

    public function create(User $user)
    {
        return $user->hasPermissionTo('create blog posts');
    }

    public function update(User $user, BlogPost $post)
    {
        return $user->id === $post->user_id || $user->isAdmin();
    }

    public function delete(User $user, BlogPost $post)
    {
        return $user->id === $post->user_id || $user->isAdmin();
    }

    public function restore(User $user, BlogPost $post)
    {
        return $user->isAdmin();
    }

    public function forceDelete(User $user, BlogPost $post)
    {
        return $user->isAdmin();
    }
}
