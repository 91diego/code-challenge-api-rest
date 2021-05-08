<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    /**
     * Constructor of AuthController
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * @param $request
     */
    public function login(Request $request)
    {
        return $this->authService->login($request->all());
    }
}
