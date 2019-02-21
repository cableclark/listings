<?php

namespace App\Providers;
use Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Form::component('bsText', 'components.forms.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextarea', 'components.forms.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.forms.submit', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsHidden', 'components.forms.hidden', ['name', 'value' => null, 'attributes' => []]);
    }
}
