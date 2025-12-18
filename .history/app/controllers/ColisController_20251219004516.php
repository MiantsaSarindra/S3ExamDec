<?php

namespace app\controllers;

use flight\Engine;
use app\models\ColisModel;
use Flight;

class ColisController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getAll() {
		$ColisModel = new ColisModel(Flight::db());
		$colis = $ColisModel->getAll();

		// Flight::render('livrer', ['colis' => $colis]);
		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $colis;
	}

	public static function getById($id) {
		$ColisModel = new ColisModel(Flight::db());
		$colis = $ColisModel->getById();

		// Flight::render('livrer', ['colis' => $colis]);
		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $colis;
	}
	
}