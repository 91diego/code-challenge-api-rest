<?php

namespace App\Services;

use App\Repositories\LinksRepository;

class LinksService
{
    protected $linksRepository;

    public function __construct(LinksRepository $linksRepository)
    {
        $this->linksRepository = $linksRepository;
    }

    /**
     * @param $request
     */
    public function extractHtml($request)
    {
        return $this->linksRepository->extractHtml($request);
    }
}
