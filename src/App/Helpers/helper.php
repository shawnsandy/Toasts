<?php


if (!function_exists('toastInfo')):

    /**
     * @param string $message
     * @param string|null $title
     */
    function toastInfo($message = 'Info', $title = null )
    {
        $app = app('Toast');
        $app->flash($message, 'info', $title);

    }

endif;


if (!function_exists('toastSuccess')):

    /**
     * @param string $message
     * @param string|null $title
     */
    function toastSuccess($message = 'Success!', $title = null )
    {
        $app = app('Toast');
        $app->flash($message, 'success', $title);

    }

endif;


if (!function_exists('toastError')):

    /**
     * @param string $message
     * @param string|null $title
     */
    function toastError($message = 'Error!', $title = null )
    {
        $app = app('Toast');
        $app->flash($message, 'error', $title);

    }

endif;


if (!function_exists('toastWarning')):

    /**
     * @param string $message
     * @param string|null $title
     */
    function toastWarning($message = 'Warning!', $title = null )
    {
        $app = app('Toast');
        $app->flash($message, 'warning', $title);

    }

endif;
