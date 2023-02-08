<?php

namespace App\Packages\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 默认包配置
        /*
        $this->mergeConfigFrom(
            __DIR__.'/../config/example.php', 'example'
        );
        */
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 配置
        /*
        $this->publishes([
            __DIR__.'/../config/example.php' => config_path('example.php'),
        ]);
        */

        // 路由
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // 迁移
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // 翻译
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'auth');

        // 视图
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'auth');

        // 命令
        if ($this->app->runningInConsole()) {
            $this->commands([
                // InstallCommand::class,
            ]);
        }

        // 公共资源
        /*
         $this->publishes([
            __DIR__.'/../public' => public_path('vendor/auth'),
        ], 'public');
        */
    }
}
