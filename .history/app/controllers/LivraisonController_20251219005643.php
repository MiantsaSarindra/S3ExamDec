<?php

namespace app\controllers;

use flight\Engine;
use app\models\LivraisonModel;
use Flight;

class LivraisonController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public function getBilan($jour, $mois, $annee) {
		$LivraisonModel = new LivraisonModel(Flight::db());
		$bilan = $LivraisonModel->getBilan($jour, $mois, $annee);

		return $bilan;
	}
	
	public function update($livraison) {
		$LivraisonModel = new LivraisonModel();
		$livraison = $LivraisonModel->update($livraison);

		// $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
		return $livraison;
	}

	public static function redirect($colis,$voiture,$entrepot,$chauffeur){
		Flight::render('livrer', (['voitures' => $voiture,
			'colis' => $colis, 'entrepot' => $entrepot, 'chauffeurs' => $chauffeur])
		);
	}

	public static function traiter($data) {
		$livraison = [
			'idColis' => $data->coli,
			'adresseDepart' => $data->entrepot,
			'adresseDestination' => $data->adresseDestination,
			'idStatut' => 4,
			'idChauffeur' => $data->chauffeur,
			'idVoiture' => $data->voiture,
			'daty' => $data->daty,
			'salaire' => 1000,
			'montant' => 2500,
			'benefice' => 2500-1000

		];
		$model=new LivraisonModel(Flight::db());
		$model->save($livraison);
	}

	public function getAttentente() {
		$LivraisonModel = new LivraisonModel(Flight::db());
		$attente = $LivraisonModel->getAttentente();

		return $attente;
	}

	public function updateStatut($idLivraison) {
		$LivraisonModel = new LivraisonModel(Flight::db());
		$attente = $LivraisonModel->updateStatut($idLivraison);

		return $attente;
	}
}