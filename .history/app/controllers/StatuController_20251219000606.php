<?php

namespace app\controllers;

use flight\Engine;
use app\models\StatutModel;
use Flight;

class ColisController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getAll() {
		$ColisModel = new StatutModel(Flight::db());
		$colis = $ColisModel->StatutModelz();
		return $colis;
	}
	
}