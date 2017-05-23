<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAssistRoutes();

        $this->mapInspectorRoutes();

        $this->mapJobseekerRoutes();

        $this->mapEmployerRoutes();

        //
    }

    /**
     * Define the "employer" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEmployerRoutes()
    {
        Route::group([
            'middleware' => ['web', 'employer', 'auth:employer'],
            'prefix' => 'employer',
            'as' => 'employer.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/employer.php');
        });
    }

    /**
     * Define the "jobseeker" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapJobseekerRoutes()
    {
        Route::group([
            'middleware' => ['web', 'jobseeker', 'auth:jobseeker'],
            'prefix' => 'jobseeker',
            'as' => 'jobseeker.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/jobseeker.php');
        });
    }

    /**
     * Define the "inspector" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapInspectorRoutes()
    {
        Route::group([
            'middleware' => ['web', 'inspector', 'auth:inspector'],
            'prefix' => 'inspector',
            'as' => 'inspector.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/inspector.php');
        });
    }

    /**
     * Define the "assist" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAssistRoutes()
    {
        Route::group([
            'middleware' => ['web', 'assist', 'auth:assist'],
            'prefix' => 'assist',
            'as' => 'assist.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/assist.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
