<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;
use Tymon\JWTAuth\Exceptions\JWTException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
//        OverHandler::class
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        OverHandler::class,
//        JWTException::class
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
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

//
//    /**
//     * Render an exception into an HTTP response.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \Exception  $exception
//     * @return \Illuminate\Http\Response
//     */
    public function render($request, Throwable $exception)
    {

//        return parent::render($request, $exception);
        if (in_array($exception::class, $this->dontReport)) {
            return parent::render($request, $exception);
        }

        if ($exception instanceof HttpExceptionInterface) {
            clog('http错误', [
                'param' => $request->all(),
                'url' => $request->fullUrl(),
                'code' => $exception->getCode(),
                'line' => $exception->getLine(),
                'msg' => $exception->getMessage(),
                'file' => $exception->getFile()
            ], 'http_error');
            return response()->json([
                'code' => $exception->getStatusCode(),
                'msg' =>  $exception->getMessage(),
                'data' => []
            ], 200);
        }
        if ($exception instanceof QueryException) {
            clog('查询错误', [
                'param' => $request->all(),
                'url' => $request->fullUrl(),
                'msg' => $exception->getMessage(),
            ], 'sql_error');
            return response()->json([
                'code' =>  500,
                'msg' => '查询出错',
                'data' => [
                    'msg' => $exception->getMessage()
                ]
            ], 200);
        }
        clog('系统错误', [
            'param' => $request->all(),
            'url' => $request->fullUrl(),
            'code' => $exception->getCode(),
            'line' => $exception->getLine(),
            'msg' => $exception->getMessage(),
            'file' => $exception->getFile()
        ], 'sys_error');
        return response()->json([
            'code' => $exception->getCode() ? : 500,
            'msg' => $exception->getCode() ? $exception->getMessage() : '系统错误',
            'data' => []
        ], 200);

    }
}
