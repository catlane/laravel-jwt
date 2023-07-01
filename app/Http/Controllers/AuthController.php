<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;

//https://github.com/lyne007/laravel-advanced-demo/tree/master/jwt-demo
class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {




        $email = $request->post('email');
        $password = $request->post('password');

        $user = User::where('email', $email)->first();
        if (!$user) {
            throw new \App\Exceptions\OverHandler('未找到当前用户');
        }

        if (!Hash::check($password, $user->password)) {
            throw new \App\Exceptions\OverHandler('密码错误');
        }


        if (!$token = auth('api')->login($user)) {
            throw new \App\Exceptions\OverHandler('登录失败', '401');
        }

        return $this->respondWithToken($token);

    }


    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return JWTAuth::parseToken()->touser();
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {

        JWTAuth::parseToken()->invalidate();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function resetPwd(\Tymon\JWTAuth\JWTAuth $auth)
    {

        $user = request()->user();
        $user->password = bcrypt('password1');
        $user->save();
        $token = $auth->refresh();

        return response()->json([
            'msg'  => '更新密码成功',
            'data' => [
                'token' => $token
            ]
        ])->header('Authorization', 'Bearer '.$token);
    }


    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return [
            'msg'  => '请求成功',
            'data' => [
                'access_token' => $token,
                'token_type'   => 'bearer',
                'expires_in'   => JWTAuth::factory()->getTTL() * 60,
            ]
        ];
    }

}
