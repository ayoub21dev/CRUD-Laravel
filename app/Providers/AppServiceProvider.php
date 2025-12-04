<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     
    // Rule: Who can write an article?
    // Answer: Users who are not admins (is_admin == 0)
    Gate::define('create-article', function (User $user) {
        return $user->is_admin == 0; // or !$user->is_admin
    });

    
// قانون: شكون يمسح مقال؟
Gate::define('delete-article', function (User $user, Article $article) {
    // 1. إلا كان مدير، مسموح ليه يمسح كلشي
    if ($user->is_admin == 1) {
        return true;
    }
    
    // 2. إلا كان كاتب، خاص المقال يكون ديالو
    return $user->id === $article->user_id;
    });
    }

}
