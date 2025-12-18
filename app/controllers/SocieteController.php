<?php

namespace app\controllers;

use flight\Engine;
use app\models\ProduitModel;

class SocieteController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public function update($societe) {
		$SocieteModel = new SocieteModel();
		$societe = $SocieteModel->update($societe);

		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $societe;
	}

}