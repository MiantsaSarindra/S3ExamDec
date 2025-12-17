<?php

namespace app\controllers;

use flight\Engine;
use app\models\LivraisonModel;

class LivraisonController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public function getBilan($jour, $mois, $annee) {
        
	}
	public function getTotalBenefVehicule($idVehicule) {
		$LivraisonModel = new LivraisonModel(Flight::db());
		$bilan = $LivraisonModel->getBilan($jour, $mois, $annee);
		$TrajetModel = new TrajetModel(Flight::db());
		$trajet = $TrajetModel->getById($idTrajet);
		$benefice = $trajet['montantRecette'] - $trajet['montantCarburant'];

		return $benefice;
	}
}