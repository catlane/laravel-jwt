<?php

namespace App\Exceptions;

use Throwable;

class OverHandler extends \Exception
{
    protected $responseData = [];
    public function __construct($message = "", $customizeCode = 0, $data = [], Throwable $previous = null)
    {
        $this->responseData = $data;
        parent::__construct($message, $customizeCode, $previous);
    }


    /**
     * 转换异常为 HTTP 响应
     *
     *
     */
    public function render($request)
    {
        return response()->json([
            'code' => $this->getCode(),
            'msg' => $this->getMessage(),
            'data' => $this->responseData
        ], 200);
    }
}

