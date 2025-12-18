<?php

namespace app\controllers;

use app\models\VoitureModel;
use flight\Engine;
use app\models\ProduitModel;
use Flight;

class VoitureController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getAll() {
		$VoitureModel = new VoitureModel(Flight::db());
		$voitures = $VoitureModel->getAll();

		// Flight::render('livrer', ['voitures' => $voitures]);
		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $voitures;
	}

	public static function getById($id) {
		$VoitureModel = new VoitureModel(Flight::db());
		$voitures = $VoitureModel->getById($id);

		return $voitures;
	}

}