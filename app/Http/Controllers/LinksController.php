<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LinksService;

class LinksController extends Controller
{
    protected $linksService;

    /**
     * Constructor of UserController
     */
    public function __construct(LinksService $linksService)
    {
        $this->linksService = $linksService;
    }

    public function extractHtml(Request $request)
    {
        return $this->linksService->extractHtml($request->all());
    }
}
