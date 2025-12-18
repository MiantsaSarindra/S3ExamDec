<?php

namespace app\controllers;

use flight\Engine;
use app\models\StatutModel;
use Flight;

class StatutController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public static function getById() {
		$StatutModel = new StatutModel(Flight::db());
		$colis = $StatutModel->getById();
		return $colis;
	}
	
}