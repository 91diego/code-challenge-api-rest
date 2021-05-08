<?php

namespace App\Repositories;

use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class AuthRepository
{
    public function login($request)
    {
        try {
            $code = 400;
            $status = "error";
            $data = null;
            $token = JWTAuth::attempt(['email' => $request['email'], 'password' => $request['password']]);
            dd($token);
            if ($token) {
                $user = User::where('email', $request['email'])->get();
                $code = 200;
                $status = "success";
                $message = "Logged in succesfully!";
                $data = [$user, $token];
            }else {
                $code = 400;
                $status = "error";
                $message = "Unauthorized!";
                $data = null;
            }
        } catch (\Exception $error) {
            $message = "An error has ocurred! Try it again later, please. $error";
        }
        return response()->json([
            "code" => $code,
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ], $code);
    }
}
