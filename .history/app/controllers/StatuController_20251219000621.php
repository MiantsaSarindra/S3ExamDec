<?php

namespace app\controllers;

use flight\Engine;
use app\models\StatutModel;
use Flight;

class StatuController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getById() {
		$ColisModel = new StatutModel(Flight::db());
		$colis = $ColisModel->getById();
		return $colis;
	}
	
}