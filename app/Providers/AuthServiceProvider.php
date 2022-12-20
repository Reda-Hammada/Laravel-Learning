<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Posts' => 'App\Policies\Adminpolicty',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        Gate::define('update-post',function ($user, $post) { 

            return $user->id === $post->user_id;
        });

        // this is called before the Gate defining unlike after
        Gate::before(function($user, $ability){

                if($user->is_admin):

                    return true;
                    
                endif;
                // give the user  only certain abilities

               if($user->is_admin && in_array($ability,['update-post','delete-post'])):
                 return true;
               endif;

        });

    }
}
