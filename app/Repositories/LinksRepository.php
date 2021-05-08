<?php

namespace App\Repositories;

use Tymon\JWTAuth\Facades\JWTAuth;

class LinksRepository
{
    public function extractHtml($request)
    {
        try {
            $code = 400;
            $status = "error";
            $data = null;
            $message = "An error has ocurred!";
            if (true) {
                $code = 200;
                $status = "success";
                $message = "Token claims valid!";
                $data = $request;
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
