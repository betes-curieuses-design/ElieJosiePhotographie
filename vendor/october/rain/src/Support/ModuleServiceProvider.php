<?php namespace October\Rain\Support;

use October\Rain\Support\Facades\File;
use Illuminate\Support\ServiceProvider as ServiceProviderBase;

abstract class ModuleServiceProvider extends ServiceProviderBase
{
    /**
     * Indicates if loading of the provider is deferred.
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     * @return void
     */
    public function boot()
    {
        if ($module = $this->getModule(func_get_args())) {
            /*
             * Register paths for: config, translator, view
             */
            $modulePath = base_path() . '/modules/' . $module;
            $this->loadViewsFrom($modulePath . '/views', $module);
            $this->loadTranslationsFrom($modulePath . '/lang', $module);
            $this->loadConfigFrom($modulePath . '/config', $module);
        }
    }

    public function getModule($args)
    {
        $module = (isset($args[0]) and is_string($args[0])) ? $args[0] : null;
        return $module;
    }

    /**
     * Register a config file namespace.
     * @param  string  $path
     * @param  string  $namespace
     * @return void
     */
    protected function loadConfigFrom($path, $namespace)
    {
        $this->app['config']->package($namespace, $path);
    }

    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        if ($module = $this->getModule(func_get_args())) {
            /*
             * Add routes, if available
             */
            $routesFile = base_path() . '/modules/' . $module . '/routes.php';
            if (File::isFile($routesFile))
                require $routesFile;
        }
    }

    /**
     * Get the services provided by the provider.
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Registers a new console (artisan) command
     * @param $key The command name
     * @param $class The command class
     * @return void
     */
    public function registerConsoleCommand($key, $class)
    {
        $key = 'command.'.$key;
        $this->app[$key] = $this->app->share(function($app) use ($class) {
            return new $class;
        });

        $this->commands($key);
    }

}
