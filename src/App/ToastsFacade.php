<?php

namespace packages\ShawnSandy\Toasts\App;
use Illuminate\Support\Facades\Facade;

/**
 * Class TostFacade
 *
 * @package \packages\ShawnSandy\Toastr\App
 */
class ToastsFacade extends Facade
{


    protected static function getFacadeAccessor()
    {
        return 'Toasts';
    }


}
