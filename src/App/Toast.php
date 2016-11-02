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
    protected $attributes = [

    ];

    public function __construct()
    {
//        $this->request = $session;
    }


    /**
     * Sets the flash session message for toast
     *
     * @param string $message
     * @param string $type
     * @param string $view
     */
    public function flash($message = 'Some info', $type = 'info', $view = 'default')
    {

        Session::flash('toast.type', $type);
        Session::flash('toast.message', $message);
        Session::flash('toast.view', $view);

    }


    /**
     * @param $key
     * @param bool $value
     */
    public function setFlash($key, $value = true)
    {
        Session::flash('toast.' . $key, $value);
    }

    public function toastPlugin()
    {

    }

    public function toastJs()
    {
        return '<script src="/packages/toasts/toast.js"></script>';
    }

    public function toastrJs()
    {
        return '<script src="/toasts/toastr.js"></script>';
    }

    public function toastStyle()
    {

    }

}