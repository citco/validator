<?php
namespace Citco\Validator;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {

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
		//pass
	}

	public function boot()
	{
		$this->app->make('validator')->resolver(function($translator, $data, $rules, $messages)
		{
		    return new Validator($translator, $data, $rules, $messages);
		});
	}
}
