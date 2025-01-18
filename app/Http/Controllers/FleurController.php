<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FleurController extends Controller
{
     public function index(){
         return view('welcome');
     }
     
     public function fleursMethode(){
                
        $fleursdata = [
            ['nom' => 'La jonquille', 'url' => '1.jpg', 'description' => 'Une fleur printanière aux pétales jaunes.'],
            ['nom' => 'la rose', 'url' => '2.jpg', 'description' => 'La reine des fleurs, symbole de l\'amour.'],
            ['nom' => 'la pensée', 'url' => '3.jpg', 'description' => 'Petite fleur colorée, souvent utilisée dans les jardins.'],
            ['nom' => 'la lavande', 'url' => '4.jpg', 'description' => 'Connue pour son parfum apaisant et ses fleurs violettes.'],
            ['nom' => 'la tulipe', 'url' => '5.jpg', 'description' => 'Fleur à bulbe, très populaire au printemps.'],
            ['nom' => 'la marguerite', 'url' => '6.jpg', 'description' => 'Symbole de pureté et d\'innocence, avec ses pétales blancs.'],
            ['nom' => 'Orchidée', 'url' => '7.jpg', 'description' => 'Une fleur exotique aux formes élégantes.'],
            ['nom' => 'le tournesol', 'url' => '8.jpg', 'description' => 'Fleur géante qui suit le mouvement du soleil.'],
            ['nom' => 'le lys', 'url' => '9.jpg', 'description' => 'Fleur majestueuse, souvent utilisée dans les bouquets.'],
            ['nom' => 'le pissenlit', 'url' => '10.jpg', 'description' => 'Fleur sauvage, connue pour ses graines soufflées par le vent.'],
            ['nom' => 'le coquelicot', 'url' => '11.jpg', 'description' => 'Fleur des champs, célèbre pour ses pétales rouges délicats.'],
            ['nom' => 'le bleuet', 'url' => '12.jpg', 'description' => 'Petite fleur bleue, symbole de mémoire en France.'],
            ['nom' => 'Acacia', 'url' => '13.jpg', 'description' => 'Arbre à fleurs jaunes ou blanches, souvent parfumées.'],
            ['nom' => 'le muflier', 'url' => '14.jpg', 'description' => 'Fleur colorée, aussi appelée gueule de loup.'],
            ['nom' => 'Anémone', 'url' => '15.jpg', 'description' => 'Fleur colorée avec un centre noir, poussant au printemps.'],
            ['nom' => 'Azalée', 'url' => '16.jpg', 'description' => 'Fleur buissonnante avec des pétales délicats.'],
            ['nom' => 'Arum', 'url' => '17.jpg', 'description' => 'Fleur élégante, souvent utilisée dans les arrangements floraux.'],
            ['nom' => 'Iris', 'url' => '18.jpg', 'description' => 'Fleur aux pétales complexes, souvent de couleur violette ou bleue.'],
            ['nom' => 'la perce-neige', 'url' => '19.jpg', 'description' => 'Petite fleur blanche qui fleurit en hiver.'],
            ['nom' => 'le crocus', 'url' => '20.jpg', 'description' => 'Fleur à bulbe, première à fleurir après l\'hiver.'],
            ['nom' => 'le coeur-de-marie', 'url' => '21.jpg', 'description' => 'Fleur en forme de cœur, souvent rouge ou rose.'],
        ];


        return view('fleurs',compact('fleursdata'));
     }
}
