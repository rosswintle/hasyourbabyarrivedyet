<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        // If a send_ga_event session data is set, send it to the view
        view()->composer('*', function ($view) use ($request) {
            if ($request->session()->has('send_ga_event')) {
                view()->share('send_ga_event', $request->session()->get('send_ga_event'));
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
