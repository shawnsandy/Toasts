<?php


if (!function_exists('createToast')) :


    /**
     * @param string      $message
     * @param null|string $title
     * @param string      $type
     */
    function createToast($message = 'Info', $title = null, $type = 'info')
    {
        $app = app('Toast');
        $app->flash($message, $type, $title);

    }


    if (!function_exists('toastInfo')) :

        /**
         * @param string      $message
         * @param string|null $title
         */
        function toastInfo($message = 'Info', $title = null)
        {

            createToast($message, $title);

        }

    endif;


    if (!function_exists('toastSuccess')) :

        /**
         * @param string      $message
         * @param string|null $title
         */
        function toastSuccess($message = 'Success!', $title = null)
        {

            createToast($message, $title, 'success');

        }

    endif;


    if (!function_exists('toastError')) :

        /**
         * @param string      $message
         * @param string|null $title
         */
        function toastError($message = 'Error!', $title = null)
        {

            createToast($message, $title, 'error');

        }

    endif;


    if (!function_exists('toastWarning')) :

        /**
         * @param string      $message
         * @param string|null $title
         */
        function toastWarning($message = 'Warning!', $title = null)
        {

            createToast($message, $title, 'warning');

        }

    endif;

endif;
