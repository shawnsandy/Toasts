<?php

namespace ShawnSandy\Toasts\App;

use Illuminate\Support\Facades\Facade;

/**
 * Class TostFacade
 *
 * @package \packages\ShawnSandy\Toastr\App
 */
class ToastsFacade extends Facade
{


    /**
     * Facade Accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Toast';
    }


}
