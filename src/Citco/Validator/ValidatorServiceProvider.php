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

	public function register(){}
	public function boot()
	{
		$validator = $this->app->make('validator');
		$validator->resolver(function($translator, $data, $rules, $messages)
		{
		    return new Validator($translator, $data, $rules, $messages);
		});
	}
}
