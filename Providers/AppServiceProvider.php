<?php

namespace Modules\CoffeeBasic\Providers;

use App\Contracts\Modules\ServiceProvider;

/**
 * @package $NAMESPACE$
 */
class AppServiceProvider extends ServiceProvider
{
    private $moduleSvc;

    protected $defer = false;

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->moduleSvc = app('App\Services\ModuleService');

        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();

        $this->registerLinks();

        // Uncomment this if you have migrations
        // $this->loadMigrationsFrom(__DIR__ . '/../$MIGRATIONS_PATH$');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }

    /**
     * Add module links here
     */
    public function registerLinks(): void
    {
        // Show this link if logged in
        // $this->moduleSvc->addFrontendLink('CoffeeBasic', '/coffeebasic', '', $logged_in=true);

        // Admin links:
        $this->moduleSvc->addAdminLink('CoffeeBasic', '/admin/coffeebasic');
    }

    /**
     * Register config.
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('coffeebasic.php'),
        ], 'coffeebasic');

        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'coffeebasic');
    }

    /**
     * Register views.
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/coffeebasic');
        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([$sourcePath => $viewPath],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/coffeebasic';
        }, \Config::get('view.paths')), [$sourcePath]), 'coffeebasic');
    }

    /**
     * Register translations.
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/coffeebasic');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'coffeebasic');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'coffeebasic');
        }
    }
}
