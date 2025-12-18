<?php

namespace app\controllers;

use flight\Engine;
use app\models\SocieteEntrepotModel;

use Flight;

class SocieteEntrepotController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getEntrepot($idSociete) {
		$SocieteEntrepotModel = new SocieteEntrepotModel(Flight::db());
		$societeEntrepot = $SocieteEntrepotModel->getEntrepot($idSociete);

		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $societeEntrepot;
	}

}