<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Comment;
use App\Observers\CommentObserver;
use App\Observers\PostObserver;
use Illuminate\Auth\Access\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Comment::observe(CommentObserver::class);
        Post::observe(PostObserver::class);


        Model::unguard();

        View::composer('*', function($view){
          $view->with('categories', PostCategory::all());
            });

        View::composer('*', function($view){
          $view->with('limitcategories', PostCategory::inRandomOrder()->limit(3)->get());
            });

        View::composer('*', function($view){
          $view->with('popularposts', Post::get()->sortByDesc('views')->take(5));
            });




      Gate::define('admin', function(User $user){
       return $user->name == "hasan";


      });
    }
}
