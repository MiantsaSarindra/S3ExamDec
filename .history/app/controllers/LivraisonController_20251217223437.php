<?php

namespace app\controllers;

use flight\Engine;

class LivraisonController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public function getBilan() {

	}
		$MouvementModel = new MouvementModel(Flight::db());
		$mouvement = $MouvementModel->getByIdVehicule($idVehicule);
		$idTrajet = $mouvement['idTrajet'];
		$TrajetModel = new TrajetModel(Flight::db());
		$trajet = $TrajetModel->getById($idTrajet);
		$benefice = $trajet['montantRecette'] - $trajet['montantCarburant'];

		return $benefice;
}