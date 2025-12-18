<?php

namespace app\models;

use Flight;

class ProduitModel {
    
    public function getProduits() {
        $produits = [
			[ 'id' => 1, 'name' => 'cahier', 'img' => '1.jpg', 'prix' => '5000', 'descr' => 'cahier trop beau' ],
			[ 'id' => 2, 'name' => 'gourde', 'img' => '2.jpg', 'prix' => '10000', 'descr' => 'gourde trop jolie' ],
			[ 'id' => 3, 'name' => 'carnet noel', 'img' => '3.jpg', 'prix' => '25000', 'descr' => 'wow carnet trop beau' ],

		];

        return $produits;
    }

    public function getProduit($id) {
        $produits = [
			[ 'id' => 1, 'name' => 'cahier', 'img' => '1.jpg', 'prix' => '5000', 'descr' => 'cahier trop beau' ],
			[ 'id' => 2, 'name' => 'gourde', 'img' => '2.jpg', 'prix' => '10000', 'descr' => 'gourde trop jolie' ],
			[ 'id' => 3, 'name' => 'carnet noel', 'img' => '3.jpg', 'prix' => '25000', 'descr' => 'wow carnet trop beau' ],

		];
        return $produits[$id];
    }
}
