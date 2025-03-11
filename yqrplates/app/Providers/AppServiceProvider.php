<?php

namespace App\Providers;

use App\Models\Preference;
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
        Preference::observe(PreferenceObserver::class);
    }
}
