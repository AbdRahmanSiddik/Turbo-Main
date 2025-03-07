<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use App\Listeners\UpdateLastLogin;
use Illuminate\Support\Facades\Event;
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
        Blade::directive('kegiatan', function () {
            return "<?php
            foreach (\App\Models\Kegiatan::all() as \$kegiatan) :
            ?>";
        });

        Blade::directive('endkegiatan', function () {
            return '<?php endforeach; ?>';
        });
    }
}
