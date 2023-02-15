<?php

namespace App\Providers;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\CacheCheck;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Health::checks([
            CacheCheck::new(),
        ]);
    }

    public function boot(): void
    {
        //
    }
}
