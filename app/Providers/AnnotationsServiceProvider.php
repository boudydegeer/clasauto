<?php namespace Clasauto\Providers;

use Adamgoose\AnnotationsServiceProvider as ServiceProvider;

class AnnotationsServiceProvider extends ServiceProvider {

	/**
	 * The classes to scan for event annotations.
	 *
	 * @var array
	 */
	protected $scanEvents = [ ];

	/**
	 * The classes to scan for route annotations.
	 *
	 * @var array
	 */
	protected $scanRoutes = [
		'Clasauto\Http\Controllers\HomeController',
		'Clasauto\Http\Controllers\Auth\AuthController',
		'Clasauto\Http\Controllers\Auth\PasswordController',

		'Clasauto\Http\Controllers\CarsController',
		'Clasauto\Http\Controllers\BikesController',

		'Clasauto\Http\Controllers\PagesController'
	];

	/**
	 * Determines if we will auto-scan in the local environment.
	 *
	 * @var bool
	 */
	protected $scanWhenLocal = false;

}