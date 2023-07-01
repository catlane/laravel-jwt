<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ValidateRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (config('app.env') == 'production') {
            //获取所有的参数
            $params =$request->all();
            $timestamp = $params['timestamp'];
            if (strlen($timestamp) != 11) {
                throw new \App\Exceptions\OverHandler('时间戳格式非法');
            }



            //校验时间戳
            if (!isset($params['timestamp'])) {
                throw new \App\Exceptions\OverHandler('没有时间戳，非法请求');
            }
            if (!isset($params['nonce'])) {
                throw new \App\Exceptions\OverHandler('没有Nonce，非法请求');
            }
            if ($timestamp >= time()) {
                throw new \App\Exceptions\OverHandler('时间戳大于当前时间，非法请求');
            }

            if ((time() - $timestamp) > 60) {
                throw new \App\Exceptions\OverHandler('时间戳超时，非法请求');
            }
            //存放到redis中；
            if (Redis::exists('api_request_nonce:'.$params['nonce'])) {
                throw new \App\Exceptions\OverHandler('重复的nonce，非法请求');
            }
            Redis::setex('api_request_nonce' . $params['nonce'], 60, time());



            unset($params['sign']);

            foreach ($params as $k => $v) {
                if ($v === NULL || $v === '') {
                    unset($params[$k]);
                }
            }
            $apiKey = config('app.api_key');//拼接api加密密钥
            ksort($params);//key升序

            $string_temp = http_build_query($params);

            $string_temp .= $apiKey;

            $sign =  strtoupper(md5($string_temp));


            if ($sign != $request->get('sign')) {
                throw new \App\Exceptions\OverHandler('签名校验失败，非法请求');
            }
        }
        return $next($request);
    }
}

