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
		$mouvement = $LivraisonModel->getBilan($idVehicule);
		$idTrajet = $mouvement['idTrajet'];
		$TrajetModel = new TrajetModel(Flight::db());
		$trajet = $TrajetModel->getById($idTrajet);
		$benefice = $trajet['montantRecette'] - $trajet['montantCarburant'];

		return $benefice;
	}
}