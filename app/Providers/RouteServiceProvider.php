<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();

        $this->mapApiRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        // 前台路由
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
        // 后台路由
        Route::group([
            // 'middleware' => ['web','auth.admin:admin'],
            'middleware' => ['web'],
            'namespace' => $this->namespace.'\Admin',
            'prefix' => 'admin',
        ], function ($router) {
            // 登录
            require base_path('routes/admin/LoginRoute.php');
            // 后台首页
            require base_path('routes/admin/DashboardRoute.php');
            // 权限
            require base_path('routes/admin/PermissionRoute.php');
            
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace."\\API",
            'prefix' => 'api',
            'as' => 'api.',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
}
