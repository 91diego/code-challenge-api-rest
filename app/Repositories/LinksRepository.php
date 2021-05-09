<?php

namespace App\Repositories;

use App\Exports\ElementsExport;
use App\Models\Url;
use Goutte\Client;
use Maatwebsite\Excel\Facades\Excel;

class LinksRepository
{
    public function exportExcel()
    {
        return Excel::download(new ElementsExport, 'elements.xlsx');
    }

    public function extractHtml($request)
    {
        try {
            $client = new Client();
            $crawler = $client->request('GET', $request["url"]);
            $this->data = "";
            // Get <a href=""> elemnts
            $crawler->filter('a')->each(function ($element) {
                $this->data = $this->data . ", " . $element->text();
            });
            $data = explode(",", $this->data);
            $url = new Url();
            $url->url = $request["url"];
            $url->elements = json_encode($data);
            $url->save();
            $this->exportExcel();
        } catch (\Exception $error) {
            return response()->json([
                "code" => 400,
                "status" => "error",
                "message" => "An error has ocurred! Try it again later, please. $error",
                "data" => null,
            ], 400);
        }
    }
}
