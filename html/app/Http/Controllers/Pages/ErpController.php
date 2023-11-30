<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class ErpController extends Controller
{
    private $description = "Les ERP de catégorie 1 à 5 ont pour obligation l’installation de défibrillateur. De plus, la maintenance, la formation et la signalétique des DAE sont aussi réglementés. Tout établissement recevant du public doit être équipé d'un défibrillateur automatique ou semi-automatique, y compris les salles de sport, les gares, les hôtels, les restaurants et autres lieux clos ou couverts.";
    private $keywords = "installation defibrillateur";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('erp');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Solutions',
                    'link' => '#',
                ],
                [
                    'name' => 'Location de défibrillateur',
                    'link' => route('erp'),
                ],
            ],
        ];

        return view('pages/erp', compact('data'));
    }
}
