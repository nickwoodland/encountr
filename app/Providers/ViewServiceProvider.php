<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Monster;

use App\Character;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeEncounterForm();
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

    private function composeEncounterForm() {

        //delegate this to a particular class to handle. FYI this is all waaay abstraced for an applicaion of this size. For something as simple as generating a link
        // for a nav, we could simply do all this in the boot function of the ViewServiceProvider class, or even in the AppServiceProvider class.
        view()->composer('forms/_encounter', function($view){

            $pcs = Character::pluck('name', 'id');
            $npcs = Monster::pluck('name', 'id');

            return $view->with(array('pcs'=>$pcs,'npcs'=>$npcs));
        });

    }
}
