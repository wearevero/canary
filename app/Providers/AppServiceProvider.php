<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // This is Health check monitor, we use it from Spatie package
        // if u want to enable this feature, u should installing it in first

        // Health::checks([
        //     CacheCheck::new(),
        //     DatabaseCheck::new(),
        //     DatabaseSizeCheck::new()->failWhenSizeAboveGb(
        //         errorThresholdGb: 1.0
        //     ),
        //     DebugModeCheck::new()->expectedToBe(true),
        //     EnvironmentCheck::new()->expectEnvironment("local"),
        //     FlareErrorOccurrenceCountCheck::new()->warnWhenMoreErrorsReceivedThan(
        //         20
        //     ),
        //     UsedDiskSpaceCheck::new(),
        //     PingCheck::new()
        //         ->url("localhost:8000")
        //         ->timeout(3)
        //         ->name("Development Environment"),
        // ]);
    }

    public function boot(): void
    {
        config(["app.locale" => "id"]);
        Carbon::setLocale("id");
        date_default_timezone_set("Asia/Jakarta");
    }
}
