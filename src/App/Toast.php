<?php

namespace ShawnSandy\Toasts\App;
use Session;


/**
 * Class Toastr
 *
 * @package \ShawnSandy\Toasts\App
 */

class Toast
{

    protected $session;
    protected $request;

    public function __construct()
    {
//        $this->request = $session;
    }


    /**
     * @param string $type
     * @param string $message
     */
    public function flash($message = 'Some info', $type = 'info')
    {

        Session::flash('toast.type', $type);
        Session::flash('toast.message', $message);

    }

    public function setFlash($key, $value = true)
    {
        Session::flash('toast.' . $key, $value);
    }

    public function toastPlugin()
    {

    }

    public function toastJs()
    {

    }

    public function toastStyle()
    {

    }

}
