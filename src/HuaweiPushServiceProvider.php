<?php

namespace N2boost\LaravelHuaweiPush;

use Illuminate\Support\ServiceProvider;

class HuaweiPushServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/huawei-push.php' => config_path('huawei-push.php'),
        ], 'config');
    }
}
