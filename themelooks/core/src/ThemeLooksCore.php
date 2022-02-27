<?php

namespace Themelooks\Core;

use Illuminate\Support\ServiceProvider;

class ThemeLooksCore extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'core');
        $this->loadViewsFrom(__DIR__ . '/views2', 'core2');
    }

    public function register()
    {
    }
}
