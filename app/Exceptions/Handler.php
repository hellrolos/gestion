<?php

namespace gestion\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GuzzleHttp\Ring\Exception\ConnectException;
use GuzzleHttp\Exception\ClientException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        //Se captura la exception de no encontrar una sesión y se redirecciona al login de la aplicación
        if($exception instanceof \Illuminate\Auth\AuthenticationException){
            return redirect('/')->with('info', 'Por favor, primero debes iniciar sesión');
        }
        if($exception instanceof MethodNotAllowedHttpException){
            return back()->with('error', 'Metodo de acceso no permitido');
        }
        if($exception->getCode() == 0){
            return response()->view('errors.default');
        }
        return parent::render($request, $exception);
    }
}
