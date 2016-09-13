<?php

namespace App\Providers;

use App\Article;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //this is effectively an action hook for views. Do something when a view is called - in this case, populate $latest for the nav
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeNavigation() {

        //delegate this to a particular class to handle. FYI this is all waaay abstraced for an applicaion of this size. For something as simple as generating a link
        // for a nav, we could simply do all this in the boot function of the ViewServiceProvider class, or even in the AppServiceProvider class.
        view()->composer('nav/_primary', 'App\Http\Composers\NavComposer');
        /*view()->composer('nav/_primary', function($view)
        {
            $view->with('latest', Article::latest()->first());
        });*/
    }
}
