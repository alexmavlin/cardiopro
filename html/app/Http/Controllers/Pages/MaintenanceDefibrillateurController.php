<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class MaintenanceDefibrillateurController extends Controller
{
    private $description = "Les Défibrillateurs ont une obligation de maintenance découvrez nos offres de maintenance connectée à distance ou maintenance classique sur site.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('maintenance-defibrillateur');
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
                    'name' => 'Nos Offers',
                    'link' => '#',
                ],
                [
                    'name' => 'Maintenance de défibrillateur',
                    'link' => route('maintenance-defibrillateur'),
                ],
            ],
        ];

        return view('pages/maintenance-defibrillateur', compact('data'));
    }
}
