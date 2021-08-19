<?php

namespace Modules\Chat\Providers;
use Illuminate\Support\ServiceProvider;
use Modules\Chat\Chatify\ChatifyMessenger;

class ChatifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('chatify',function(){
            return new ChatifyMessenger;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
