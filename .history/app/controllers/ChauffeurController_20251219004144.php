<?php

namespace app\controllers;

use flight\Engine;
use app\models\ChauffeurModel;

use Flight;

class ChauffeurController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getAll() {
		$ChauffeurModel = new ChauffeurModel(Flight::db());
		$chauffeur = $ChauffeurModel->getAll();

		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $chauffeur;
	}

	public static function getById() {
		$ChauffeurModel = new ChauffeurModel(Flight::db());
		$chauffeur = $ChauffeurModel->getById();

		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $chauffeur;
	}

}