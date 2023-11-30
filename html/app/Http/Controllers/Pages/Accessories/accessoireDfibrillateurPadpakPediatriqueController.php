<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDfibrillateurPadpakPediatriqueController extends Controller
{
    // accessoire-defibrillateur-padpak-pédiatrique

    private $description = "Le PadPak pédiatrique est le kit qui contient le pack, adapté aux enfants (jusqu&#39;à 8 ans ou 25 kg), de piles et d’une paire d’électrodes pré-combinées dans une cassette pour les défibrillateurs Samaritan PAD. Vous souhaitez acquérir un Padpak Pédiatrique ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-padpak-pédiatrique');
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
                    'name' => 'Nos Produits',
                    'link' => '#',
                ],
                [
                    'name' => 'Accessoires',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'PadPak Pédiatrique',
                    'link' => route('accessoire-defibrillateur-padpak-pédiatrique'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-padpak-pédiatrique', compact('data'));
    }
}
