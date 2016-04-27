<?php namespace Modules\Currency\Providers;

use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Currency\Repositories\CurrencyRepository',
            function () {
                $repository = new \Modules\Currency\Repositories\Eloquent\EloquentCurrencyRepository(new \Modules\Currency\Entities\Currency());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Currency\Repositories\Cache\CacheCurrencyDecorator($repository);
            }
        );
// add bindings

    }
}
