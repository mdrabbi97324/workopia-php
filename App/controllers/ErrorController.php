<?php

namespace App\Controllers;

class ErrorController
{


    /**
     * 404 note found error
     *
     * @param string $message
     * @return void
     */
    public static function notFound($message = 'Resource not found')
    {

        http_response_code(404);

        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }


    /**
     * 403 note unauthorized
     *
     * @param string $message
     * @return void
     */
    public static function unauthorized($message = 'Your are not authorized for view this resource')
    {

        http_response_code(403);

        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }
}
