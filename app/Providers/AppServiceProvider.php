<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('progression', function ($expression) {
            list($day, $amount) = explode(',', $expression);
            return "<?php print_r(calculateProgression($day, $amount)); ?>";
        });
    }
}
