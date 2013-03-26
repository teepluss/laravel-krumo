<?php namespace Teepluss\Krumo;

use Illuminate\Support\ServiceProvider;

class KrumoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    	$this->package('teepluss/kromo');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register
		$this->app['krumo'] = $this->app->share(function($app)
		{
			return new krumo;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('krumo');
	}

}