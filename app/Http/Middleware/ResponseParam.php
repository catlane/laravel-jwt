<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ResponseParam
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request                                                                          $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $response = $next($request);

        $content = json_decode($response->getContent(), TRUE);
        $response->setData([
            'code' => $content['code'] ?? 200,
            'msg'  => $content['msg'] ?? 'SUCCESS',
            'data' => $content['data'] ?? $content
        ]);
        return $response;
    }
}
