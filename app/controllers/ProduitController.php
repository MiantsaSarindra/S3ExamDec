<?php

namespace app\controllers;

use flight\Engine;
use app\models\ProduitModel;

class ProduitController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public function getProduits() {
		$produitModel = new ProduitModel();
		$produits = $produitModel->getProduits();

		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $produits;
	}

	public function getProduit($id) {

		$produitModel = new ProduitModel();
		$produit = $produitModel->getProduit($id);
		
		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $produit;
	}

	// public function updateUser($id) {
	// 	// You could actually update data from the database if you had one set up
	// 	// $statement = $this->app->db()->runQuery("UPDATE users SET email = ? WHERE id = ?", [ $this->app->data['email'], $id ]);
	// 	$this->app->json([ 'success' => true, 'id' => $id ], 200, true, 'utf-8', JSON_PRETTY_PRINT);
	// }
}