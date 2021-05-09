<?php

namespace App\Repositories;

use Tymon\JWTAuth\Facades\JWTAuth;

class UserRepository
{
    public function getUserClaims()
    {
        try {
            $code = 400;
            $status = "error";
            $data = null;
            $token = JWTAuth::getToken();
            $payload = JWTAuth::decode($token);
            if ($payload->get("email") && $payload->get("secret_word")) {
                $code = 200;
                $status = "success";
                $message = "Token claims valid!";
                $data = ["email" => $payload->get("email"), "secret_word" => $payload->get("secret_word")];
            }
        } catch (\Exception $error) {
            $message = "An error has ocurred! Try it again later, please.";
        }
        return response()->json([
            "code" => $code,
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ], $code);
    }
}
