<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReconnaitreUnArretCardiaqueController extends Controller
{
    private $description = "Connaître les gestes de premiers secours et savoir appréhender un arrêt cardiaque combiné à l’utilisation d’un défibrillateur automatisé externe permet d’agir plus rapidement et ainsi d’augmenter considérablement les chances de survie de la victime.";
    private $keywords = "";
    private $title = "Reconnaitre un arrêt cardiaque, les gestes de premier secours | Sauvons des vies | Spécialiste du DAE et DSA | CardioPro";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('reconnaitre-un-arret-cardiaque');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'title' => $this->title,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Reconnaitre un arret cardiaque',
                    'link' => route('reconnaitre-un-arret-cardiaque'),
                ],
            ],
        ];

        return view('pages/reconnaitre-un-arret-cardiaque', compact('data'));
    }
}
