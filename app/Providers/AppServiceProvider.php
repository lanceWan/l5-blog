<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 自定义blade标签
        Blade::directive('permission', function($expression) {
            return "<?php if(auth('admin')->check() && auth('admin')->user()->can({$expression})): ?>";
        });

        Blade::directive('endpermission', function() {
            return '<?php endif; ?>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
