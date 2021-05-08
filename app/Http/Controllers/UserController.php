<?php

namespace App\Http\Controllers;

use App\Services\userService;

class UserController extends Controller
{
    protected $userService;

    /**
     * Constructor of UserController
     */
    public function __construct(userService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param $request
     */
    public function getUserClaims()
    {
        return $this->userService->getUserClaims();
    }
}
