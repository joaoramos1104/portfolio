<?php

namespace App\Exceptions;


use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    //login admin
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()){
            return response()->json(['message'=>$exception->getMessage()], 401 );
        }
        $guard = Arr::get($exception->guards(), 0);

        switch ($guard){
            case 'admin':
                $login = "admin_login";
                break;
            case 'web':
                $login = "login";
                break;
            default:
                $login = "login";
                break;
        }
        return redirect()->guest(route($login));
    }
}
