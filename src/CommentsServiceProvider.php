<?php

namespace Ktcd\Comments;

use Illuminate\Support\ServiceProvider;

class CommentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ktcd_comments.php', 'ktcd_comments');
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadTranslationsFrom(__DIR__ . '/Resources/lang', 'comments');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // $this->publishes([
        //     __DIR__.'/config/svknd_feed.php' => config_path('svknd_feed.php'),
        // ], 'svknd-feed-config');

        // $this->publishes([
        //     __DIR__ . '/database/migrations/' => database_path('migrations'),
        // ], 'svknd-feed-migrations');
    }
}
