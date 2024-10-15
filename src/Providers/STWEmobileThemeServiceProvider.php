<?php

namespace STWEmobileTheme\Providers;

use Plenty\Plugin\ServiceProvider;

class STWEmobileThemeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(STWEmobileThemeRouteServiceProvider::class);
    }
}
