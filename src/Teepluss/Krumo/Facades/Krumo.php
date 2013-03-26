<?php namespace Teepluss\Krumo\Facades;

use Illuminate\Support\Facades\Facade;

class Krumo extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'krumo'; }

}